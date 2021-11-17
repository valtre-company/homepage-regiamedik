import React from 'react';
import { styled } from '@mui/material/styles';
import { makeStyles } from '@mui/styles';
import Paper from '@mui/material/Paper';
import Table from '@mui/material/Table';
import TableBody from '@mui/material/TableBody';
import TableCell, { tableCellClasses } from '@mui/material/TableCell';
import TableContainer from '@mui/material/TableContainer';
import TableHead from '@mui/material/TableHead';
import TablePagination from '@mui/material/TablePagination';
import TableRow from '@mui/material/TableRow';
import FormControl from '@mui/material/FormControl';
import Typography from '@mui/material/Typography';
import InputAdornment from '@mui/material/InputAdornment';
import SearchIcon from '@mui/icons-material/Search';
import TextField from '@mui/material/TextField';
import moment from 'moment';
import { formatPrice, capitalizeFirstLetter, filterArrayByValue } from '../../helpers';

const ServicesTab = ({services,servicesList,setServicesList}) => {   
   const classes = useStyles();
   const [page, setPage] = React.useState(0);
   const [rowsPerPage, setRowsPerPage] = React.useState(25);
   const handleChangePage = (event, newPage) => setPage(newPage) ;
   const handleChangeRowsPerPage = (event) => {
      setRowsPerPage(+event.target.value) 
      setPage(0);
   };   
   const StyledTableRow = styled(TableRow)(({ theme }) => ({
      '&:nth-of-type(odd)': {
         backgroundColor: theme.palette.action.hover,         
      },      
      '&:last-child td, &:last-child th': {
         border: 0,
      },
   }));
   const StyledTableCell = styled(TableCell)(({ theme }) => ({      
      [`&.${tableCellClasses.head}`]: {
         backgroundColor: theme.palette.primary.main,
         color: theme.palette.common.white,
      },
      [`&.${tableCellClasses.body}`]: {
         fontSize: 14,         
      },
   }));   
   return ( 
      <>
         <Paper className="table-services" sx={{ width: '100%', overflow: 'hidden' }}>
            <FormControl fullWidth sx={{ m: 1, }} variant="standard">
               <TextField
                  onChange={ e => setServicesList(filterArrayByValue(services,e.target.value))}
                  label="Buscar servicios"
                  InputProps={{
                     startAdornment: (
                        <InputAdornment position="start">
                           <SearchIcon />
                        </InputAdornment>
                     ),
                  }}
                  variant="standard"
               />
            </FormControl>
            { servicesList <= 0 ? <Typography variant="h6" align="center" py={3}>No se encontraron resultados</Typography> : 
               <>
                  <TableContainer sx={{ maxHeight: 440 }}>
                     <Table stickyHeader aria-label="sticky table">
                        <TableHead>
                           <TableRow>
                              <StyledTableCell>
                                 <Typography className={classes.textCell}>Descripción</Typography>
                              </StyledTableCell>
                              <StyledTableCell>
                                 <Typography className={classes.textCell}>Precio</Typography>
                              </StyledTableCell>
                              <StyledTableCell>
                                 <Typography className={classes.textCell}>Sucursal</Typography>
                              </StyledTableCell>
                              <StyledTableCell>
                                 <Typography className={classes.textCell}>Últim. Modificación</Typography>
                              </StyledTableCell>
                           </TableRow>
                        </TableHead>
                        <TableBody>
                           {servicesList.slice(page * rowsPerPage, page * rowsPerPage + rowsPerPage).map(({name,price,locations}) => (                           
                              <StyledTableRow key={name}>                                                            
                                 <TableCell className="styled-cell" component="th" scope="row">{capitalizeFirstLetter(name)}</TableCell>
                                 <TableCell>{formatPrice(price)}</TableCell>                              
                                 <TableCell>{locations.map(({name}) => name).join(', ')}</TableCell>
                                 <TableCell>{moment().locale("es").format("D MMM YYYY, h:mm:ss a")}</TableCell>
                              </StyledTableRow>
                           ))}
                        </TableBody>
                     </Table> 
                  </TableContainer>
                  <TablePagination
                     rowsPerPageOptions={[10, 25, 100]}
                     component="div"
                     count={servicesList.length}
                     rowsPerPage={rowsPerPage}
                     page={page}
                     onPageChange={handleChangePage}
                     onRowsPerPageChange={handleChangeRowsPerPage}
                  />
               </>
            }
            </Paper>         
      </>
   );
}

const useStyles = makeStyles({
   textCell: {
      textAlign: 'center',
      fontWeight: 'bold',      
   },
});

export default ServicesTab;
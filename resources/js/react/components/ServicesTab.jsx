import { useContext, useState } from 'react';
import ServiceContext from '../context/service/serviceContext';
import moment from 'moment';
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
import Box from '@mui/material/Box';
import LinearProgress from '@mui/material/LinearProgress';
import { formatPrice, capitalizeFirstLetter } from '../../helpers';
import '@fontsource/roboto/500.css';

const ServicesTab = () => {  
   const serviceContext = useContext(ServiceContext);
   const { loading, allServices, currentServices, searchServices } = serviceContext;         
   const classes = useStyles();
   const [page, setPage] = useState(0);
   const [rowsPerPage, setRowsPerPage] = useState(25);
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
                  disabled={loading || allServices.length === 0}                  
                  onChange= { e => searchServices(e.target.value)}
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
            {loading && !allServices.length ? (
               <Box sx={{ width: '100%' }}>
                  <LinearProgress color="primary"/>                        
               </Box>
            ) : (
               allServices.length > 0 ? ( 
               <>
                  <TableContainer>
                     <Table stickyHeader aria-label="sticky table">
                        <TableHead>
                           <TableRow>
                              <StyledTableCell>
                                 <Typography className={classes.textCell}>Nombre</Typography>
                              </StyledTableCell>
                              <StyledTableCell>
                                 <Typography className={classes.textCell}>Descripción</Typography>
                              </StyledTableCell>
                              <StyledTableCell>
                                 <Typography className={classes.textCell}>Precio</Typography>
                              </StyledTableCell>
                              <StyledTableCell>
                                 <Typography className={classes.textCell}>Categoría</Typography>
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
                           { 
                              currentServices.length > 0 ? (
                                 currentServices.slice(page * rowsPerPage, page * rowsPerPage + rowsPerPage).map(({slug,name,description,category,min_price, max_price ,all_locations, updated_at}) => (                           
                                    <StyledTableRow key={name}>                                                            
                                       <TableCell className="styled-cell" component="th" scope="row">{capitalizeFirstLetter(name)}</TableCell>
                                       <TableCell className="styled-cell" component="th" scope="row">{capitalizeFirstLetter(description)}</TableCell>                                                            
                                       <TableCell className="styled-cell" component="th" scope="row">{ min_price === max_price ? `${formatPrice(parseFloat(min_price))}`  : `${formatPrice(parseFloat(min_price))} - ${formatPrice(parseFloat(max_price))}` }</TableCell>
                                       <TableCell className="styled-cell" component="th" scope="row">{capitalizeFirstLetter(category.name)}</TableCell>
                                       <TableCell>{all_locations}</TableCell>
                                       <TableCell>{moment(updated_at).locale("es").format("D MMM YYYY, h:mm:ss a")}</TableCell>
                                    </StyledTableRow>
                                 ))
                              ) : (
                                 <TableRow>
                                    <TableCell colSpan={6}>
                                       <Typography variant="h6" align="center">No se encontraron resultados</Typography>
                                    </TableCell>
                                 </TableRow>
                              )
                           }
                        </TableBody>
                     </Table>
                  </TableContainer>
                  <TablePagination
                     rowsPerPageOptions={[10, 25, 100]}
                     component="div"
                     count={currentServices.length}
                     rowsPerPage={rowsPerPage}
                     page={page}
                     onPageChange={handleChangePage}
                     onRowsPerPageChange={handleChangeRowsPerPage}
                  />
               </>
               ) : (
                  <Box sx={{ py: 3 }}>
                     <Typography variant="h6" align="center">No se encontraron resultados</Typography>
                  </Box>
               )
            )}
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
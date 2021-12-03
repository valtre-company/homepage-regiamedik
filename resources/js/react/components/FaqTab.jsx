import { useContext } from 'react';
import parse from 'html-react-parser';
import Accordion from '@mui/material/Accordion';
import AccordionDetails from '@mui/material/AccordionDetails';
import AccordionSummary from '@mui/material/AccordionSummary';
import Paper from '@mui/material/Paper';
import FormControl from '@mui/material/FormControl';
import TextField from '@mui/material/TextField';
import SearchIcon from '@mui/icons-material/Search';
import InputAdornment from '@mui/material/InputAdornment';
import Typography from '@mui/material/Typography';
import ExpandMoreIcon from '@mui/icons-material/ExpandMore';
import FaqContext from '../context/faq/faqContext';
import LinearProgress from '@mui/material/LinearProgress';
import Box from '@mui/material/Box';
import '@fontsource/roboto/500.css';

const FaqTab = () => {
   const faqContext = useContext(FaqContext);
   const { allFaqs, currentFaqs, searchFaqs, loading } = faqContext;
   return (
      <Paper sx={{ width: '100%', overflow: 'hidden' }}>    
         <FormControl fullWidth sx={{ m: 1, }} variant="standard">
            <TextField      
               disabled={loading || allFaqs.length === 0}                  
               onChange= { e => searchFaqs(e.target.value)}
               label="Buscar preguntas frecuentes"
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
         <>
               { loading === true ? (
                  <Box sx={{ width: '100%' }}>
                     <LinearProgress color="primary"/>                        
                  </Box>
               ) : (
                  allFaqs.length > 0 ? (
                     currentFaqs.map(({id,question,answer,updated_by}) => (
                        <Accordion key={id}>
                           <AccordionSummary
                              expandIcon={<ExpandMoreIcon />}
                           >
                              <Typography><strong>{question}</strong></Typography>
                           </AccordionSummary>
                           <AccordionDetails>                  
                              {parse(answer)}                  
                              <Typography>
                                 Escrito por: <strong>{updated_by.name}</strong>
                              </Typography>
                           </AccordionDetails>
                        </Accordion>
                     ))
                  ) : (
                     <Box fullWidth sx={{ m:1 }}>
                        <Typography variant="h6" gutterBottom>
                           <b>No hay preguntas frecuentes</b>
                        </Typography>
                        <Typography variant="body2" gutterBottom>
                           Para agregar preguntas frecuentes, por favor, contacte con el administrador del sistema.
                        </Typography>
                     </Box>
                  )
               )}
         </>
      </Paper>
      
   )
}

export default FaqTab;
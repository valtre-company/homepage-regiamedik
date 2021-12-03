require('./bootstrap');
require('./template');
import React from 'react';
import ReactDOM from 'react-dom';
import { createTheme, ThemeProvider } from '@mui/material/styles';
import { esES } from '@mui/material/locale';
import AppService from './react/AppService';
import AppFaq from './react/AppFaq';

const theme = createTheme({
   palette: {
      "primary": {
            "main": "#09315B"
      },
      "secondary": {
            "main": "#C6202C"
      }
   }
}, esES);

if (document.getElementById('root-service')) {
   ReactDOM.render(
      <React.StrictMode>      
         <div className="st-height-b125 st-height-lg-b80"></div>                  
            <ThemeProvider theme={theme}>
               <div className="container">
                  <AppService />
               </div>
            </ThemeProvider>
      </React.StrictMode>
      , 
      document.getElementById('root-service')
   );
}

if (document.getElementById('root-faq')) {
   ReactDOM.render(
      <React.StrictMode>
         <div className="st-height-b125 st-height-lg-b80"></div>                  
         <ThemeProvider theme={theme}>
            <div className="container py-5">
               <AppFaq />
            </div>
         </ThemeProvider>
      </React.StrictMode>
      , 
      document.getElementById('root-faq')
   );
}
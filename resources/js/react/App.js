import { createTheme, ThemeProvider } from '@mui/material/styles';
import React from 'react';
import Service from './views/Service';
import { esES } from '@mui/material/locale';
import ServiceState from './context/service/serviceState';

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

function App() {
    return (
        <ServiceState>
            <ThemeProvider theme={theme}>
                <div className="container">
                    <Service/>    
                </div>
            </ThemeProvider>
        </ServiceState>
    );
}

export default App;

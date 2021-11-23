import { createTheme, ThemeProvider } from '@mui/material/styles';
import React from 'react';
import Service from './views/Service';
import { esES } from '@mui/material/locale';

const theme = createTheme({
    palette: {
        "primary": {
            "main": "#09315B"
        }
    }
}, esES);

function App() {
    return (
        <ThemeProvider theme={theme}>
            <div className="container">
                <Service/>    
            </div>
        </ThemeProvider>
    );
}

export default App;

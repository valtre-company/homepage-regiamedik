import { createTheme, ThemeProvider } from '@mui/material/styles';
import React from 'react';
import Schedule from './views/Schedule';
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
                <Schedule/>    
            </div>
        </ThemeProvider>
    );
}

export default App;

import React from 'react';
import ReactDOM from 'react-dom';
import Schedule from './components/Schedule';

function App() {
    return (
        <div className="container">
            <Schedule/>    
        </div>
    );
}

export default App;

if (document.getElementById('root')) {
    ReactDOM.render(<App />, document.getElementById('root'));
}

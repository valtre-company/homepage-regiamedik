import React from 'react';
import ReactDOM from 'react-dom';
import App from './react/App';

require('./bootstrap');

require('./template');

require('./react/App');


if (document.getElementById('root')) {
   ReactDOM.render(
      <React.StrictMode>
         <div className="st-height-b125 st-height-lg-b80"></div>
         <App />
      </React.StrictMode>
      , 
      document.getElementById('root')
   );
}

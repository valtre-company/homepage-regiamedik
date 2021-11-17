import React, { useState } from 'react';
import { v4 as uuid } from 'uuid';
import PropTypes from 'prop-types';
import Tabs from '@mui/material/Tabs';
import Tab from '@mui/material/Tab';
import Box from '@mui/material/Box';
import AnalysisTab from './../components/AnalysisTab';
import analysisServiceObj from '../../../../db.json';
import ServicesTab from '../components/ServicesTab';
import XRayTab from '../components/XRayTab';

const Schedule = () => { 
   const { analysis, services, xRay } = analysisServiceObj;
   const [analysisList, setAnalysisList] = useState(analysis);
   const [servicesList, setServicesList] = useState(services);   
   const [xRayList, setXRayList] = useState(xRay);
   const [tab, setTab] = React.useState(0);
   const handleTabs = (event, newValue) => setTab(newValue);   
   return ( 
      <>
         <Box sx={{ borderBottom: 1, borderColor: 'divider' }}>
            <Tabs value={tab} onChange={handleTabs} textColor="primary" indicatorColor="primary">               
               <Tab label="Laboratorio" {...a11yProps(0)} key={uuid()}/>
               <Tab label="Unidad Médica" {...a11yProps(1)} key={uuid()}/>
               <Tab label="Rayos X" {...a11yProps(2)} key={uuid()}/>            
            </Tabs>
         </Box>
         <TabPanel value={tab} index={0}>       
            <AnalysisTab 
               analysis={analysis}
               analysisList={analysisList}
               setAnalysisList={setAnalysisList}
            />                              
         </TabPanel>
         <TabPanel value={tab} index={1}>
            <ServicesTab
               services={services}
               servicesList={servicesList}
               setServicesList={setServicesList}
            />
         </TabPanel>
         <TabPanel value={tab} index={2}>
            <XRayTab
               xRay={xRay}
               xRayList={xRayList}
               setXRayList={setXRayList}
            />
         </TabPanel>
      </>
   );
}

function TabPanel(props) {
   const { children, value, index, ...other } = props;

   return (
      <div
         role="tabpanel"
         hidden={value !== index}
         id={`simple-tabpanel-${index}`}
         aria-labelledby={`simple-tab-${index}`}
         {...other}
      >
         {value === index && (
            <Box sx={{ p: 3 }}>
               <>{children}</>
            </Box>
         )}
      </div>
      );
   }

TabPanel.propTypes = {
   children: PropTypes.node,
   index: PropTypes.number.isRequired,
   value: PropTypes.number.isRequired,
};

function a11yProps(index) {
   return {
   id: `simple-tab-${index}`,
   'aria-controls': `simple-tabpanel-${index}`,
   };
}

export default Schedule;
import React, { useState, useEffect } from 'react';
import { v4 as uuid } from 'uuid';
import PropTypes from 'prop-types';
import Tabs from '@mui/material/Tabs';
import Tab from '@mui/material/Tab';
import Box from '@mui/material/Box';
import AnalysisTab from '../components/AnalysisTab';
import analysisServiceObj from '../../../../db.json';
import ServicesTab from '../components/ServicesTab';
import XRayTab from '../components/XRayTab';

const Schedule = () => { 
   // const { analysis, services, xRay } = analysisServiceObj;
   const analysis = [];
   const services = [];
   const xRay = [];
   const [serviceTypesList, setServiceTypesList] = useState([]);
   const [analysisList, setAnalysisList] = useState([]);
   const [servicesList, setServicesList] = useState([]);   
   const [xRayList, setXRayList] = useState([]);
   const [tab, setTab] = useState(0);

   useEffect(() => {
      const getServicesTypes = async () => {
         const response = await axios.get(`/api/services/types`);
         setServiceTypesList(response.data);
      };
      if (serviceTypesList.length === 0) {
         getServicesTypes();
      }      
   }, []);

   const handleTabs = (event, newValue) => setTab(newValue);   
   return ( 
      <>
         <Box sx={{ borderBottom: 1, borderColor: 'divider' }}>
            <Tabs value={tab} onChange={handleTabs} textColor="primary" indicatorColor="primary">  
               { serviceTypesList.map(({name,slug}) => (
                  <Tab key={slug} label={name} {...a11yProps(slug)} />
               ))}                                       
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
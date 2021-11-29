import React, { useState, useEffect, useContext } from 'react';
import ServiceContext from '../context/service/serviceContext';
import { v4 as uuid } from 'uuid';
import PropTypes from 'prop-types';
import Tabs from '@mui/material/Tabs';
import Tab from '@mui/material/Tab';
import Box from '@mui/material/Box';
import ServicesTab from './../components/ServicesTab';

const Service = () => {    
   const serviceContext = useContext(ServiceContext);   
   const { loading, serviceTypesList, getAllServiceTypes, currentTabServiceType, setCurrentTabServiceType  } = serviceContext;         
   const [tab, setTab] = useState(0);   
   const [serviceTypesBoolean, setServicesTypesBoolean ] = useState(true);
   useEffect(() => {
      if (serviceTypesBoolean) {
         getAllServiceTypes();
         setServicesTypesBoolean(false);
      }                  
      setCurrentTabServiceType(currentTabServiceType);
   }, [currentTabServiceType]);

   const handleTabs = (event, newValue) => {  
      if(!loading){
         setCurrentTabServiceType(event.target.dataset.slug);      
         setTab(newValue);   
      }    
   };

   return (       
      <>
         <Box sx={{ borderBottom: 1, borderColor: 'divider' }}>
            <Tabs value={tab} onChange={handleTabs} textColor="primary" indicatorColor="primary">  
               { serviceTypesList.map(({name,slug}) => (
                  <Tab key={slug} label={name} data-slug={slug} {...a11yProps(slug)} />
               ))}                                       
            </Tabs>                         
            <TabPanel value={tab} index={tab}>                  
               <ServicesTab/>                  
            </TabPanel>            
         </Box>
         {/* <TabPanel value={tab} index={1}>
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
         </TabPanel> */}
      </>
   );
}

function TabPanel(props) {
   const { children, value, index, ...other } = props;

   return (
      <div
         role="tabpanel"
         hidden={value !== index}
         // id={`simple-tabpanel-${currentTabServiceType}`}
         // aria-labelledby={`simple-tab-${currentTabServiceType}`}
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

export default Service;
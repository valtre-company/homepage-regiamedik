import { useState, useContext, useEffect } from 'react';
import Tabs from '@mui/material/Tabs';
import Tab from '@mui/material/Tab';
import PropTypes from 'prop-types';
import Box from '@mui/material/Box';
import HelpIcon from '@mui/icons-material/Help';
import Typography from '@mui/material/Typography';
import ServiceContext from './../context/service/serviceContext';
import FaqContext from './../context/faq/faqContext';
import FaqTab from './../components/FaqTab';

const Faq = () => {
   const [expanded, setExpanded] = useState(false);
   const [currentTabServiceType, setCurrentTabServiceType] = useState('laboratorio');
   const handleChange = (panel) => (event, isExpanded) => setExpanded(isExpanded ? panel : false);   
   const serviceContext = useContext(ServiceContext);   
   const { serviceTypesList, getAllServiceTypes } = serviceContext;
   const faqContext = useContext(FaqContext);
   const { getFaqs, loading } = faqContext;          
   const [tab, setTab] = useState(0);   

   useEffect(() => {
      getAllServiceTypes();
      // eslint-disable-next-line
   }, []);

   useEffect(() => {                      
      getFaqs(currentTabServiceType);
   }, [currentTabServiceType]);

   const handleTabs = (event, newValue) => {        
      if(!loading) {
         setCurrentTabServiceType(event.target.dataset.slug);  
         setTab(newValue);                  
      }
   };

   return (
      <>
         <Typography component="div" display="flex" mb={3} style={{ alignItems: 'center', justifyContent: 'center' }}>            
            <HelpIcon
               color="primary"           
               fontSize="large"
            />
            <Typography 
               variant="1"                
               gutterBottom 
               style={{ fontSize: '1.6rem', marginLeft: '10px' }}
               mb={0}
            >Preguntas frecuentes</Typography>
         </Typography>
         <Box sx={{ borderBottom: 1, borderColor: 'divider' }}>
            <Tabs value={tab} onChange={handleTabs} textColor="primary" indicatorColor="primary">  
               { serviceTypesList.map(({name,slug}) => (
                  <Tab key={slug} label={name} data-slug={slug} {...a11yProps(slug)} />
               ))}                                       
            </Tabs>                         
            <TabPanel value={tab} index={tab}>                  
               <FaqTab/>                  
            </TabPanel>            
         </Box>          
      </>
   )

   return (
      <div>
         <Accordion expanded={expanded === 'panel1'} onChange={handleChange('panel1')}>
            <AccordionSummary
               expandIcon={<ExpandMoreIcon />}
               aria-controls="panel1bh-content"
               id="panel1bh-header"
            >
               <Typography sx={{ width: '33%', flexShrink: 0 }}>
               General settings
               </Typography>
               <Typography sx={{ color: 'text.secondary' }}>I am an accordion</Typography>
            </AccordionSummary>
            <AccordionDetails>
               <Typography>
               Nulla facilisi. Phasellus sollicitudin nulla et quam mattis feugiat.
               Aliquam eget maximus est, id dignissim quam.
               </Typography>
            </AccordionDetails>
         </Accordion>
         <Accordion expanded={expanded === 'panel2'} onChange={handleChange('panel2')}>
            <AccordionSummary
               expandIcon={<ExpandMoreIcon />}
               aria-controls="panel2bh-content"
               id="panel2bh-header"
            >
               <Typography sx={{ width: '33%', flexShrink: 0 }}>Users</Typography>
               <Typography sx={{ color: 'text.secondary' }}>
               You are currently not an owner
               </Typography>
            </AccordionSummary>
            <AccordionDetails>
               <Typography>
               Donec placerat, lectus sed mattis semper, neque lectus feugiat lectus,
               varius pulvinar diam eros in elit. Pellentesque convallis laoreet
               laoreet.
               </Typography>
            </AccordionDetails>
         </Accordion>
         <Accordion expanded={expanded === 'panel3'} onChange={handleChange('panel3')}>
            <AccordionSummary
               expandIcon={<ExpandMoreIcon />}
               aria-controls="panel3bh-content"
               id="panel3bh-header"
            >
               <Typography sx={{ width: '33%', flexShrink: 0 }}>
               Advanced settings
               </Typography>
               <Typography sx={{ color: 'text.secondary' }}>
               Filtering has been entirely disabled for whole web server
               </Typography>
            </AccordionSummary>
            <AccordionDetails>
               <Typography>
               Nunc vitae orci ultricies, auctor nunc in, volutpat nisl. Integer sit
               amet egestas eros, vitae egestas augue. Duis vel est augue.
               </Typography>
            </AccordionDetails>
         </Accordion>
         <Accordion expanded={expanded === 'panel4'} onChange={handleChange('panel4')}>
            <AccordionSummary
               expandIcon={<ExpandMoreIcon />}
               aria-controls="panel4bh-content"
               id="panel4bh-header"
            >
               <Typography sx={{ width: '33%', flexShrink: 0 }}>Personal data</Typography>
            </AccordionSummary>
            <AccordionDetails>
               <Typography>
               Nunc vitae orci ultricies, auctor nunc in, volutpat nisl. Integer sit
               amet egestas eros, vitae egestas augue. Duis vel est augue.
               </Typography>
            </AccordionDetails>
         </Accordion>
      </div>
   );
}

function TabPanel(props) {
   const { children, value, index, ...other } = props;

   return (
      <div
         role="tabpanel"
         hidden={value !== index}
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

export default Faq;
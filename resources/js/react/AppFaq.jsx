import Faq from './views/Faq';
import ServiceState from './context/service/serviceState';
import FaqState from './context/faq/faqState';
function AppFaq ()  {
   return (
      <>  
         <ServiceState>
            <FaqState>
               <Faq/>                      
            </FaqState>
         </ServiceState> 
      </>        
   );
}

export default AppFaq;

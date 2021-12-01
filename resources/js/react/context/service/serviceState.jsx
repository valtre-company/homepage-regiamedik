import { useReducer } from 'react';
import ServiceReducer from './serviceReducer';
import ServiceContext  from './serviceContext';
import { filterArrayByValue, removeAccents } from '../../../helpers';
import { 
   GET_CURRENT_SERVICES, 
   GET_ALL_SERVICE_TYPES,
   SET_CURRENT_SERVICE_TYPE,
   SET_LOADING,   
   SEARCH_SERVICES,
   GET_CURRENT_SERVICES_ERROR
} from '../../types';

const ServiceState = props => {
   const initialState = {
      currentTabServiceType: 'laboratorio',
      serviceTypesList: [],      
      allServices: [],
      currentServices: [],
      loading: false
   };
   const [state,dispatch] = useReducer(ServiceReducer, initialState);
   
   const getAllServiceTypes = async () => {
      try {
         const response = await axios.get('/api/services/types');         
         dispatch({
            type: GET_ALL_SERVICE_TYPES,
            payload: response.data
         });
      } catch (err) {
         dispatch({
            type: GET_ALL_SERVICE_TYPES,
            payload: []
         });         
      }
   };

   const setCurrentTabServiceType = (serviceType) => {      
      dispatch({
         type: SET_CURRENT_SERVICE_TYPE,
         payload: serviceType
      });
      getCurrentServices(serviceType);
   };
      
   const getCurrentServices = async (serviceType) => {     
      setLoading();            
      try {         
         const response = await axios.get(`/api/services/service/${serviceType}`);
         setTimeout(() => {
            dispatch({
               type: GET_CURRENT_SERVICES,
               payload: response.data
            });
         }, 1000);
      } catch (err) {
         dispatch({
            type: GET_CURRENT_SERVICES_ERROR
         });               
      }      
   }

   const searchServices = (search) => {            
      const filteredServices = filterArrayByValue(state.allServices,search);      
      dispatch({
         type: SEARCH_SERVICES,
         payload: filteredServices
      });
   }
   // Set Loading
   const setLoading = () => dispatch({ type: SET_LOADING });   

   return ( 
      <ServiceContext.Provider value={{
         loading: state.loading,
         currentTabServiceType: state.currentTabServiceType,
         serviceTypesList: state.serviceTypesList,
         allServices: state.allServices,
         currentServices: state.currentServices,
         setCurrentTabServiceType,
         getAllServiceTypes,
         getCurrentServices,         
         searchServices,
      }}>
         {props.children}
      </ServiceContext.Provider>
   );
}

export default ServiceState;
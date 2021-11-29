import React, { useReducer } from 'react';
import ServiceReducer from './serviceReducer';
import ServiceContext  from './serviceContext';
import { filterArrayByValue, removeAccents } from '../../../helpers';
import { 
   GET_CURRENT_SERVICES, 
   GET_ALL_SERVICE_TYPES,
   SET_CURRENT_SERVICE_TYPE,
   SET_LOADING,
   SET_PROGRESS,
   SEARCH_SERVICES
} from '../../types';

const ServiceState = props => {
   const initialState = {
      currentTabServiceType: 'laboratorio',
      serviceTypesList: [],      
      allServices: [],
      currentServices: [],
      loading: false,
      progress: 0
   };
   const [state,dispatch] = useReducer(ServiceReducer, initialState);
   
   const setCurrentTabServiceType = (serviceType) => {
      dispatch({
         type: SET_CURRENT_SERVICE_TYPE,
         payload: serviceType
      });
      getCurrentServices(serviceType);
   };

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
   
   const getCurrentServices = async () => {     
      setLoading();           
      try {
         const response = await axios.get(`/api/services/service/${state.currentTabServiceType}`);
         setTimeout(() => {
            dispatch({
               type: GET_CURRENT_SERVICES,
               payload: response.data
            });
         }, 1000);
      } catch (err) {
         dispatch({
            type: GET_CURRENT_SERVICES,
            payload: []
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

   const setProgress = (progress) => {      
      dispatch({
         type: SET_PROGRESS,
         payload: progress
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
         progress: state.progress,
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
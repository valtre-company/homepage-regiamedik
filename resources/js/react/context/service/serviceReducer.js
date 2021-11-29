import {
   SET_LOADING, 
   SET_PROGRESS,
   ADD_SERVICE, 
   REMOVE_SERVICE, 
   GET_CURRENT_SERVICES,
   GET_ALL_SERVICE_TYPES,
   SEARCH_SERVICES,
   SET_CURRENT_SERVICE_TYPE,
} from '../../types';

export default (state = [], action) => {
   switch (action.type) {
      case GET_ALL_SERVICE_TYPES:
         return {
            ...state, 
            serviceTypesList: action.payload
         }
      case GET_CURRENT_SERVICES: 
         return {
            ...state,
            allServices: action.payload,
            currentServices: action.payload,
            loading: false
         }            
      case SET_CURRENT_SERVICE_TYPE:
         return {
            ...state,
            allServices: [],
            currentServices: [],
            currentTabServiceType: action.payload,            
         }         
      case SET_LOADING: 
         return {
            ...state,
            loading: true
         }
      case SET_PROGRESS : 
         return {
            ...state,
            progress: action.payload
         }
      case SEARCH_SERVICES: 
         return {
            ...state,
            currentServices: action.payload
         }
      default:
         return state;
   }
}
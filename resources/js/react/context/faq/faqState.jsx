import { useReducer } from 'react';
import FaqReducer from './faqReducer';
import FaqContext from './faqContext';
import {
   GET_FAQS_SUCCESS,
   GET_FAQS_FAILURE,
} from '../../types';

const FaqState = props => {
   const initialState = {
      allFaqs: [],
      currentFaqs: [],
      currentTabServiceType: 'laboratorio',
   };

   const [state, dispatch] = useReducer(FaqReducer, initialState);

   const getFaqs = async (serviceType) => {
      try {         
         const response = await axios.get(`/api/faqs/${serviceType}`);
         setTimeout(() => {
            dispatch({
               type: GET_FAQS_SUCCESS,
               payload: response.data
            });
         }, 1000);
      } catch (error)   {
         console.error(error.response);
         dispatch({
            type: GET_FAQS_FAILURE,
         });
      }
   };

   const searchFaqs = (value) => {
      dispatch({
         type: SEARCH_FAQS,
         payload: value
      });
   };
   
   return (
      <FaqContext.Provider
         value={{
            allFaqs: state.allFaqs,
            currentFaqs: state.currentFaqs,
            getFaqs,
            searchFaqs
         }}
      >
         {props.children}
      </FaqContext.Provider>
   );
}

export default FaqState;
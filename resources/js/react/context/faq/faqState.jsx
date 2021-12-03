import { useReducer } from 'react';
import FaqReducer from './faqReducer';
import FaqContext from './faqContext';
import {
   GET_FAQS_SUCCESS,
   GET_FAQS_FAILURE,
   SET_LOADING,
   SEARCH_FAQS
} from '../../types';

const FaqState = props => {
   const initialState = {
      loading: false,
      allFaqs: [],
      currentFaqs: [],
      currentTabServiceType: 'laboratorio',
   };

   const [state, dispatch] = useReducer(FaqReducer, initialState);

   const getFaqs = async (serviceType) => {
      setLoading();
      try {         
         const response = await axios.get(`/api/faqs/${serviceType}`);
         setTimeout(() => {
            dispatch({
               type: GET_FAQS_SUCCESS,
               payload: response.data
            });
         }, 1000);
      } catch (error)   {         
         dispatch({
            type: GET_FAQS_FAILURE,
         });
      }
   };

   const setLoading = () => {
      dispatch({
         type: SET_LOADING
      });
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
            loading: state.loading,
            getFaqs,
            searchFaqs
         }}
      >
         {props.children}
      </FaqContext.Provider>
   );
}

export default FaqState;
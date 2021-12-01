import {
   GET_FAQS_SUCCESS,
   GET_FAQS_FAILURE,
   SEARCH_FAQS,
   SET_LOADING
} from '../../types';
import { removeAccents } from '../../../helpers';

export default (state = [], action = {}) => {
   switch (action.type) {
      case GET_FAQS_SUCCESS:
         return {
            ...state,
            allFaqs: action.payload,
            currentFaqs: action.payload,
            loading: false
         }
      case SEARCH_FAQS:
         return {
            ...state,
            loading: false,
            currentFaqs: state.allFaqs.filter(({question,updated_by}) => {               
               return removeAccents(question).toLowerCase().includes(removeAccents(action.payload).toLowerCase()) || removeAccents(updated_by.name).toLowerCase().includes(removeAccents(action.payload).toLowerCase());               
            })
      }
      case SET_LOADING: 
         return { 
            ...state,
            loading: true,
            currentFaqs: []
         }
      case GET_FAQS_FAILURE:
         return { 
            ...state,
            loading: false
         }
      default:
         return state;
   }
}


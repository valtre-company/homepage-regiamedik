import {
   GET_FAQS_SUCCESS,
   GET_FAQS_FAILURE,
   SEARCH_FAQS
} from '../../types';

export default (state = [], action = {}) => {
   switch (action.type) {
      case GET_FAQS_SUCCESS:
         return {
            ...state,
            allFaqs: action.payload
         }
      case SEARCH_FAQS:
         return {
            ...state,
            currentFaqs: state.allFaqs.filter(faq => {
               return faq.question.toLowerCase().includes(action.payload.toLowerCase())
            })
      }
      case GET_FAQS_FAILURE:
         return { ...state }
      default:
         return state;
   }
}


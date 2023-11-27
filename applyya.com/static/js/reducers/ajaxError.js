import { AJAX_ERROR, CLEAR_AJAX_ERROR } from "../constants/actionTypes";

export const initialState = {
  ajaxError: null
};

export const ajaxError = (state = initialState, action) => {
  switch (action.type) {
    case AJAX_ERROR:
      return { ...state, ajaxError: action.payload };

    case CLEAR_AJAX_ERROR:
      return { ...state, ajaxError: null };

    default:
      return state;
  }
};

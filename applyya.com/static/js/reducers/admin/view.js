import {
  ADMIN_VIEW_LOADED,
  ADMIN_VIEW_LOADING,
} from '../../constants/actionTypes';

const initialState = {
  resume: {},
  isLoading: false,
};

export const view = (state = initialState, action) => {
  switch (action.type) {
    case ADMIN_VIEW_LOADING:
      return { ...state, isLoading: true };
    case ADMIN_VIEW_LOADED:
      return { ...state, isLoading: false, resume: action.resume };
    default:
      return state;
  }
};

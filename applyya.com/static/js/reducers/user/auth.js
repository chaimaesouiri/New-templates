import {
  USER_UNAUTHORIZED, USER_ME_LOADING, USER_ME_LOADED,
} from '../../constants/actionTypes';
import { isExistToken } from '../../utils/token';

const initialState = {
  isUserLoaded: false,
  isAuth: isExistToken(),
  user: {},
};

export default (state = initialState, action) => {
  switch (action.type) {
    case USER_UNAUTHORIZED:
      return {
        ...state, isUserLoaded: false, isAuth: false, user: {},
      };
    case USER_ME_LOADING:
      return {
        ...state, isUserLoaded: false, user: {},
      };
    case USER_ME_LOADED:
      return {
        ...state, isUserLoaded: true, user: action.payload,
      };
    default:
      return state;
  }
};

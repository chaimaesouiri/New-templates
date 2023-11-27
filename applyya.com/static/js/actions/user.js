import axios from '../utils/request';
import { USER_ME_LOADED, USER_ME_LOADING } from '../constants/actionTypes';

const USER_ME = `${process.env.REACT_APP_API_URL}/_/users/me`;

export const loadUser = () => (dispatch) => {
  dispatch({ type: USER_ME_LOADING });

  return axios
    .get(USER_ME)
    .then(({ data }) => {
      dispatch({ type: USER_ME_LOADED, payload: data });
    });
};

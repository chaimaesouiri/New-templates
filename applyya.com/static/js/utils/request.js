import axios from 'axios';
import store from '../store';
import { getBearerToken, isExistToken, removeToken } from './token';
import { AJAX_ERROR } from '../constants/actionTypes';

axios.defaults.headers.common.Authorization = getBearerToken();
axios.defaults.headers.post['Content-Type'] = 'application/json';

axios.interceptors.response.use(
  (response) => response,
  (error) => {
    if (error.response && error.response.status === 401 && isExistToken()) {
      removeToken();
      // history.push('/login');
    } else {
      store.dispatch({ type: AJAX_ERROR, payload: 'API error' });
    }

    return Promise.reject(error);
  },
);

export default axios;

import Cookies from 'js-cookie';

export const getToken = () => Cookies.get('token');
export const removeToken = () => Cookies.remove('token');
export const getBearerToken = () => `Bearer ${getToken()}`;
export const isExistToken = () => !!Cookies.get('token');

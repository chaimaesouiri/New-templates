import {
  GET_RESUMES_LIST,
  GET_RESUMES_LIST_FAIL,
  GET_RESUMES_LIST_SUCCESS,
  SET_PAGINATION_VALUES,
} from '../../constants/actionTypes';

export const LOAD_ITEMS_LIMIT = 20;

const initialState = {
  items: [],
  total: 0,
  loaded: false,
  pending: false,
  error: null,
  pagination: { offset: 0, limit: LOAD_ITEMS_LIMIT },
};

export const list = (state = initialState, { type, payload }) => {
  switch (type) {
    case GET_RESUMES_LIST:
      return { ...state, pending: true, loaded: false };

    case GET_RESUMES_LIST_SUCCESS:
      return {
        ...state,
        items: payload.items,
        total: payload.count,
        pending: false,
        loaded: true,
      };

    case GET_RESUMES_LIST_FAIL:
      return { ...initialState };

    case SET_PAGINATION_VALUES:
      return { ...state, pagination: { ...state.pagination, offset: payload } };

    default:
      return state;
  }
};

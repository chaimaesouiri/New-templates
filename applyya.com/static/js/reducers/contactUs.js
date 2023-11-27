import {
  CONTACT_US_CHANGE_DATA,
  CONTACT_US_ERROR,
  CONTACT_US_FLUSH_ERRORS,
  CONTACT_US_RECAPTCHA_LOADED,
  CONTACT_US_SENDING,
  CONTACT_US_SUCCESS,
} from '../constants/actionTypes';

const initialState = {
  isSendSuccess: false,
  isLoading: true,
  data: {
    email: '',
    subject: '',
    message: '',
    reCaptchaToken: '',
  },
  errors: {
    email: '',
    subject: '',
    message: '',
    reCaptchaToken: '',
  },
};

export const contactUs = (state = initialState, action) => {
  switch (action.type) {
    case CONTACT_US_SENDING:
      return { ...state, isLoading: true };

    case CONTACT_US_CHANGE_DATA:
      return {
        ...state,
        data: { ...state.data, [action.key]: action.value },
      };

    case CONTACT_US_ERROR:
      return {
        ...state,
        isLoading: false,
        errors: { ...state.errors, ...action.payload },
      };

    case CONTACT_US_FLUSH_ERRORS:
      return {
        ...state,
        isLoading: false,
        errors: {
          email: '',
          subject: '',
          message: '',
          reCaptchaToken: '',
        },
      };

    case CONTACT_US_SUCCESS:
      return {
        ...initialState,
        isSendSuccess: true,
      };

    case CONTACT_US_RECAPTCHA_LOADED:
      return {
        ...state,
        isLoading: false,
        data: { ...state.data, reCaptchaToken: action.reCaptchaToken },
      };

    default:
      return state;
  }
};

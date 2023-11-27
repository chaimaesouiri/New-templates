import { TOOLBAR_DOWNLOAD_FINISHED, TOOLBAR_DOWNLOAD_LOADING } from "../constants/actionTypes";

export const initialState = {
  isDownloadInProgress: false
};

export const toolbar = (state = initialState, action) => {
  switch (action.type) {
    case TOOLBAR_DOWNLOAD_LOADING:
      return { ...state, isDownloadInProgress: true };

    case TOOLBAR_DOWNLOAD_FINISHED:
      return { ...state, isDownloadInProgress: false };

    default:
      return state;
  }
};

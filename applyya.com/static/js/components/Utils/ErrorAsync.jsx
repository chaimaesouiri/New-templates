import React from 'react';
import { useDispatch } from 'react-redux';
import { CLEAR_AJAX_ERROR } from '../../constants/actionTypes';
import Modal from './Modal';

const ErrorAsync = ({ error }) => {
  const dispatch = useDispatch();

  const onCloseErrorModal = () => {
    dispatch({ type: CLEAR_AJAX_ERROR });
  };

  return (
    <Modal>
      <div className="modal-error">
        <div className="modal-error__body">
          <p>{error}</p>
          <button className="btn btn-orange" onClick={onCloseErrorModal}>
            Close
          </button>
        </div>
      </div>
    </Modal>
  );
};

export default ErrorAsync;

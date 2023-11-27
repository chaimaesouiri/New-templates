import React, { Component } from 'react';
import { withRouter } from 'react-router';
import Modal from './Modal';

class ErrorBoundary extends Component {
  state = { hasError: false };

  static getDerivedStateFromError() {
    return { hasError: true };
  }

  componentDidCatch(error, errorInfo) {
    console.log('componentDidCatch---', error, errorInfo);
  }

  render() {
    const { hasError } = this.state;
    const { children } = this.props;

    if (!hasError) return children;

    return (
      <Modal>
        <div className="modal-error">
          <div className="modal-error__body">
            <p>Something went wrong <br />
              Please, contact dev team
            </p>
          </div>
        </div>
      </Modal>
    );
  }
}

export default withRouter(ErrorBoundary);

import { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Modal extends Component {
    modalRoot = document.getElementById('modal-root');

    el = document.createElement('div');

    componentDidMount() {
      this.modalRoot.appendChild(this.el);
    }

    componentWillUnmount() {
      this.modalRoot.removeChild(this.el);
    }

    render() {
      return ReactDOM.createPortal(
        this.props.children,
        this.el,
      );
    }
}

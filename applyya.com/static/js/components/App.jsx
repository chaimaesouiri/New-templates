import React, { useEffect } from 'react';
import classNames from 'classnames';
import { useDispatch, useSelector } from 'react-redux';

import ErrorBoundary from './Utils/ErrorBoundary';
import { loadUser } from '../actions/user';
import Header from './Layout/Header';
import Footer from './Layout/Footer';
import ErrorAsync from './Utils/ErrorAsync';

const backgroundWhite = [
  '/',
  '/contact-us',
  '/admin',
  '/software-engineer-resume',
  '/student-resume',
  '/resume-builder/',
];
const backgroundLinerGradientBg = ['/editor', '/media-kit'];

const App = ({ children, location: { pathname } }) => {
  const { ajaxError } = useSelector((state) => state.ajaxError);
  const dispatch = useDispatch();
  const { isAuth } = useSelector(({ user }) => user.auth);

  useEffect(() => {
    if (isAuth) {
      dispatch(loadUser());
    }
  }, [isAuth, dispatch]);

  if (ajaxError) return (<ErrorAsync error={ajaxError} />);

  return (
    <div
      className={classNames('root', {
        'bg-white': backgroundWhite.includes(pathname),
        'liner-gradient': backgroundLinerGradientBg.includes(pathname),
      })}
    >
      <Header />
      <ErrorBoundary>{children}</ErrorBoundary>
      <Footer />
    </div>
  );
};

export default App;

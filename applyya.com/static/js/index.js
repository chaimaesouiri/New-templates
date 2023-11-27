import React from 'react';
import ReactDOM from 'react-dom';
import { Provider } from 'react-redux';
import { Router } from 'react-router-dom';
import { createBrowserHistory } from 'history';
import * as GA from 'react-ga';
import AppRoute from './components/Router/AppRoute';
import store from './store';
import { getCurrentLocaleInfo } from './utils/locale';

import './assets/css/icomoon.css';
import './assets/css/landing/bootstrap-grid.min.css';
import './assets/scss/main.scss';

const localeInfo = getCurrentLocaleInfo();

const history = createBrowserHistory({
  basename: localeInfo.url,
});

GA.initialize(process.env.REACT_APP_GA_CODE);

history.listen((location) => GA.pageview(location.pathname));
history.listen(() => window.scrollTo(0, 0));

ReactDOM.render(
  <Provider store={store}>
    <Router history={history} basename={localeInfo.url}>
      <AppRoute />
    </Router>
  </Provider>,
  document.getElementById('app'),
);

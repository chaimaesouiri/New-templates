import { applyMiddleware, compose, createStore } from 'redux';
import thunk from 'redux-thunk';
import reducer from './reducers';

const composeEnhancers = process.env.NODE_ENV === 'development'
  ? ((typeof window !== 'undefined' && window.__REDUX_DEVTOOLS_EXTENSION_COMPOSE__) || compose)
  : compose;

export default createStore(reducer, composeEnhancers(applyMiddleware(thunk)));

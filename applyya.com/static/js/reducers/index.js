import { combineReducers } from 'redux';
import { editor } from './editor';
import { toolbar } from './toolbar';
import userAuth from './user/auth';
import { list } from './admin/list';
import { view } from './admin/view';
import { contactUs } from './contactUs';
import { ajaxError } from './ajaxError';

const app = combineReducers({
  editor,
  toolbar,
  admin: combineReducers({ list, view }),
  user: combineReducers({ auth: userAuth }),
  contactUs,
  ajaxError,
});

export default app;

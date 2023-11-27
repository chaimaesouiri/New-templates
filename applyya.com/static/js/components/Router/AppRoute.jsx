import React, { lazy, Suspense } from 'react';
import { Redirect, Route, Switch } from 'react-router-dom';
import { useSelector } from 'react-redux';
import { ROLE_ADMIN } from '../../constants/roles';

import Loading from '../Utils/Loading';
import PrivateRoute from './PrivateRoute';
import NestedRoutes from './NestedRoutes';
import App from '../App';
import AdminBase from '../../pages/Admin/Layout';

const Editor = lazy(() => import('../../pages/Editor/Editor'));
const Landing = lazy(() => import('../../pages/Landing'));
const Terms = lazy(() => import('../../pages/Terms'));
const Privacy = lazy(() => import('../../pages/Privacy'));
const MediaKit = lazy(() => import('../../pages/MediaKit'));
const WhatNext = lazy(() => import('../../pages/WhatNext'));
const JobsSoftwareEngineer = lazy(() => import('../../pages/Jobs/SoftwareEngineer'));
const JobsStudent = lazy(() => import('../../pages/Jobs/Student'));
const ContactUs = lazy(() => import('../../pages/ContactUs'));
const NotFound = lazy(() => import('../../pages/NotFound'));
const ResumeBuilder = lazy(() => import('../../pages/ResumeBuilder'));

// private routes
const AdminResumes = lazy(() => import('../../pages/Admin/Resumes'));
const AdminUsers = lazy(() => import('../../pages/Admin/Users'));
const Dashboard = lazy(() => import('../../pages/Dashboard/Dashboard'));
const Login = lazy(() => import('../../pages/Login'));

const SuspenseFallback = (
  <div className="lazy__preloader">
    <Loading width="90px" height="30px" />
  </div>
);

const AppRoute = () => {
  const { isAuth, isUserLoaded, user } = useSelector(({ user }) => user.auth);
  const { roles = [] } = user;
  const hasAdminRole = roles.includes(ROLE_ADMIN);

  return (
    <Switch>
      <NestedRoutes path="/admin/:page?" component={AdminBase}>
        <Suspense fallback={SuspenseFallback}>
          <Switch>
            {isUserLoaded && (
              <>
                <PrivateRoute
                  exact
                  page="resumes"
                  path="/admin/resumes"
                  isAuth={hasAdminRole}
                  redirectTo="/login?reason=is_not_admin"
                  component={AdminResumes}
                />
                <PrivateRoute
                  exact
                  page="users"
                  path="/admin/users"
                  isAuth={hasAdminRole}
                  redirectTo="/login?reason=is_not_admin"
                  component={AdminUsers}
                />
              </>
            )}
          </Switch>
        </Suspense>
      </NestedRoutes>

      <NestedRoutes path="/" component={App}>
        <Suspense fallback={SuspenseFallback}>
          <Switch>
            <Route
              exact
              strict
              path={['/:url*']}
              render={(props) => (
                <Redirect to={`${props.location.pathname}/${props.location.search}`} />
              )}
            />
            <Route path="/" exact component={Landing} />
            <Route path="/editor/" exact component={Editor} />
            <Route path="/editor/:uuid" component={Editor} />
            <Route path="/what-next/" exact component={WhatNext} />
            <Route path="/contact-us/" component={ContactUs} />
            <Route path="/terms/" component={Terms} />
            <Route path="/privacy/" component={Privacy} />
            <Route path="/media-kit/" component={MediaKit} />
            <Route path="/login/" component={Login} />
            <Route path="/software-engineer-resume/" component={JobsSoftwareEngineer} />
            <Route path="/student-resume/" component={JobsStudent} />
            <Route path="/resume-builder/" exact component={ResumeBuilder} />
            <PrivateRoute path="/dashboard" component={Dashboard} isAuth={isAuth} redirectTo="/login" exact />
            <Route path="" component={NotFound} status={404} />
          </Switch>
        </Suspense>
      </NestedRoutes>
    </Switch>
  );
};

export default AppRoute;

import React from 'react';
import { Route } from 'react-router-dom';

const NestedRoutes = ({
  path, exact, component: Component, children, ...rest
}) => (
  <Route
    path={path}
    exact={exact}
    {...rest}
    render={(props) => <Component {...props}>{children}</Component>}
  />
);

export default NestedRoutes;

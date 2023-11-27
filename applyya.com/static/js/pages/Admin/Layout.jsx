import React, { useEffect, useState } from 'react';
import { useDispatch, useSelector } from 'react-redux';
import { Layout as AntLayout, Menu } from 'antd';
import { FileOutlined, UserOutlined } from '@ant-design/icons';

import { Link } from 'react-router-dom';
import ErrorBoundary from '../../components/Utils/ErrorBoundary';
import { loadUser } from '../../actions/user';
import LogoImage from '../../assets/images/favicon.png';
import { ROLE_ADMIN } from '../../constants/roles';
import Loading from '../../components/Utils/Loading';
import useDeviceDetect from '../../hooks/useDeviceDetect';

import 'antd/dist/antd.css';

const { Content, Sider } = AntLayout;

const Layout = ({ children, match: { params: { page = 'resumes' } } }) => {
  const dispatch = useDispatch();
  const { isMobile } = useDeviceDetect();
  const [isCollapsed, setCollapsed] = useState(true);
  const { isAuth, user: { roles = [] } } = useSelector(({ user }) => user.auth);

  useEffect(() => {
    if (isAuth) {
      dispatch(loadUser());
    }
  }, [isAuth, dispatch]);

  if (!roles.includes(ROLE_ADMIN)) {
    return (
      <div className="lazy__preloader">
        <Loading width="90px" height="30px" />
      </div>
    );
  }

  return (
    <AntLayout className="admin-page" style={{ minHeight: '100vh' }}>
      <Sider className={isMobile && 'mobile'} collapsible collapsed={isCollapsed} onCollapse={() => setCollapsed((prevState) => !prevState)}>
        <div className="logo">
          <img src={LogoImage} alt="" />
        </div>
        <Menu theme="white" defaultSelectedKeys={[page]} mode="inline">
          <Menu.Item key="resumes" icon={<FileOutlined />}>
            <Link to="/admin/resumes">
              CV
            </Link>
          </Menu.Item>
          <Menu.Item key="users" icon={<UserOutlined />}>
            <Link to="/admin/users">
              Users
            </Link>
          </Menu.Item>
        </Menu>
      </Sider>
      <AntLayout className="site-layout">
        <Content style={{ margin: '0 16px' }}>
          <ErrorBoundary>{children}</ErrorBoundary>
        </Content>
      </AntLayout>
    </AntLayout>
  );
};

export default Layout;

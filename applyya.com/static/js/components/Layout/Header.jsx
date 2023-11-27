import React, { useEffect, useState } from 'react';
import { Link, NavLink, withRouter } from 'react-router-dom';
import { Collapse } from 'react-collapse';
import { i18n } from '../../utils/i18n';
import I18nMenu from './I18nMenu';
import ResumeExamplesMenu from './ResumeExamplesMenu';
import LogoImage from '../../assets/images/logo.svg';

const MAX_MOBILE_WIDTH = 768;

const Header = ({ location: { pathname }, history }) => {
  const [isMobile, setIsMobile] = useState(false);
  const [displayMenu, setDisplayMenu] = useState(true);
  const [headerClass, setHeaderClass] = useState('header');
  const { t } = i18n();
  const adaptiveClass = isMobile ? '' : 'd-flex align-items-center justify-content-between';
  const menuButtonClass = displayMenu ? 'menu__btn menu__btn_active' : 'menu__btn';

  const handleResizeWindow = () => {
    const isMobileDisplay = window.innerWidth < MAX_MOBILE_WIDTH;

    setDisplayMenu(!isMobileDisplay);
    setIsMobile(isMobileDisplay);
  };

  const handleScroll = () => {
    const dynamicHeaderClass = window.scrollY >= 1 ? 'header animated fixed' : 'header animated';
    setHeaderClass(dynamicHeaderClass);
  };

  useEffect(() => {
    handleResizeWindow();
    window.addEventListener('resize', handleResizeWindow, false);

    if (pathname === '/') window.addEventListener('scroll', handleScroll, false);
    else setHeaderClass('header attached');

    return () => {
      window.removeEventListener('resize', handleResizeWindow, false);
      window.removeEventListener('scroll', handleScroll, false);
    };
  }, [pathname]);

  useEffect(() => {
    const unListen = history.listen(() => {
      if (isMobile) setDisplayMenu(false);
    });
    return () => unListen();
  }, [isMobile, history]);

  const onToggleMenu = () => setDisplayMenu(!displayMenu);

  return (
    <header id="header" className={headerClass}>
      <div className="container">
        <nav className="nav d-flex align-items-center justify-content-between">
          <Link className="logo" to="/">
            <img src={LogoImage} alt="Applyya" />
          </Link>
          <div className="d-flex align-items-center">
            <I18nMenu className="language d-block d-md-none" />
            <div className={menuButtonClass} onClick={onToggleMenu}>
              <span />
            </div>
          </div>
          <Collapse className="nav__content" isOpened={displayMenu}>
            <div className={`nav__content__inner ${adaptiveClass}`}>
              <ul className="menu">
                <li className="menu__item">
                  <NavLink activeClassName="active" to="/resume-builder/">
                    {t('Features', 'menu')}
                  </NavLink>
                </li>
                <li className="menu__item">
                  <NavLink activeClassName="active" to="/contact-us/">
                    {t('Contact us', 'menu')}
                  </NavLink>
                </li>
                <li className="menu__item">
                  <ResumeExamplesMenu className="multi-menu" />
                </li>
                <li className="menu__item">
                  <I18nMenu className="language d-none d-md-block" />
                </li>
              </ul>
            </div>
          </Collapse>
        </nav>
      </div>
    </header>
  );
};

export default withRouter(Header);

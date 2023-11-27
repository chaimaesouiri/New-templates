import React, { useEffect, useState } from 'react';
import { Collapse } from 'react-collapse';
import { NavLink, withRouter } from 'react-router-dom';
import OutsideClickHandler from 'react-outside-click-handler';
import { i18n } from '../../utils/i18n';

const ResumeExamplesMenu = ({ history, className }) => {
  const [isOpen, setIsOpen] = useState(false);

  useEffect(() => {
    const unListen = history.listen(() => setIsOpen(false));
    return () => unListen();
  }, [history]);

  const onToggle = (e) => {
    e.preventDefault();

    setIsOpen(!isOpen);
  };

  const onOutsideClick = () => {
    if (isOpen) {
      setIsOpen(false);
    }
  };

  const { t } = i18n();

  return (
    <OutsideClickHandler onOutsideClick={onOutsideClick}>
      <ul className={className}>
        <li className="menu__item">
          {/* eslint-disable-next-line jsx-a11y/anchor-is-valid */}
          <a href="" onClick={onToggle}>
            {t('Resume examples', 'menu')}
          </a>
          <Collapse className="multi-menu__sub" isOpened={isOpen}>
            <ul>
              <li key="software-engineer">
                <NavLink
                  activeClassName="active"
                  to="/software-engineer-resume"
                >
                  {t('Software engineer', 'menu')}
                </NavLink>
              </li>
              <li>
                <NavLink activeClassName="active" to="/student-resume/">
                  {t('Student', 'menu')}
                </NavLink>
              </li>
            </ul>
          </Collapse>
        </li>
      </ul>
    </OutsideClickHandler>
  );
};

export default withRouter(ResumeExamplesMenu);

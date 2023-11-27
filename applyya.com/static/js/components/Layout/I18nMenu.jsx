import React, { useState, useMemo } from 'react';
import { withRouter } from 'react-router-dom';
import { Collapse } from 'react-collapse';
import OutsideClickHandler from 'react-outside-click-handler';
import DownArrowImage from '../../assets/images/icons/down-arrow.svg';
import { locales, getCurrentLocaleInfo } from '../../utils/locale';

const localeInfo = getCurrentLocaleInfo();

const I18nMenu = ({ location: { pathname }, className }) => {
  const [isOpen, setIsOpen] = useState(false);

  const onToggle = (e) => {
    e.preventDefault();

    setIsOpen(!isOpen);
  };

  const outsideClickHandler = () => {
    if (isOpen) setIsOpen(false);
  };

  const filteredLocales = useMemo(() => {
    const localeInfo = getCurrentLocaleInfo();

    return Object.values(locales).filter((locale) => locale.iso !== localeInfo.iso);
  }, [locales, localeInfo]);

  return (
    <OutsideClickHandler onOutsideClick={outsideClickHandler}>
      <ul className={className}>
        <li>
          <button onClick={onToggle}>
            {localeInfo.short} <img src={DownArrowImage} alt="down-arrow" />
          </button>
          <Collapse className="language__sub" isOpened={isOpen}>
            <ul>
              {filteredLocales.map((locale) => (
                <li key={locale.iso}>
                  <a href={`${locale.url}${pathname === '' ? '/' : pathname}`}>{locale.short}</a>
                </li>
              ))}
            </ul>
          </Collapse>
        </li>
      </ul>
    </OutsideClickHandler>
  );
};

export default withRouter(I18nMenu);

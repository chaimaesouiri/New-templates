import React from "react";
import { NavLink, Link } from "react-router-dom";

import { i18n } from "../../utils/i18n";
import LogoImage from "../../assets/images/logo.svg";

const Footer = () => {
  const { t } = i18n();

  return (
    <footer className="footer" id="footer">
      <div className="container">
        <div className="row align-items-center">
          <div className="col-12 col-md-4 order-2 order-md-1">
            <Link to="/" className="logo__bottom">
              <img src={LogoImage} alt="applyya" />
            </Link>
          </div>
          <div className="col-12 col-md-8 order-1">
            <nav className="footer-menu d-flex align-items-center">
              <NavLink activeClassName="active" to="/media-kit/">
                {t("Media Kit", "menu")}
              </NavLink>
              <NavLink activeClassName="active" to="/terms/">
                {t("Terms of use", "menu")}
              </NavLink>
              <NavLink activeClassName="active" to="/privacy/">
                {t("Privacy policy", "menu")}
              </NavLink>
              <a href="/blog">{t("Blog", "menu")}</a>
              <div className="social-link d-flex">
                <a aria-label="Facebook" href="https://facebook.com/applyya" className="social-link__item social-link--facebook">
                  <span className="icon icon-facebook" />
                </a>
                <a aria-label="Linkedin" href="https://www.linkedin.com/company/14029550" className="social-link__item social-link--linkedin">
                  <span className="icon icon-linkedin" />
                </a>
                <a aria-label="Twitter" href="https://twitter.com/applyya" className="social-link__item social-link--twitter">
                  <span className="icon icon-twitter" />
                </a>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </footer>
  );
};

export default Footer;

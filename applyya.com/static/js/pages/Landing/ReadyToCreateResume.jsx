import React from 'react';
import { Link } from 'react-router-dom';
import { i18n } from '../../utils/i18n';

import ArrowSectionReadyCreateResume from '../../assets/images/landing/ready-create-resume/arrow.svg';

const { t } = i18n();

const ReadyToCreateResume = () => {
  return (
    <section className="ready-create-resume">
      <div className="container">
        <div className="row justify-content-between">
          <div className="col-12 col-md-6 col-lg-4">
            <h3 className="title-section ready-create-resume__title"><span>Ready to create</span> the best CV!</h3>
            <p className="ready-create-resume__text">Get started with the best online job cv/resume maker and make job winning resumes in no time!</p>
          </div>
          <div className="col-12 col-md-6 col-lg-5">
            <div className="ready-create-resume__btn">
              <img className="ready-create-resume__arrow-img" src={ArrowSectionReadyCreateResume} alt="" />
              <span className="for-free" />
              <Link className="btn-orange creat-resume__btn" to="/editor">
                {t('CREATE RESUME FOR FREE', 'landing')}
              </Link>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default ReadyToCreateResume;

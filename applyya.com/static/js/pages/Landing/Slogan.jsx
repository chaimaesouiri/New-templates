import React, { PureComponent } from 'react';
import { Link } from 'react-router-dom';
import { i18n } from '../../utils/i18n';
import exampleEditorImage from '../../assets/images/landing-resume.svg';

const { t } = i18n();

export class Benefits extends PureComponent {
  render() {
    return (
      <section className="creat-resume">
        <div className="container">
          <div className="row">
            <div className="col-12 col-md-6 col-lg-5 order-2">
              <h1 className="title-section creat-resume__title">
                {t('CREATING A RESUME', 'landing')}&nbsp;
                <span>{t('HAS NEVER BEEN EASIER', 'landing')}</span>
              </h1>

              <p className="text-animate">
                {t('Create an excellent resume in minutes.', 'landing')}
              </p>
              <p className="text-animate">
                {t('No more manual formatting. Fast, easy, flexible.', 'landing')}
              </p>

              <Link className="btn-orange creat-resume__btn btn-animate" to="/editor">
                {t('CREATE RESUME FOR FREE', 'landing')}
              </Link>
            </div>
            <div className="col-12 col-md-6 col-lg-7 order-md-2 order-1">
              <div className="creat-resume__img img-animate">
                <img src={exampleEditorImage} alt="" />
              </div>
            </div>
          </div>
        </div>
      </section>
    );
  }
}

export default Benefits;

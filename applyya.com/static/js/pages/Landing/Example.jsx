import React, { PureComponent } from 'react';
import { i18n } from '../../utils/i18n';
import Slider from './Slider';

import ReactWOW from 'react-wow';

export class Benefits extends PureComponent {
  render() {
    const { t } = i18n();

    return (
      <section className='good-resume'>
        <div className='container'>
          <div className='row'>
            <div className='col-12 col-md-5'>
              <h2 className='title-section good-resume__title'>
                {t('A GOOD RESUME IS A KEY', 'landing')}
                <span>{t('TO YOUR DREAM JOB', 'landing')}</span>
              </h2>
            </div>
            <div className='col-12 col-md-7 col-lg-6'>
              <p className='good-resume__text text-animate'>{t('good-resume-key-1', 'landing')}</p>
              <p className='good-resume__text text-animate'>{t('good-resume-key-2', 'landing')}</p>

              <p className='good-resume__text text-animate'>{t('good-resume-key-3', 'landing')}</p>
            </div>
            <div className='col-12'>
              <Slider />
            </div>
          </div>
        </div>
      </section>
    );
  }
}

export default Benefits;

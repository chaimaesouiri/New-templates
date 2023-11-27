import React, { PureComponent } from 'react';
import { i18n } from '../../utils/i18n';

import step1Image from '../../assets/images/landing/how-to-create/step-1.svg';
import step2Image from '../../assets/images/landing/how-to-create/step-2.svg';
import step3Image from '../../assets/images/landing/how-to-create/step-3.svg';

import step1NumberImage from '../../assets/images/landing/how-to-create/step-number-1.svg';
import step2NumberImage from '../../assets/images/landing/how-to-create/step-number-2.svg';
import step3NumberImage from '../../assets/images/landing/how-to-create/step-number-3.svg';

export class HowToCreate extends PureComponent {
  render() {
    const { t } = i18n();

    return (
      <section className='how-create-cv'>
        <div className='container'>
          <h2 className='title-section text-center how-create-cv__title'>
            {t('How to create a resume with', 'landing')}
            <span>{t('our online builder', 'landing')}</span>
          </h2>
          <div className='row align-items-center mb-20'>
            <div className='col-12 col-md-6'>
              <div className='how-create-cv__img img-animate'>
                <img src={step1Image} alt='' />
              </div>
            </div>
            <div className='col-12 col-md-6'>
              <div className='how-create-cv__desc'>
                  <span className='how-create-cv__step'>
                    <img src={step1NumberImage} alt='' />
                  </span>
                <p className='text-animate'>{t('step-1-description', 'landing')}</p>
              </div>
            </div>
          </div>
          <div className='row align-items-center mb-150'>
            <div className='col-12 col-md-6 order-md-2'>
              <div className='how-create-cv__img img-animate'>
                <img src={step2Image} alt='' />
              </div>
            </div>
            <div className='col-12 col-md-6'>
              <div className='how-create-cv__desc how-create-cv__desc_left'>
                  <span className='how-create-cv__step'>
                    <img src={step2NumberImage} alt='' />
                  </span>
                <p className='text-animate'>{t('step-2-description', 'landing')}</p>
              </div>
            </div>
          </div>
          <div className='row align-items-center'>
            <div className='col-12 col-md-6'>
              <div className='how-create-cv__img img-animate'>
                <img src={step3Image} alt='' />
              </div>
            </div>
            <div className='col-12 col-md-6'>
              <div className='how-create-cv__desc'>
                  <span className='how-create-cv__step'>
                    <img src={step3NumberImage} alt='' />
                  </span>
                <p className='text-animate'>{t('step-3-description', 'landing')}</p>
              </div>
            </div>
          </div>
        </div>
      </section>
    );
  }
}

export default HowToCreate;

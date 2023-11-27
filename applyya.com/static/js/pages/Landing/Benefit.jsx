import React, { PureComponent } from 'react';
import { i18n } from '../../utils/i18n';

import benefitsBackgroundImage from '../../assets/images/landing/benefits/background.svg';
import benefitsImg1Image from '../../assets/images/landing/benefits/icon-1.svg';
import benefitsImg2Image from '../../assets/images/landing/benefits/icon-2.svg';
import benefitsImg3Image from '../../assets/images/landing/benefits/icon-3.svg';

export class Benefit extends PureComponent {
  render() {
    const { t } = i18n();

    return (
      <section className='value-resume'>
          <span className='value-resume__img img-animate'>
            <img src={benefitsBackgroundImage} alt='' />
          </span>
        <div className='container'>
          <h2 className='title-section value-resume__title text-center'>
            {t('THE VALUE OF CREATING A RESUME', 'landing')}
            <span>{t('WITH ONLINE BUILDER', 'landing')}</span>
          </h2>
          <div className='row'>
            <div className='col-12 col-md-4'>
              <div className='card text-center'>
                <div className='card__img'>
                  <img src={benefitsImg1Image} alt='' />
                </div>
                <h4 className='card__title'>{t('Save time and energy', 'landing')}</h4>
                <p>{t('save-time-description', 'landing')}</p>
              </div>
            </div>
            <div className='col-12 col-md-4'>
              <div className='card text-center'>
                <div className='card__img'>
                  <img src={benefitsImg2Image} alt='' />
                </div>
                <h4 className='card__title'>{t('Be professional', 'landing')}</h4>
                <p>{t('be-professional-description', 'landing')}</p>
              </div>
            </div>
            <div className='col-12 col-md-4'>
              <div className='card text-center'>
                <div className='card__img'>
                  <img src={benefitsImg3Image} alt='' />
                </div>
                <h4 className='card__title'>{t('Impress employers', 'landing')}</h4>
                <p>{t('impress-employers-description', 'landing')}</p>
              </div>
            </div>
          </div>
        </div>
      </section>
    );
  }
}

export default Benefit;

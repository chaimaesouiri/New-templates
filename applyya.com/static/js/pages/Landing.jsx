import React from 'react';
import { Helmet } from 'react-helmet';
import Base from './Landing/Base';
import { i18n } from '../utils/i18n';
import { locales, getCurrentLocaleInfo } from '../utils/locale';

const localeInfo = getCurrentLocaleInfo();

const Landing = () => {
  const { t } = i18n();

  return (
    <>
      <Helmet>
        <title>{t('landing.title', 'meta')}</title>
        {Object.values(locales).map((locale) => (
          <link key={locale.iso} rel="alternate" href={`${locale.absoluteUrl}`} hrefLang={locale.iso} />
        ))}

        <meta property="og:title" content={t('landing.title', 'meta')} />
        <meta property="og:description" content={t('landing.description', 'meta')} />
        <meta name="description" content={t('landing.description', 'meta')} />
        <meta property="og:image" content="/images/share-image.jpeg" />
        <meta property="og:url" content={`${localeInfo.url}`} />
        <meta name="twitter:card" content="summary_large_image" />
        <html lang={localeInfo.iso} />
      </Helmet>

      <main>
        <Base />
      </main>
    </>
  );
};

export default Landing;

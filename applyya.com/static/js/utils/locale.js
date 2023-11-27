export const locales = {
  en: {
    name: 'English',
    short: 'ENG',
    iso: 'en',
    url: '',
    absoluteUrl: 'https://applyya.com/',
  },
  fr: {
    name: 'France',
    short: 'FRA',
    iso: 'fr',
    url: '/fr',
    absoluteUrl: 'https://applyya.com/fr/',
  },
  es: {
    name: 'Español',
    short: 'ESP',
    iso: 'es',
    url: '/es',
    absoluteUrl: 'https://applyya.com/es/',
  },
  uk: {
    name: 'Українська',
    short: 'UKR',
    iso: 'uk',
    url: '/uk',
    absoluteUrl: 'https://applyya.com/uk/',
  },
};

export const getLocaleName = () => {
  const urlLocales = ['uk', 'fr', 'es'];
  const urlParams = window.location.pathname.split('/');
  const locale = urlParams[1] || '';

  return locale.length === 2 && urlLocales.includes(locale) ? locale : 'en';
};

export const getCurrentLocaleInfo = () => locales[getLocaleName()];

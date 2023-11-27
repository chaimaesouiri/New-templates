import { getLocaleName } from './locale';
import en from '../translations/en.json';
import es from '../translations/es.json';
import fr from '../translations/fr.json';
import uk from '../translations/uk.json';

const locale = getLocaleName();
const messages = process.env.IS_SSR
  ? null : locale === 'en'
    ? en : locale === 'es'
      ? es : locale === 'fr'
        ? fr : locale === 'uk'
          ? uk : en;

export function i18n() {
  const getMessage = (domain, key) => {
    if (!domain || !messages) return key;

    const domainMessages = messages.translations[locale][domain];
    if (!(domainMessages instanceof Object)) {
      return key;
    }

    return domainMessages[key] || key;
  };

  return {
    t: (text, domain) => (process.env.IS_SSR ? '' : getMessage(domain, text)),
  };
}

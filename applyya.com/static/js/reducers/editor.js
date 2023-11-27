import dotProp from 'dot-prop-immutable';
import {
  ADD_SECTION_ITEM,
  ADD_SECTION_ITEM_AFTER,
  CHANGE_ITEM_DATA,
  CHANGE_SECTION_DATA,
  CHANGE_SECTION_TITLE,
  CHANGE_SECTION_TITLES,
  CHANGE_TEMPLATE,
  DELETE_ITEM,
  EDITOR_LOADED,
  LOAD_RESUME,
  MOVE_ITEM,
  SET_COLOR,
  SET_ITEM_HEIGHT,
  SET_RESUME,
  RESET_RESUME,
  SET_SECTION_HEIGHT,
  SET_SETTING,
  SET_UUID,
  TOGGLE_SECTION,
} from '../constants/actionTypes';

import { getTemplateSections } from '../constants/templates';
import { i18n } from '../utils/i18n';

export const FONTS_MAP = {
  Arial: 'Arial, Helvetica, sans-serif',
  Tahoma: 'Tahoma, Geneva, sans-serif',
  'Trebuchet MS': '"Trebuchet MS", Helvetica, sans-serif',
  Verdana: 'Verdana, Geneva, sans-serif',
  'Courier New': '"Courier New", Courier, monospace',
  Montserrat: "'Montserrat', sans-serif",
  Roboto: "'Roboto', sans-serif",
  Ubuntu: "'Ubuntu', sans-serif",
  'Indie Flower': "'Indie Flower', cursive",
};

export const EDITOR_MODE_EDIT = 1;
export const EDITOR_MODE_PREVIEW = 2;
export const EDITOR_MODE_PDF = 3;

export const FONT_SIZE_MAP = { large: 80, medium: 74, small: 64 };

export const experience = {
  dateFrom: '',
  dateTo: '',
  company: '',
  location: '',
  position: '',
  description: '',
};
export const education = {
  dateFrom: '',
  dateTo: '',
  university: '',
  location: '',
  description: '',
  fieldOfStudy: '',
};
export const skill = { skill: '' };
export const language = { language: '', proficiency: '' };
export const certification = { name: '', issuer: '' };

export const POSITION_TOP = 1;
export const POSITION_LEFT = 2;
export const POSITION_RIGHT = 3;

export const TEMPLATE_FIRST = 1;
export const TEMPLATE_SECOND = 2;
export const TEMPLATE_ANDROMEDA = 3;

export const HEADER_SECTION = 'header';
export const ABOUT_ME_SECTION = 'aboutMe';
export const CONTACT_SECTION = 'contacts';
export const LOGO_SECTION = 'logo';
export const SKILL_SECTION = 'skills';
export const EDUCATION_SECTION = 'education';
export const LANGUAGE_SECTION = 'language';
export const EXPERIENCE_SECTION = 'experience';
export const CERTIFICATION_SECTION = 'certification';
export const INTEREST_SECTION = 'interest';
export const REFERENCE_SECTION = 'reference';

export const PROFILE_ENTITY = 'profile';
export const EXPERIENCE_ENTITY = 'experience';
export const EDUCATION_ENTITY = 'education';
export const INTEREST_ENTITY = 'interest';
export const LANGUAGE_ENTITY = 'language';
export const CERTIFICATION_ENTITY = 'certification';
export const REFERENCE_ENTITY = 'reference';
export const SKILL_ENTITY = 'skill';

const timestamp = new Date().getTime();
const DEFAULT_SECTION_ITEM = [{ id: timestamp, height: 0 }];

const { t } = i18n();

export const initialState = {
  isLoading: false,
  data: {
    [PROFILE_ENTITY]: {
      name: null,
      position: null,
      photo: null,
      address: null,
      phone: null,
      email: null,
      bio: null,
      website: null,
      skype: null,
      linkedin: null,
    },
    [INTEREST_ENTITY]: { description: null },
    [REFERENCE_ENTITY]: { description: null },
    [EXPERIENCE_ENTITY]: [{ ...experience, ...{ id: timestamp } }],
    [EDUCATION_ENTITY]: [{ ...education, ...{ id: timestamp } }],
    [CERTIFICATION_ENTITY]: [{ ...certification, ...{ id: timestamp } }],
    [LANGUAGE_ENTITY]: [{ ...language, ...{ id: timestamp } }],
    [SKILL_ENTITY]: [{ ...skill, ...{ id: timestamp } }],
  },
  sectionsEnabled: {
    [SKILL_ENTITY]: true,
    [EXPERIENCE_ENTITY]: true,
    [EDUCATION_ENTITY]: true,
    [INTEREST_ENTITY]: false,
    [REFERENCE_ENTITY]: false,
    [CERTIFICATION_ENTITY]: false,
    [LANGUAGE_ENTITY]: false,
    [PROFILE_ENTITY]: {
      skype: false,
      phone: true,
      position: true,
      bio: true,
      website: false,
      email: true,
      address: true,
      photo: true,
      linkedin: false,
    },
  },
  sections: getTemplateSections(TEMPLATE_FIRST),
  sectionsItems: {
    [SKILL_ENTITY]: DEFAULT_SECTION_ITEM,
    [EXPERIENCE_ENTITY]: DEFAULT_SECTION_ITEM,
    [EDUCATION_ENTITY]: DEFAULT_SECTION_ITEM,
    [CERTIFICATION_ENTITY]: DEFAULT_SECTION_ITEM,
    [LANGUAGE_ENTITY]: DEFAULT_SECTION_ITEM,
  },
  labels: {
    [PROFILE_ENTITY]: {
      profile: t('labels.profile', 'editor'),
      position: t('labels.position', 'editor'),
      phone: t('labels.phone', 'editor'),
      email: t('labels.email', 'editor'),
      skype: t('labels.skype', 'editor'),
      website: t('labels.website', 'editor'),
      address: t('labels.address', 'editor'),
      contacts: t('labels.contacts', 'editor'),
      linkedin: 'LinkedIn',
    },
    [EXPERIENCE_ENTITY]: {
      section: t('labels.experience', 'editor'),
    },
    [EDUCATION_ENTITY]: {
      section: t('labels.education', 'editor'),
    },
    [INTEREST_ENTITY]: {
      section: t('labels.interests', 'editor'),
    },
    [LANGUAGE_ENTITY]: {
      section: t('labels.languages', 'editor'),
    },
    [SKILL_ENTITY]: {
      section: t('labels.skills', 'editor'),
    },
    [CERTIFICATION_ENTITY]: {
      section: t('labels.certification', 'editor'),
    },
    [REFERENCE_ENTITY]: {
      section: t('labels.references', 'editor'),
    },
  },
  placeholders: {
    [PROFILE_ENTITY]: {
      position: t('placeholders.position', 'editor'),
      name: t('placeholders.name', 'editor'),
      phone: t('placeholders.phone', 'editor'),
      phoneValue: '000 000 00 00',
      email: t('placeholders.email', 'editor'),
      emailValue: 'email@gmail.com',
      skype: t('placeholders.skype', 'editor'),
      skypeValue: 'nick_name',
      website: t('placeholders.website', 'editor'),
      websiteValue: 'www.site.com',
      address: t('placeholders.address', 'editor'),
      addressValue: t('placeholders.address.value', 'editor'),
      profile: t('placeholders.profile', 'editor'),
      bio: t('placeholders.bio', 'editor'),
      contacts: t('placeholders.contacts', 'editor'),
      linkedin: 'LinkedIn',
      linkedinValue: 'https://www.linkedin.com',
    },
    [EXPERIENCE_ENTITY]: {
      section: t('placeholders.section.experience', 'editor'),
      dateFrom: t('placeholders.from', 'editor'),
      dateTo: t('placeholders.until', 'editor'),
      company: t('placeholders.experience.company', 'editor'),
      location: t('placeholders.experience.location', 'editor'),
      position: t('placeholders.experience.position', 'editor'),
      description: t('placeholders.experience.description', 'editor'),
    },
    [EDUCATION_ENTITY]: {
      section: t('placeholders.section.education', 'editor'),
      dateFrom: t('placeholders.from', 'editor'),
      dateTo: t('placeholders.until', 'editor'),
      university: t('placeholders.education.university', 'editor'),
      location: t('placeholders.education.location', 'editor'),
      description: t('placeholders.education.description', 'editor'),
      fieldOfStudy: t('placeholders.education.fieldOfStudy', 'editor'),
    },
    [CERTIFICATION_ENTITY]: {
      section: t('placeholders.section.certification', 'editor'),
      name: t('placeholders.certification.name', 'editor'),
      issuer: t('placeholders.certification.issuer', 'editor'),
      identifier: t('placeholders.certification.identifier', 'editor'),
      dateFrom: t('placeholders.from', 'editor'),
      dateTo: t('placeholders.until', 'editor'),
    },
    [SKILL_ENTITY]: {
      section: t('placeholders.section.skills', 'editor'),
      item: t('placeholders.skill.item', 'editor'),
    },
    [LANGUAGE_ENTITY]: {
      section: t('placeholders.section.languages', 'editor'),
      language: t('placeholders.language.item', 'editor'),
    },
    [INTEREST_ENTITY]: {
      section: t('placeholders.section.interests', 'editor'),
      description: t('placeholders.interests.description', 'editor'),
    },
    [REFERENCE_ENTITY]: {
      section: t('placeholders.section.references', 'editor'),
      description: t('placeholders.references.description', 'editor'),
    },
  },
  settings: {
    template: TEMPLATE_FIRST,
    mode: EDITOR_MODE_EDIT,
    font: FONTS_MAP['Trebuchet MS'],
    size: FONT_SIZE_MAP.small,
    colors: ['#8CAEED', '#FF7235'],
  },
  uuid: null,
};

let newState; let items; let
  index;

export const editor = (state = initialState, action) => {
  const getIndex = (name) => {
    return state.sections.findIndex((section) => section.name === name);
  };

  switch (action.type) {
    case SET_RESUME:
      return { ...state, ...action.payload };

    case RESET_RESUME:
      return initialState;

    case LOAD_RESUME:
      return { ...state, isLoading: true };

    case EDITOR_LOADED:
      return { ...state, isLoading: false };

    case SET_UUID:
      return { ...state, uuid: action.uuid };

    case ADD_SECTION_ITEM:
      newState = dotProp.merge(state, `data.${action.entity}`, action.item);

      return dotProp.merge(newState, `sectionsItems.${action.entity}`, action.sectionItem);

    case ADD_SECTION_ITEM_AFTER:
      items = state.data[action.entity].slice();
      items.splice(action.index, 0, action.item);
      newState = dotProp.set(state, `data.${action.entity}`, items);

      return dotProp.merge(newState, `sectionsItems.${action.entity}`, action.sectionItem);

    case CHANGE_ITEM_DATA:
      index = state.data[action.entity].findIndex((o) => o.id === action.index);

      return dotProp.set(state, `data.${action.entity}.${index}.${action.key}`, action.value);

    case CHANGE_SECTION_DATA:
      return dotProp.set(state, `data.${action.entity}.${action.key}`, action.value);

    case CHANGE_SECTION_TITLES:
      return dotProp.set(state, `labels.${action.entity}.${action.key}`, action.value);

    case CHANGE_SECTION_TITLE:
      return dotProp.set(state, `labels.${action.entity}.section`, action.value);

    case SET_SECTION_HEIGHT:
      return dotProp.set(state, `sections.${getIndex(action.entity)}.height`, action.height);

    case SET_ITEM_HEIGHT:
      index = state.sectionsItems[action.entity].findIndex((o) => o.id === action.id);

      return dotProp.set(state, `sectionsItems.${action.entity}.${index}.height`, action.height);

    case MOVE_ITEM:
      const moveItem = dotProp.get(state, `sectionsItems.${action.entity}.${action.oldIndex}`);

      newState = dotProp.delete(state, `sectionsItems.${action.entity}.${action.oldIndex}`);
      items = newState.sectionsItems[action.entity];
      items.splice(action.newIndex, 0, moveItem);

      return newState;

    case DELETE_ITEM:
      newState = dotProp.delete(state, `data.${action.entity}.${action.index}`);

      index = newState.sectionsItems[action.entity].findIndex((o) => o.id === action.id);

      return dotProp.delete(newState, `sectionsItems.${action.entity}.${index}`);

    case TOGGLE_SECTION:
      if (action.key) {
        return dotProp.toggle(state, `sectionsEnabled.${action.entity}.${action.key}`);
      }

      return dotProp.toggle(state, `sectionsEnabled.${action.entity}`);

    case SET_SETTING:
      return dotProp.set(state, `settings.${action.key}`, action.value);

    case SET_COLOR:
      return dotProp.set(state, `settings.colors.${action.index}`, action.color);

    case CHANGE_TEMPLATE:
      newState = dotProp.set(state, 'settings.template', action.id);

      return dotProp.set(newState, 'sections', action.sections);

    default:
      return state;
  }
};

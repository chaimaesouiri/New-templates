import React from 'react';
import Benefit from './Benefit';
import Slogan from './Slogan';
import Example from './Example';
import HowToCreate from './HowToCreate';
import ReadyToCreateResume from './ReadyToCreateResume';

import '../../assets/css/landing/animate.css';

const Base = () => (
  <>
    <Slogan />
    <Benefit />
    <Example />
    <HowToCreate />
    <ReadyToCreateResume />
  </>
);

export default Base;

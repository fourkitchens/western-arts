import React from 'react';
import { useEffect } from '@storybook/client-api';
// Global Data
import globalDataImages from 'western-up-twig/_global-data/images.yml';

import heroTwig from 'western-up-twig/02-molecules/hero/hero.twig';

import heroData from 'western-up-twig/02-molecules/hero/hero.yml';

import heroCustomTwig from './hero-custom.twig';
import './hero-custom';


/**
 * Storybook Definition.
 */
export default { title: 'Molecules/Heroes' };

export const hero = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: heroTwig({ ...globalDataImages, ...heroData }),
    }}
  />
);

export const heroCustom = () => {
  useEffect(() => Drupal.attachBehaviors(), []);
  return (
    <div
      dangerouslySetInnerHTML={{
        __html: heroCustomTwig(),
      }}
    />
  );
};

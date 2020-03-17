import React from 'react';
import { useEffect } from '@storybook/client-api';
// Global Components
import heroTwig from 'western-up-twig/02-molecules/hero/hero.twig';
// Global Data
import globalDataImages from 'western-up-twig/_global-data/images.yml';

// WA Components
import heroCustomTwig from './wa-hero.twig';
// WA Data
import heroData from 'western-up-twig/02-molecules/hero/hero.yml';
// JS
import 'western-up-twig/01-atoms/images/background-image/background-image';
import './wa-hero';

/**
 * Storybook Definition.
 */
export default { title: 'Molecules/Heroes' };

export const hero = () => {
  useEffect(() => Drupal.attachBehaviors(), []);
  return (
    <div
      dangerouslySetInnerHTML={{
        __html: heroTwig({ ...globalDataImages, ...heroData }),
      }}
    />
  );
};

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

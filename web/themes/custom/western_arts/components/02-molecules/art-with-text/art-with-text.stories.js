import React from 'react';
// WA Components
import artWithTextTwig from './art-with-text.twig';
// WA Data
import artWithTextLeftData from './art-with-text--left.yml';
import artWithTextRightData from './art-with-text--right.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Molecules/Art With Text' };

export const artWithTextLeft = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: artWithTextTwig(artWithTextLeftData),
    }}
  />
);
export const artWithTextRight = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: artWithTextTwig(artWithTextRightData),
    }}
  />
);

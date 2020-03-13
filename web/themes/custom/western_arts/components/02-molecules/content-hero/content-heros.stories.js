import React from 'react';
// Global Data
import contentHeroTwig from './content-hero.twig';

import contentHeroData from './content-hero.yml';


/**
 * Storybook Definition.
 */
export default { title: 'Molecules/Content Heros' };

export const artTools = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: contentHeroTwig(contentHeroData),
    }}
  />
);

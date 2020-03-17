import React from 'react';
// WA Components
import contentHeroTwig from './content-hero.twig';
// WA Data
import contentHeroData from './content-hero.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Molecules/Content Heros' };

export const contentHero = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: contentHeroTwig(contentHeroData),
    }}
  />
);

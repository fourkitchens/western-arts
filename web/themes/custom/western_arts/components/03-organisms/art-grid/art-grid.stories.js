import React from 'react';
// Component Twig
import artGridTwig from './art-grid.twig';
// Component Data
import artGridData from './art-grid.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Art Grid' };

export const home = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: artGridTwig(artGridData),
    }}
  />
);

import React from 'react';
// Global Data
import artGridTwig from './art-grid.twig';

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

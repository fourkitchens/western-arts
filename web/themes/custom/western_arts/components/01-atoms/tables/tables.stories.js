import React from 'react';

import tables from 'western-up-twig/01-atoms/tables/tables.twig';

/**
 * Storybook Definition.
 */
export default { title: 'Atoms/Tables' };

export const table = () => (
  <div dangerouslySetInnerHTML={{ __html: tables({}) }} />
);

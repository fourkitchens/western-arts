import React from 'react';

import status from 'western-up-twig/02-molecules/status/status.twig';

import statusData from 'western-up-twig/02-molecules/status/status.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Molecules/Status' };

export const statusExamples = () => (
  <div dangerouslySetInnerHTML={{ __html: status(statusData) }} />
);

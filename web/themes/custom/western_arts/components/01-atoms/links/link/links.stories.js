import React from 'react';

import link from 'western-up-twig/01-atoms/links/link/link.twig';

import linkData from 'western-up-twig/01-atoms/links/link/link.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Atoms/Links' };

export const links = () => (
  <div dangerouslySetInnerHTML={{ __html: link(linkData) }} />
);

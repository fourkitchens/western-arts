import React from 'react';

import fullBleedTwig from './wa-full-bleed.twig';

import mainMenu from 'western-up-twig/02-molecules/menus/main-menu/main-menu.yml';
import socialMenu from 'western-up-twig/02-molecules/menus/social/social-menu.yml';
import footerMenu from 'western-up-twig/02-molecules/menus/inline/inline-menu.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Templates/Layouts' };

export const fullBleed = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: fullBleedTwig({ ...mainMenu, ...socialMenu, ...footerMenu }),
    }}
  />
);

import React from 'react';

import fullWidthTwig from 'western-up-twig/04-templates/full-width.twig';
import withSidebarTwig from 'western-up-twig/04-templates/with-sidebar.twig';

import mainMenu from 'western-up-twig/02-molecules/menus/main-menu/main-menu.yml';
import socialMenu from 'western-up-twig/02-molecules/menus/social/social-menu.yml';
import footerMenu from 'western-up-twig/02-molecules/menus/inline/inline-menu.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Templates/Layouts' };

export const fullWidth = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: fullWidthTwig({ ...mainMenu, ...socialMenu, ...footerMenu }),
    }}
  />
);
export const withSidebar = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: withSidebarTwig({ ...mainMenu, ...socialMenu, ...footerMenu }),
    }}
  />
);

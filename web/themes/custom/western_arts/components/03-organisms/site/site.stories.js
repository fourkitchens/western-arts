import React from 'react';
import { useEffect } from '@storybook/client-api';

import footerTwig from 'western-up-twig/03-organisms/site/site-footer/site-footer.twig';
import siteHeader from 'western-up-twig/03-organisms/site/site-header/site-header.twig';

import footerSocial from 'western-up-twig/02-molecules/menus/social/social-menu.yml';
import footerMenu from 'western-up-twig/02-molecules/menus/inline/inline-menu.yml';
import breadcrumbData from 'western-up-twig/02-molecules/menus/breadcrumbs/breadcrumbs.yml';
import mainMenuData from 'western-up-twig/02-molecules/menus/main-menu/main-menu.yml';

import 'western-up-twig/02-molecules/menus/main-menu/main-menu';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Site' };

export const footer = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: footerTwig({ ...footerSocial, ...footerMenu }),
    }}
  />
);
export const header = () => {
  useEffect(() => Drupal.attachBehaviors(), []);
  return (
    <div
      dangerouslySetInnerHTML={{
        __html: siteHeader({ ...breadcrumbData, ...mainMenuData }),
      }}
    />
  );
};

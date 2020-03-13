import React from 'react';
import { useEffect } from '@storybook/client-api';

import breadcrumb from 'western-up-twig/02-molecules/menus/breadcrumbs/breadcrumbs.twig';
import inlineMenu from 'western-up-twig/02-molecules/menus/inline/inline-menu.twig';
import mainMenu from 'western-up-twig/02-molecules/menus/main-menu/main-menu.twig';
import socialMenu from 'western-up-twig/02-molecules/menus/social/social-menu.twig';

import breadcrumbsData from 'western-up-twig/02-molecules/menus/breadcrumbs/breadcrumbs.yml';
import inlineMenuData from 'western-up-twig/02-molecules/menus/inline/inline-menu.yml';
import mainMenuData from 'western-up-twig/02-molecules/menus/main-menu/main-menu.yml';
import socialMenuData from 'western-up-twig/02-molecules/menus/social/social-menu.yml';

import 'western-up-twig/02-molecules/menus/main-menu/main-menu';

/**
 * Storybook Definition.
 */
export default { title: 'Molecules/Menus' };

export const breadcrumbs = () => (
  <div dangerouslySetInnerHTML={{ __html: breadcrumb(breadcrumbsData) }} />
);
export const inline = () => (
  <div dangerouslySetInnerHTML={{ __html: inlineMenu(inlineMenuData) }} />
);
export const main = () => {
  useEffect(() => Drupal.attachBehaviors(), []);
  return <div dangerouslySetInnerHTML={{ __html: mainMenu(mainMenuData) }} />;
};
export const social = () => (
  <div dangerouslySetInnerHTML={{ __html: socialMenu(socialMenuData) }} />
);

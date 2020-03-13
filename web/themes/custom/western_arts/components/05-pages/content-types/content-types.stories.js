import React from 'react';
import { useEffect } from '@storybook/client-api';
import 'western-up-twig/02-molecules/menus/main-menu/main-menu';
import mainMenuData from 'western-up-twig/02-molecules/menus/main-menu/main-menu.yml';
import breadcrumbData from 'western-up-twig/02-molecules/menus/breadcrumbs/breadcrumbs.yml';
import socialMenuData from 'western-up-twig/02-molecules/menus/social/social-menu.yml';
import footerMenuData from 'western-up-twig/02-molecules/menus/inline/inline-menu.yml';
import articleTwig from './wa-article.twig';
import './wa-article';

/**
 * Storybook Definition.
 */
export default { title: 'Pages/Content Types' };

export const article = () => {
  useEffect(() => Drupal.attachBehaviors(), []);
  return (
    <div
      dangerouslySetInnerHTML={{
        __html: articleTwig({
          page_layout_modifier: 'contained',
          ...mainMenuData,
          ...breadcrumbData,
          ...socialMenuData,
          ...footerMenuData,
          card__link__text: 'Click here',
        }),
      }}
    />
  );
};

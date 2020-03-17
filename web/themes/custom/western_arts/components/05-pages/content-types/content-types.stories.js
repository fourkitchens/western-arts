import React from 'react';
import { useEffect } from '@storybook/client-api';
// Global Components
import articleTwig from 'western-up-twig/05-pages/content-types/article.twig';
// Global Data
import mainMenuData from 'western-up-twig/02-molecules/menus/main-menu/main-menu.yml';
import breadcrumbData from 'western-up-twig/02-molecules/menus/breadcrumbs/breadcrumbs.yml';
import socialMenuData from 'western-up-twig/02-molecules/menus/social/social-menu.yml';
import footerMenuData from 'western-up-twig/02-molecules/menus/inline/inline-menu.yml';
// WA Components
import waArticleTwig from './wa-article.twig';
// JS
import 'western-up-twig/02-molecules/menus/main-menu/main-menu';
import '../../03-organisms/scratch-off-gallery/scratch-off-gallery';

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

export const waArticle = () => {
  useEffect(() => Drupal.attachBehaviors(), []);
  return (
    <div
      dangerouslySetInnerHTML={{
        __html: waArticleTwig({
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

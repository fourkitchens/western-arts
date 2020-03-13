import React from 'react';
import { storiesOf } from '@storybook/react';
import { hrefTo } from '@storybook/addon-links';
import { useEffect } from '@storybook/client-api';
// Global Data
import globalDataImages from 'western-up-twig/_global-data/images.yml';
import 'western-up-twig/02-molecules/menus/main-menu/main-menu';
import mainMenuData from 'western-up-twig/02-molecules/menus/main-menu/main-menu.yml';
import socialMenuData from 'western-up-twig/02-molecules/menus/social/social-menu.yml';
import footerMenuData from 'western-up-twig/02-molecules/menus/inline/inline-menu.yml';
import contentHeroData from '../../02-molecules/content-hero/content-hero.yml';
import artGridData from '../../03-organisms/art-grid/art-grid.yml';
import home from './home-custom.twig';
import '../../02-molecules/hero/hero-custom';

/**
 * Storybook Definition.
 */
hrefTo('Pages/Content Types', 'Article').then(url => {
  // TODO: Can't figure out how to link pages with hrefTo and storiesOf.
  storiesOf('Pages/Landing Pages', module).add('Home', () => {
    useEffect(() => Drupal.attachBehaviors(), []);
    return (
      <div
        dangerouslySetInnerHTML={{
          __html: home({
            page_layout_modifier: 'contained',
            ...globalDataImages,
            ...mainMenuData,
            ...contentHeroData,
            ...artGridData,
            ...socialMenuData,
            ...footerMenuData,
            card_link_url: url,
          }),
        }}
      />
    );
  });
});

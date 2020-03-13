import React from 'react';

import list from 'western-up-twig/03-organisms/list/list.twig';

import listData from 'western-up-twig/03-organisms/list/list.yml';
import listCardData from 'western-up-twig/03-organisms/list/list-cards.yml';
import listCtaData from 'western-up-twig/03-organisms/list/list-ctas.yml';
import listEventCardData from 'western-up-twig/03-organisms/list/list-event-cards.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Lists' };

export const defaultList = () => (
  <div dangerouslySetInnerHTML={{ __html: list(listData) }} />
);
export const cardList = () => (
  <div
    dangerouslySetInnerHTML={{ __html: list({ ...listData, ...listCardData }) }}
  />
);
export const ctaList = () => (
  <div
    dangerouslySetInnerHTML={{ __html: list({ ...listData, ...listCtaData }) }}
  />
);
export const eventCardList = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: list({ ...listData, ...listEventCardData }),
    }}
  />
);

import React from 'react';

import cardTwig from 'western-up-twig/02-molecules/cards/basic/card.twig';
import eventCardTwig from 'western-up-twig/02-molecules/cards/event/event-card.twig';
import newsCardTwig from 'western-up-twig/02-molecules/cards/news/news-card.twig';

import cardData from 'western-up-twig/02-molecules/cards/basic/card.yml';
import cardBgData from 'western-up-twig/02-molecules/cards/basic/card-bg.yml';
import eventCardData from 'western-up-twig/02-molecules/cards/event/event-card.yml';
import newsCardData from 'western-up-twig/02-molecules/cards/news/news-card.yml';

// Project Components
import waCardTwig from './wa-card.twig';
// Project Data
import waCardData from './wa-card.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Molecules/Cards' };

export const card = () => (
  <div dangerouslySetInnerHTML={{ __html: cardTwig(cardData) }} />
);
export const cardWithBackground = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: cardTwig({ ...cardData, ...cardBgData }),
    }}
  />
);
export const eventCard = () => (
  <div dangerouslySetInnerHTML={{ __html: eventCardTwig(eventCardData) }} />
);
export const newsCard = () => (
  <div dangerouslySetInnerHTML={{ __html: newsCardTwig(newsCardData) }} />
);

export const westernArtsCard = () => (
  <div dangerouslySetInnerHTML={{ __html: waCardTwig(waCardData) }} />
);

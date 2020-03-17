import React from 'react';
// WA Components
import artQuoteTwig from './art-quote.twig';
// WA Data
import artQuoteData from './art-quote.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Molecules/Art Quote' };

export const artQuote = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: artQuoteTwig(artQuoteData),
    }}
  />
);

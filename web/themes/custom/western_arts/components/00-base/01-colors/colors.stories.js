import React from 'react';

import colors from 'western-up-twig/00-base/01-colors/colors.twig';

import grayscale from 'western-up-twig/00-base/01-colors/colors-grayscale.yml';
import branding from 'western-up-twig/00-base/01-colors/colors-branding.yml';
// Western Arts Colors
import westernArtsColors from './wa-colors.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Base/Colors' };

export const Grayscale = () => (
  <div dangerouslySetInnerHTML={{ __html: colors(grayscale) }} />
);
export const Branding = () => (
  <div dangerouslySetInnerHTML={{ __html: colors(branding) }} />
);
export const westernArts = () => (
  <div dangerouslySetInnerHTML={{ __html: colors(westernArtsColors) }} />
);

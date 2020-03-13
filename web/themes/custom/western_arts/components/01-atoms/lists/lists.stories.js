import React from 'react';

import dl from 'western-up-twig/01-atoms/lists/dl.twig';
import ul from 'western-up-twig/01-atoms/lists/ul.twig';
import ol from 'western-up-twig/01-atoms/lists/ol.twig';

import dlData from 'western-up-twig/01-atoms/lists/dl.yml';
import ulData from 'western-up-twig/01-atoms/lists/ul.yml';
import olData from 'western-up-twig/01-atoms/lists/ol.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Atoms/Lists' };

export const definitionList = () => (
  <div dangerouslySetInnerHTML={{ __html: dl(dlData) }} />
);
export const unorderedList = () => (
  <div dangerouslySetInnerHTML={{ __html: ul(ulData) }} />
);
export const orderedList = () => (
  <div dangerouslySetInnerHTML={{ __html: ol(olData) }} />
);

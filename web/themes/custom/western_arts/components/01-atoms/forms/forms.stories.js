import React from 'react';

import checkbox from 'western-up-twig/01-atoms/forms/checkbox/checkbox.twig';
import radio from 'western-up-twig/01-atoms/forms/radio/radio.twig';
import select from 'western-up-twig/01-atoms/forms/select/select.twig';
import textfields from 'western-up-twig/01-atoms/forms/textfields/textfields.twig';

import checkboxData from 'western-up-twig/01-atoms/forms/checkbox/checkbox.yml';
import radioData from 'western-up-twig/01-atoms/forms/radio/radio.yml';
import selectOptionsData from 'western-up-twig/01-atoms/forms/select/select.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Atoms/Forms' };

export const checkboxes = () => (
  <div dangerouslySetInnerHTML={{ __html: checkbox(checkboxData) }} />
);
export const radioButtons = () => (
  <div dangerouslySetInnerHTML={{ __html: radio(radioData) }} />
);
export const selectDropdowns = () => (
  <div dangerouslySetInnerHTML={{ __html: select(selectOptionsData) }} />
);
export const textfieldsExamples = () => (
  <div dangerouslySetInnerHTML={{ __html: textfields({}) }} />
);

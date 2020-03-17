import React from 'react';
import { useEffect } from '@storybook/client-api';
// Component Twig
import scratchOffGalleryTwig from './scratch-off-gallery.twig';
// Component Data
import scratchOffGalleryData from './scratch-off-gallery.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Scratch-off Gallery' };

export const scratchOffGallery = () => {
  useEffect(() => Drupal.attachBehaviors(), []);
  return (
    <div
      dangerouslySetInnerHTML={{
        __html: scratchOffGalleryTwig(scratchOffGalleryData),
      }}
    />
  );
};

import React from 'react';

import video from 'western-up-twig/01-atoms/video/video.twig';

import videoData from 'western-up-twig/01-atoms/video/video.yml';
import videoFullData from 'western-up-twig/01-atoms/video/video-full.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Atoms/Videos' };

export const wide = () => (
  <div dangerouslySetInnerHTML={{ __html: video(videoData) }} />
);
export const full = () => (
  <div dangerouslySetInnerHTML={{ __html: video(videoFullData) }} />
);

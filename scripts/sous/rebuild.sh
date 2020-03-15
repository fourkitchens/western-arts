#!/bin/bash

composer install
cd web/themes/custom/western_arts
yarn
yarn build
cd ../../../..
yarn import-data
yarn confim
lando drush uli

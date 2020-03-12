#!/bin/bash
FILES=/Users/adamerickson/Sites/4k-projects/sous/western-arts/config/sync/*
for f in $FILES
do
  echo "Processing $f file..."
  sed -i '' '/^uuid:/d' $f
done
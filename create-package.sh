#!/usr/bin/env sh
rm -f dist/*
tar --exclude='dist' --exclude='.git' --exclude='.idea' \
  -czvf dist/googledocsredirect.tar.gz .

#!/usr/bin/env sh
rm -f dist/*
tar --exclude='dist' --exclude='.git' --exclude='.idea' \
  -czf dist/googledocsredirect.tar.gz --transform 's,^,googledocsredirect/,' *

echo "Signature:"
openssl dgst -sha512 -sign ~/.nextcloud/certificates/googledocsredirect.key dist/googledocsredirect.tar.gz | openssl base64

echo -e "\nNow visit:\nhttps://apps.nextcloud.com/developer/apps/releases/new"

#!/bin/sh
cd _site
lftp -c "open -u $SFTP_USERNAME,$SFTP_PASSWORD sftp://software-creation.nl.transurl.nl; mirror -c -e -R . /www"

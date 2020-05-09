#!/usr/bin/env bash

set -e

USER=$(pass bplaced.net/gmail | grep login | cut -f2 -d' ')
PASS=$(pass bplaced.net/gmail | head -n1 | tr -d '\n')

SRC="src/"
HOST="sflip.bplaced.net"
DST="/www/"

PREPEND_COMMANDS="set ftp:ssl-allow no;" # ¯\_(ツ)_/
lftp -e "$PREPEND_COMMANDS mirror -R $SRC $DST" -u "$USER,$PASS" "$HOST"


#!/usr/bin/env bash

set -e


function upload_via_ftp() {
    PREPEND_COMMANDS="set ftp:ssl-allow no;" # ¯\_(ツ)_/
    APPEND_COMMANDS="exit"
    lftp -e "$PREPEND_COMMANDS mirror -R $SRC $DST; $APPEND_COMMANDS" -u "$USER,$PASS" "$HOST"
}

function upload_via_ssh() {
    # [[ "${SRC}" != */ ]] && SRC="${SRC}/" # append trailing slash if there is none
    [[ "${SRC}" == */ ]] && SRC="${SRC: : -1}" # remove trailing slash if there is one
    # scp -r "$SRC/." "$USER@$HOST:/$DST"
    rsync -ruL --progress "$SRC/." "$USER@$HOST:$DST"
}


SERVER="$1"
case $SERVER in
    "strato" )
        echo "Uploading to Strato..."
        USER=$(pass strato/flipsi | grep ssh-user | cut -f2 -d' ')
        HOST=$(pass strato/flipsi | grep ssh-host | cut -f2 -d' ')
        SRC="src/"
        DST="www/"
        upload_via_ssh
        ;;
    "bplaced" )
        echo "Uploading to bplaced..."
        USER=$(pass bplaced.net/gmail | grep login | cut -f2 -d' ')
        PASS=$(pass bplaced.net/gmail | head -n1 | tr -d '\n')
        SRC="src/"
        HOST="sflip.bplaced.net"
        DST="/www/"
        upload_via_ftp
        ;;
    * )
        echo "No server given. Provide 'strato' or 'bplaced' as argument."
        exit 1
esac


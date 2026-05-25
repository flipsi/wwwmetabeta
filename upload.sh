#!/usr/bin/env bash

set -e


function require() {
    if ! command -v "$1" &>/dev/null; then
        echo "Requires $1"
        exit 1
    fi
}

function upload_via_ftp() {
    require lftp
    PREPEND_COMMANDS="set ftp:ssl-allow no;" # ¯\_(ツ)_/
    APPEND_COMMANDS="exit"
    lftp -e "$PREPEND_COMMANDS mirror -R $SRC $DST; $APPEND_COMMANDS" -u "$USER,$PASS" "$HOST"
}

function upload_via_ssh() {
    require rsync
    require sshpass
    # [[ "${SRC}" != */ ]] && SRC="${SRC}/" # append trailing slash if there is none
    [[ "${SRC}" == */ ]] && SRC="${SRC: : -1}" # remove trailing slash if there is one
    # upload_without_interactive_password_prompt
    upload_with_interactive_password_prompt
}

function upload_with_interactive_password_prompt() {
    # scp -r "$SRC/." "$USER@$HOST:/$DST"
    rsync -urL --progress "$SRC/." "$USER@$HOST:$DST"
}

function upload_without_interactive_password_prompt() {
    ## Source: https://unix.stackexchange.com/a/111534/119362
    PASSWORD_FILE=$(mktemp -p /tmp my_litte_secret.XXXXXX) || exit 2
    chmod 600 "$PASSWORD_FILE"
    echo -n "$PASS" > "$PASSWORD_FILE"
    # rsync -urL --progress --password-file="$PASSWORD_FILE" "$SRC/." "$USER@$HOST:$DST" # `--password-file` requires rsync daemon
    # sshpass -p $(cat "$PASSWORD_FILE") scp -r "$SRC/." "$USER@$HOST:/$DST"
    sshpass -p $(cat "$PASSWORD_FILE") rsync -urL --progress "$SRC/." "$USER@$HOST:$DST"
    rm "$PASSWORD_FILE"
}


function main() {
    SERVER="$1"
    case $SERVER in
        "strato" )
            echo "Uploading to Strato..."
            USER=$(pass strato/flipsi | grep ssh-user | cut -f2 -d' ')
            HOST=$(pass strato/flipsi | grep ssh-host | cut -f2 -d' ')
            PASS=$(pass strato/flipsi | head -n1 | tr -d '\n')
            SRC="target/"
            DST="www/"
            upload_via_ssh
            ;;
        "bplaced" )
            echo "Uploading to bplaced..."
            USER=$(pass bplaced.net/gmail | grep login | cut -f2 -d' ')
            PASS=$(pass bplaced.net/gmail | head -n1 | tr -d '\n')
            SRC="target/"
            HOST="sflip.bplaced.net"
            DST="/www/"
            upload_via_ftp
            ;;
        * )
            echo "No server given. Using default 'strato'".
            main 'strato'
    esac
}

main "$@"

#!/bin/bash

set -e


DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
cd "$DIR"

SRC_DIR='src'
TARGET_DIR='target'


function copy_to_target()
{
    echo "Copying files to target..."
    mkdir -p "$TARGET_DIR"
    dirs_to_copy=(
        blog
        css
        files
        img
        js
        lib
        pages
    )
    cd "$SRC_DIR"
    for FILE in *.php; do
        cp "$FILE" "../$TARGET_DIR"
    done
    for FILE in "${dirs_to_copy[@]}"; do
        cp -r "$FILE" "../$TARGET_DIR"
    done
    cd - >/dev/null
}

function build_translations()
{
    echo "Generating translation files..."
    cd "$SRC_DIR"
    for FILE in locale/*/LC_MESSAGES/*.po; do
        FILENAME=${FILE##*/}
        FILENAME_WITHOUT_EXTENSION=${FILENAME%%.*}
        DIRNAME=$(dirname "$FILE")
        mkdir -p "../$TARGET_DIR/$DIRNAME"
        msgfmt "$FILE" -o "../$TARGET_DIR/$DIRNAME/$FILENAME_WITHOUT_EXTENSION.mo"
    done
    cd - >/dev/null
}

function main()
{
    copy_to_target
    build_translations
    echo "Done!"
}

main "$@"


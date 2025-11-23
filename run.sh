#!/usr/bin/env bash

# Start containerized webserver with PHP to run locally
IMAGE_NAME='flipsi/wwwmetabeta:latest'
CONTAINER_NAME='wwwmetabeta'
HOST_PORT=80

function docker_run() {
    docker run --rm -p $HOST_PORT:80 --name "$CONTAINER_NAME" "$IMAGE_NAME"
}

function docker_run_with_mounted_volume() {
    # sudo chown $WWW_DATA_UID:$WWW_DATA_GID ./target
    # sudo chmod g+rwxs ./target
    # Fix permission errors via SELinux label: https://stackoverflow.com/a/54787364/4568748
    docker run --rm -p $HOST_PORT:80 --name "$CONTAINER_NAME" -v ./target:/var/www/html:z "$IMAGE_NAME"
}

set -e
# echo "Remember to run ./build.sh before this!"
./build.sh
docker build -t "$IMAGE_NAME" .
docker_run_with_mounted_volume


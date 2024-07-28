#!/bin/bash

if [[ -z "$LANDO_MOUNT" ]]; then
  echo "Error: Must be run the appserver.";
  exit 1
fi

set -ex

if [[ ! -e "$LANDO_MOUNT/public/core-dev" ]]; then
  git clone https://github.com/WordPress/WordPress.git --depth 1 --branch $WORDPRESS_TAG "$LANDO_MOUNT/wp"
fi

# When all above steps are skipped, we need to make sure the database is running.
echo "Waiting 5 seconds to ensure database has started..."
sleep 5

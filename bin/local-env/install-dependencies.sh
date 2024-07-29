#!/bin/bash

if [[ -z "$LANDO_MOUNT" ]]; then
  echo "Error: Must be run the appserver.";
  exit 1
fi

cd "$(dirname "$0")"

set -xe

curl -sL https://raw.githubusercontent.com/axllent/mailpit/develop/install.sh | bash

if [[ ! -e /usr/local/bin/phpunit ]]; then
  curl -L https://phar.phpunit.de/phpunit-$PHPUNIT_MAJOR.phar -o /usr/local/bin/phpunit
  chmod +x /usr/local/bin/phpunit
fi

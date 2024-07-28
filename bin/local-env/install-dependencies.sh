#!/bin/bash

if [[ -z "$LANDO_MOUNT" ]]; then
  echo "Error: Must be run the appserver.";
  exit 1
fi

cd "$(dirname "$0")"

echo "Installing Dependencies"
set -xe

curl -sL https://raw.githubusercontent.com/axllent/mailpit/develop/install.sh | bash

mkdir -p /etc/apt/keyrings
curl -fsSL https://deb.nodesource.com/gpgkey/nodesource-repo.gpg.key | gpg --dearmor -o /etc/apt/keyrings/nodesource.gpg
echo "deb [signed-by=/etc/apt/keyrings/nodesource.gpg] https://deb.nodesource.com/node_$NODE_MAJOR.x nodistro main" | tee /etc/apt/sources.list.d/nodesource.list
apt-get update -y
apt-get install nodejs -y

apt-get install zip -y

# Download phpunit pahr based on the major version.
if [[ ! -e /usr/local/bin/phpunit ]]; then
  curl -L https://phar.phpunit.de/phpunit-$PHPUNIT_MAJOR.phar -o /usr/local/bin/phpunit
  chmod +x /usr/local/bin/phpunit
fi

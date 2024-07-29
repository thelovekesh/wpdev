# wpdev

## Description

This repository contains the development environment for a WordPress project using Lando.

## Setup

1. Clone the repository:
   ```sh
   git clone https://github.com/thelovekesh/wpdev.git
   cd wpdev
   ```

2. Install Lando:
   Follow the instructions on the [Lando website](https://docs.lando.dev/basics/installation.html) to install Lando on your system.

3. Start the Lando environment:
   ```sh
   lando start
   ```

4. Access the WordPress site:
   Open your browser and go to [https://local.thelovekesh.com](https://local.thelovekesh.com).

## Configuration

The configuration files for the Lando environment are located in the `config` directory. These files include:

- `nginx.conf`: Configuration for the Nginx web server.
- `php.ini`: Configuration for PHP.
- `wp-config.php`: Configuration for the WordPress installation.

## Custom Plugins and Themes

The `content` directory contains custom plugins and themes for the WordPress installation. These include:

- `mu-plugins`: Must-use plugins that are automatically enabled.
- `plugins`: Custom plugins for the WordPress site.
- `themes`: Custom themes for the WordPress site.

## Tooling

The Lando environment includes various tools for development, such as:

- `wp`: The WP-CLI command-line tool for managing WordPress installations.
- `npm`: The Node.js package manager.
- `composer`: The PHP package manager.
- `phpunit`: The PHP testing framework.

## Contributing

If you would like to contribute to this project, please follow these steps:

1. Fork the repository.
2. Create a new branch for your feature or bugfix.
3. Make your changes and commit them with a descriptive message.
4. Push your changes to your fork.
5. Create a pull request to the main repository.



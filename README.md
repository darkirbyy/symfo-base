# Symfony Template

Template to quick start any Symfony project.

## Prerequisite

- Back-end:
  - **Symfony**: 7.1 framework
  - **PHP**: >= 8.2 (compatible with Symfony 7.1)
  - **Composer**: >= 2.8 for dependency management
  - **php-cs-fixer**: >= 3 for linting
  - **MariaDB**: 11.5 through docker for the database
- Front-end:
  - **Node.js**: 18.19
  - **npm**: >= 9.2 for dependency management
  - **Sass**: >= 1.82
  - **Webpack Encore**: 5.0
- **git** and **git-flow** for source and version control
- **GitHub** to share and deploy

## Install

After cloning the project:

- Install the dependencies with `composer install` and `npm install`.
- Copy the `.env.dev` file into a `.env.dev.local` file and customize the values.  
- Copy the `.env` file into a `.env.local` file and customize `APP_NAME`.  
:information_source: `DATABASE_URL` is not mandatory for dev environment as Symfony will get the correct values from docker.

Start the web server along with docker and npm server with `symfony server:start`.

To lint all `src` files, run `php-cs-fixer fix`.

To use default git hooks, run `git config core.hooksPath ./githooks`. Current hooks are

- linting all `src` files before commit
- running all unit tests before push

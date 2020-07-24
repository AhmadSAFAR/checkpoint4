## Getting Started

### Prerequisites

1. Check composer is installed
2. Check yarn & node are installed

### Install

1. Clone this project
2. Run `composer install`
3. Run `yarn install`

### Working

1. Run `symfony server:start` to launch your local php web server
2. Run `yarn run dev --watch` to launch your local server for assets
3. Create a .env.local file at the root of the project and change the file to suit your configuration
4. Start declaring your DSN line 31 in the file (.env.local).Then You need to delete the two “#” at the beginning of the line 39 and 40 , then fill up the 2 lines with 2 email adresses.
5. In your browser type / admin and create your account and add events and actors to your (Wild Circus)


### Windows Users

If you develop on Windows, you should edit you git configuration to change your end of line rules with this command :

`git config --global core.autocrlf true`

## Built With

* [Symfony](https://github.com/symfony/symfony)



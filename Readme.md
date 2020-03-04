# Timber Starter

This theme is a minimal WordPress & Timber theme with Gutenberg support.

It NEEDS Advanced Custom Fields.

> **WARNING:** I made this project to suit my needs, yours may differ. Use with caution. Put otherwise, **don't use this projet unless you are me** or you have the exact same needs as me.

### Usage

```sh
cd /wp-content/themes
git clone https://github.com/jverneaut/timber-starter
cd timber-starter
composer install
npm install
npm run start
```

## Deployment

This project use GitHub actions to deploy the theme to a distant server.

The location of this server needs to be set as `DISTANT_THEME_LOCATION` in the repo secrets, ex:

```sh
DISTANT_THEME_LOCATION=<user>@<ip_address>:/var/www/html/wp-content/themes/<theme>
```

The ssh key needed to access the server also needs to be set as `SSH_KEY` in the repo secrets, ex:

```sh
SSH_KEY=blablablarubbish
```

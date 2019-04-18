# The Book Project

A online platform launched in Spain in 2014 to create a collaborative book over the course of one year. Each month, authors from all over the world were able to send in their proposals to continue the narrative, and each time, a winner was chosen based on a 2-week voting phase.

With the support from the [League Of Pragmatic Optimists](http://leagueofpragmaticoptimists.org/), [Bibliocafé](http://www.bibliocafe.es/) and [Ubik Café](http://ubikcafe.blogspot.com/).

The final version of the book has been crowd-funded, printed and published under the name "Un libre de mil manos" through [Pentian](https://pentian.com/) in 2015 and can be purchased on [Amazon](https://www.amazon.com/libro-mil-manos-Spanish/dp/1635030447), [El Corte Inglés](https://www.elcorteingles.es/libros/A28751875-un-libro-a-mil-manos/), [FNAC](https://www.fnac.es/a6189199/Un-libro-a-mil-manos) and others.

## Tech stack

- CakePHP 2.4.1
- SASS
- Grunt

## Prerequisites

- PHP 5.3+
- MySQL 5+

## Setup & Configuration

### Security

In `app/Config/core.php`, replace `Security.salt` and `Security.cipherSeed` with your own, random and secure strings.

### Files and folders

Make sure the temp folder and all of its sub-folders are writable.

`chmod -R 777 app/tmp`

### Configuring the Opauth plugin

For the voting phase (authentication), Facebook, Twitter, Google and LinkedIn need to be configured as follows. For more information, check the documentation of the [Opauth plugin](/app/Plugin/Opauth/README.md) for CakePHP.

In `app/Config/bootstrap.php`, replace the following parameters with your own:

- Facebook: in the array `Opauth.Strategy.Facebook`, replace `app_id` and `app_secret` with your own
- Twitter: in the array `Opauth.Strategy.Twitter`, replace `key` and `secret` with your own
- LinkedIn: in the array `Opauth.Strategy.LinkedIn`, replace `api_key` and `secret_key`
- Google: in the array `Opauth.Strategy.Google`, replace `client_id` and `client_secret`

### Database

1. Create a new MySQL database.

1. Import `db/the-book-project.sql` into it, either using Sequel Pro (or similar), or manually: `mysql -u <username> -p <databasename> < the-book-project.sql`.

1. Replace the following parameters in `app/Config/database.php` with your own: `login`, `password`, `database`.

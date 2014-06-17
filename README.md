Mailcatcher
===========

Enable Mailcatcher for Laravel 4.2.

The purpose of this package is to allow you to use Mailcatcher server for emails sent by Laravel in pretending mode.

Requirements:
* PHP >= 5.4
* [Mailcatcher](http://mailcatcher.me)

## Installing Mailcatcher

All the installation documentation is available at [Mailcatcher](http://mailcatcher.me) website.

Tips:
You are a [Homebrew](http://brew.sh) and don't want to manage `gem` packages ?
You can easily install it with this simple command line :

```sh
brew install brew-gem && brew gem mailcatcher
```

## Package installation

Begin by installing this package through Composer. Edit your project's `composer.json` file to require `lucasmichot/mailcatcher`.

```json
"require-dev": {
  "lucasmichot/mailcatcher": "dev-master"
}
```

Next, update Composer from the Terminal:

```sh
composer update --dev
```

You can achieve these operations with this one-liner command :

```sh
composer require "lucasmichot/mailcatcher:dev-master" --dev
```

Once this operation completes, the final step is to add the service provider. Open `app/config/app.php`, and add a new item to the providers array.

```php
'Lucasmichot\Mailcatcher\MailcatcherServiceProvider',
```

**Note**:

If using Ryan Tablada's [Package Installer](https://github.com/rtablada/package-installer), you can simply install this package, without having to update `app/config/app.php`, by typing :

```sh
php artisan package:install lucasmichot/mailcatcher
```


## TODO
* [ ] Finish documentation
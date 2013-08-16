# Flatstrapper

Flatstrapper is a set of classes that allow you to quickly create Flatstrap style markup. It is based on @patricktalmadge's Bootstrapper package for Twitter Bootstrap.

## Installation

Add the following to your `composer.json` file :

```json
"dyon/flatstrapper": "dev-master"
```

Then register Flatstrapper's service provider with Laravel :

```php
'Dyon\Flatstrapper\FlatstrapperServiceProvider',
```

You can then (if you want to) add the following aliases to your `aliases` array in your `config/app.php` file.

```php
'Alert'          => 'Dyon\\Flatstrapper\\Alert',
'Badge'          => 'Dyon\\Flatstrapper\\Badge',
'Breadcrumb'     => 'Dyon\\Flatstrapper\\Breadcrumb',
'Button'         => 'Dyon\\Flatstrapper\\Button',
'ButtonGroup'    => 'Dyon\\Flatstrapper\\ButtonGroup',
'ButtonToolbar'  => 'Dyon\\Flatstrapper\\ButtonToolbar',
'Carousel'       => 'Dyon\\Flatstrapper\\Carousel',
'DropdownButton' => 'Dyon\\Flatstrapper\\DropdownButton',
'Form'           => 'Dyon\\Flatstrapper\\Form',
'Helpers'        => 'Dyon\\Flatstrapper\\Helpers',
'Icon'           => 'Dyon\\Flatstrapper\\Icon',
'Image'          => 'Dyon\\Flatstrapper\\Image',
'Label'          => 'Dyon\\Flatstrapper\\Label',
'MediaObject'    => 'Dyon\\Flatstrapper\\MediaObject',
'Navbar'         => 'Dyon\\Flatstrapper\\Navbar',
'Navigation'     => 'Dyon\\Flatstrapper\\Navigation',
'Paginator'      => 'Dyon\\Flatstrapper\\Paginator',
'Progress'       => 'Dyon\\Flatstrapper\\Progress',
'Tabbable'       => 'Dyon\\Flatstrapper\\Tabbable',
'Table'          => 'Dyon\\Flatstrapper\\Table',
'Thumbnail'      => 'Dyon\\Flatstrapper\\Thumbnail',
'Typeahead'      => 'Dyon\\Flatstrapper\\Typeahead',
'Typography'     => 'Dyon\\Flatstrapper\\Typography',
```

## Using the included Flatstrap assets

As there is no **Asset** class in Laravel 4, Flatstrapper uses the famous [Basset](http://jasonlewis.me/code/basset) package to manage its assets. In order to use the Flatstrap version included with Flatstrapper, you first need to add Basset's Service Provider and facade to your app file. For this refer to Basset's installation instructions.

Once this is done, publish the package assets to your public folder.

```shell
php artisan asset:publish dyon/flatstrapper
```

And then add the following to your template view file to include the Flatstrap CSS and Javascript.

```php
{{ Basset::show('flatstrapper.css') }}
{{ Basset::show('flatstrapper.js') }}
```

## Documentation

- [Bootstrapper documentation](http://bootstrapper.aws.af.cm) (it's the same for Flatstrapper)
- [Flatstrap documentation](http://www.flatstrap.org/)
- [Flatstrap on Github](https://github.com/littlesparkvt/flatstrap)
- [Twitter Bootstrap documentation](http://twitter.github.com/bootstrap)
- [Twitter Bootstrap on Github](https://github.com/twitter/bootstrap)

# **Laravel Publisher**



This is an extension to Laravel 5 to help implement a publishing workflow that involves multiple roles and multiple stages before publishing.

It's more or less a self serving effort for investigatively.com and there are no guarantees as yet of extending it to meet the disparate publishing requirements that are definitely existing somewhere out there.

With that said, fork and customise at will.

## Dependencies
- [Laravel MongoDB](https://jenssegers.com/projects/laravel-mongodb)
- [Laravel Stapler](https://github.com/CodeSleeve/laravel-stapler)
- ...of course Laravel 5

## Installation
At the moment this package is not yet published to Packagist but is available using composer repositories option.

Your composer.json file 'repositories' section should have the following;

```javascript
"repositories": [
        {
            "type": "vcs",
            "url":  "git@github.com:nandwabee/blog.git"
        }
    ]
```

In the 'require' section add the following;

```javascript
"investigatively/article" : "*"
```

Run ```composer update``` and the code is yours.

### Service Providers and Third Party Manipulation
You will need to update your service provider list in order to complete the install.

This package relies on [Laravel Stapler](https://github.com/CodeSleeve/laravel-stapler) and the relevant installation instructions are available on the [Github page](https://github.com/CodeSleeve/laravel-stapler).

This package relies on [Laravel Mongodb](https://jenssegers.com/projects/laravel-mongodb) and the relevant installation instructions are available on the [project page](https://jenssegers.com/projects/laravel-mongodb).

Remember to add this package's service provider;
```php
Investigatively\Article\ArticleServiceProvider::class
```

## Editorial Workflow
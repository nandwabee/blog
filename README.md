# **Laravel Publisher**



This is an extension to Laravel 5 to help implement a publishing workflow that involves multiple roles and multiple stages before publishing.

It's more or less a self serving effort for investigatively.com and there are no guarantees as yet of extending it to meet the disparate publishing requirements that are definitely existing somewhere out there.

With that said, fork and customise at will.

## Dependencies
The codebase at investigatively.com is built around MongoDB so it is the first storage engine to be supported.

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

Run ```composer update``` and you are set.

## Editorial Workflow
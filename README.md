AsseticAmazonS3Bundle
=====================

Bundle to dump assetic assets to Amazon S3

Installation
---------

Require the package in your composer.json:

```
composer require albertofem/assetic-amazon-s3-bundle dev-master
```

Enable it in your Appkernel:

```php
public function registerBundles()
{
    $bundles = [
        ....
        new \AFM\Bundle\AsseticAmazonS3Bundle\AFMAsseticAmazonS3Bundle(),
    ]
}
```

Configuration
---------

You must provided the following parameters:

```yml
aws_key: ~
aws_secret_key: ~
aws_region: ~
```

Also, you need change the `write_to` parameter to your s3 bucket:

```yml
assetic:
    write_to: s3://my_bucket
```

Usage
----

Just use the normal assets commands but using s3 as the target:

```
php app/console assetic:dump
```

```
php app/console assets:install s3://my-bucket
```

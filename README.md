# Simple Fake Content Generator

With this package you will be able to generate fake content for your website. 
By default, three languages are available: Russian, German and English.

# Usage

The package is very easy to use.

```php
use Reiterus\FakeContent\Data\Russian as DataRus;
use Reiterus\FakeContent\Slug\Russian as SlugRus;
use Reiterus\FakeContent\Fake;
use Reiterus\FakeContent\Helper;

$data = new DataRus();
$slug = new SlugRus();
$helper = new Helper();

$article = new Fake($data, $slug, $helper);

print_r([$article->getTitle()]);
/*
Array
(
    [0] => Использование технологий единую сельское
)
*/

print_r($article->toArray());
/*
Array
(
    [title] => Использование технологий единую сельское
    [description] => Использование технологий единую сельское цифровое...
    [keywords] => использование, технологий, единую, сельское, цифровое, ...
    [content] => Использование технологий единую сельское цифровое. Использование ...
    [slug] => ispolzovanie-tehnologiy-edinuyu-selskoe
    [published] => 2022-07-16 12:05:09
)
*/
```

# Installation
You can install the package in two ways

From packagist.org
```shell
composer require reiterus/fake-content-native
```

From GitHub repository
```json
{
 "repositories": [
  {
   "type": "vcs",
   "url": "https://github.com/reiterus/fake-content-native.git"
  }
 ]
}
```

# License

This library is released under the [MIT license](LICENSE).

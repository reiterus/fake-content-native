# Simple Fake Content Generator

With this package you will be able to generate fake content for your website. 
By default, two languages are available: English and Russian.

# Usage

The package is very easy to use.

```php
use Reiterus\FakeContent\Data\English as DataEng;
use Reiterus\FakeContent\Slug\English as SlugEng;
use Reiterus\FakeContent\Fake;
use Reiterus\FakeContent\Helper;

$data = new DataEng();
$slug = new SlugEng();
$helper = new Helper();

$article = new Fake($data, $slug, $helper);

echo $article->getTitle();
/*
Production England highly two
*/

print_r($article->toArray());
/*
Array
(
  [title] => Production England highly two
  [description] => Intensive production standards livestock. Production...
  [keywords] => production, England, highly, two, intensive, about, ...
  [content] => Intensive England livestock arable today about production. Arable ...
  [slug] => production-england-highly-two
  [published] => 2022-07-17 06:40:55
)
*/

echo $article->toJson();
/*
{
  "title": "Production England highly two",
  "description": "Intensive production standards livestock. Production...",
  "keywords": "production, England, highly, two, intensive, about, ...",
  "content": "Intensive England livestock arable today about production. Arable ...",
  "slug": "production-england-highly-two",
  "published": "2022-07-17 06:40:55"
}
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

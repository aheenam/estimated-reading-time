Estimated Reading Time
===

Calculate the estimated reading time of any given webpage.

Installation
---
You can install the package via composer:

```bash
composer require aheenam/estimated-reading-time
```

Usage
---

The following command returns the rounded number of estimated minutes to read
the given text.

```php
<?php

// text with 400 words
$text = \Faker\Factory::create()->words(400, true);

// returns 2
(new EstimatedReadingTime)
    ->setText($text)
    ->calculateTime();
```

In most of the cases in the web, you do not have a plain text but a HTML fragment, but that does not matter. Internally the tags are stripped away when you use `setText()`

### Set default words per minute

By default the assumption is made that one is able to read 200 words per minute, but you can easily change this config by setting the property `$wordsPerMinute`

```php
<?php

// text with 400 words
$text = \Faker\Factory::create()->words(400, true);

// returns 1
(new EstimatedReadingTime)
    ->setWordsPerMinute(400)
    ->setText($text)
    ->calculateTime();
```

### Get exact time

Another default configuration is that this package returns a rounded number of minutes. You can though get a exact value as well.

```php
<?php

$text = \Faker\Factory::create()->words(650, true);

// returns 3.25
(new EstimatedReadingTime)
    ->exactTime(true)
    ->setText($text)
    ->calculateTime();

// returns 3
(new EstimatedReadingTime)
    ->setText($text)
    ->calculateTime();
```

Changelog
---
Check [CHANGELOG](CHANGELOG.md) for the changelog

Testing
---
To run tests use

    $ composer test

Contributing
---


Security
---
If you discover any security related issues, please email <your@mail.tld> or use the issue tracker of GitHub.

About
---
Aheenam is a small company from NRW, Germany creating custom digital solutions. Visit
[our website](https://aheenam.com) to find out more about us.

License
---
The MIT License (MIT). Please see [License File](LICENSE) for more information.
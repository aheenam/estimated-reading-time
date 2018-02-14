Estimated reading time
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
(new EstimatedReadTime)
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

License
---
The MIT License (MIT). Please see [License File](LICENSE) for more information.
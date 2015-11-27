Installation
===

[![Build Status](https://travis-ci.org/Atriedes/p2bj.svg?branch=master)](https://travis-ci.org/Atriedes/p2bj)

Linux
---

```bash
composer install
vendor/bin/doctrine orm:schema-tool:create
vendor/bin/doctrine orm:generate-proxies
php fixtures.php
```

Windows
---

```bash
"C:/xampp/php/php.exe" composer install
"C:/xampp/php/php.exe" "vendor/bin/doctrine" orm:schema-tool:create
"C:/xampp/php/php.exe" "vendor/bin/doctrine" orm:generate-proxies
```

Start Development Server
===

Linux
---

```bash
php -S localhost:[port] -t public
```

Windows
---

```bash
"C:/xampp/php/php.exe" -S localhost:[port] "C:/xampp/htdocs/p2bj/public/"
```

Run Test
===

Behat
---

```bash
vendor/bin/behat
```

PhpSpec
---

```bash
vendor/bin/phpspec run
```

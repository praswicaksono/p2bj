Installation
===

```bash
composer install
vendor/bin/doctrine orm:schema-tool:create
vendor/bin/doctrine orm:generate-proxies
php fixtures.php
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

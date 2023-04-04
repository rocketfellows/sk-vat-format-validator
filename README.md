# Slovakia vat format validator

![Code Coverage Badge](./badge.svg)

This component provides Slovakia vat number format validator.

Implementation of interface **rocketfellows\CountryVatFormatValidatorInterface\CountryVatFormatValidatorInterface**

Depends on https://github.com/rocketfellows/country-vat-format-validator-interface

## Installation

```shell
composer require rocketfellows/sk-vat-format-validator
```

## Usage example

Valid Slovakia vat number:

```php
$validator = new SKVatFormatValidator();
$validator->isValid('SK1234567890');
$validator->isValid('1234567890');
```

Returns:

```shell
true
true
```

Invalid Slovakia vat number:

```php
$validator = new SKVatFormatValidator();
$validator->isValid('SK12345678900');
$validator->isValid('SK123456789');
$validator->isValid('DE1234567890');
$validator->isValid('12345678900');
$validator->isValid('123456789');
$validator->isValid('');
```

```shell
false
false
false
false
false
false
```

## Contributing

Welcome to pull requests. If there is a major changes, first please open an issue for discussion.

Please make sure to update tests as appropriate.

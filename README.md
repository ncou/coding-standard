# Chiron PHP Coding Standard

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Total Downloads][ico-downloads]][link-downloads]

**Chiron PHP Coding Standard based on PSR-12, Doctrine, and Slevomat Coding Standards**

## Table of Contents

* [Introduction](#introduction)
* [Install](#install)
* [Usage](#basic-usage)
* [Versioning](#versioning)
* [Change Log](#change-log)
* [Contributing](#contributing)
* [Support](#support)
* [Credits](#credits)
* [License](#license)

## Introduction

This library provides the Chiron Coding Standard rules for [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) (`phpcs`). It is inspired by and built upon
the [Doctrine Coding Standard](https://github.com/doctrine/coding-standard) and the [Slevomat Coding Standard](https://github.com/slevomat/coding-standard).

## Install

The only thing you need before getting started is [Composer](https://getcomposer.org).

### Install PHP Coding Standard:

To install the latest version of this library, run the command below:

```bash
$ composer require chiron/coding-standard
```

The latest version of PHP Coding Standard requires PHP 7.1 at least.

## Usage

Just add the default `phpcs.xml.dist` file (it can be found in the root directory) to your project and you are ready to use
the Chiron Coding Standard when running `phpcs`.

## Versioning

This library follows [SemVer](https://semver.org/) with following rules.

Coding Standard document should be considered the source of truth and main object of SemVer.
* `MAJOR` version will be incremented if new rules are added to the document.
* `MINOR` version will be incremented if new sniffs are implemented to check for existing described rules.
* `PATCH` version will be incremented for bug fixing - fixing a bug is considered everything which does not conform to the document - this may even lead to (temporarily) disabling an existing sniff - or part of it, until a better check is available or it is properly fixed.

The implementation of the automatic checks (both custom sniffs and the ruleset.xml file) are not subject to the SemVer and may change over time to accommodate changes in PHP_CodeSniffer and provided default sniffs, which are used also by this standard.

Recommended dependency on this package is on `MINOR` version (e.g. `~1.0.0`), which means effectively:
* No new rules will be added.
* New automatic checks may be added.
* You get fixes for existing automatic checks, or some of them may be disabled, if regressions are found.

## Change Log

Please see [CHANGELOG](CHANGELOG.md) for more information on recent changes.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Support

Please see [SUPPORT](SUPPORT.md) for details.

## Credits

- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see the [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/chiron/coding-standard.svg
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg
[ico-downloads]: https://img.shields.io/packagist/dt/chiron/coding-standard.svg

[link-packagist]: https://packagist.org/packages/chiron/coding-standard
[link-downloads]: https://packagist.org/packages/chiron/coding-standard
[link-contributors]: ../../contributors

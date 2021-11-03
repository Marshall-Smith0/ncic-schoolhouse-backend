# Escola LMS

Laravel Headless LMS REST API.

[![swagger](https://img.shields.io/badge/documentation-swagger-green)](https://escola-lms-api.stage.etd24.pl/api/documentation)
[![API](https://img.shields.io/endpoint?url=https://dashboard.cypress.io/badge/simple/kmx5cw&style=flat&logo=cypress)](https://dashboard.cypress.io/projects/kmx5cw/runs)
[![phpunit](https://github.com/EscolaLMS/API/actions/workflows/phpunit-tests.yml/badge.svg)](https://github.com/EscolaLMS/API/actions/workflows/phpunit-tests.yml)
[![phpunit](https://github.com/EscolaLMS/API/actions/workflows/cypress.yml/badge.svg)](https://github.com/EscolaLMS/API/actions/workflows/cypress.yml)
[![downloads](https://img.shields.io/packagist/dt/escolalms/api)](https://packagist.org/packages/escolalms/api)
[![downloads](https://img.shields.io/packagist/v/escolalms/api)](https://packagist.org/packages/escolalms/api)
[![downloads](https://img.shields.io/packagist/l/escolalms/api)](https://packagist.org/packages/escolalms/api)
[![Maintainability](https://api.codeclimate.com/v1/badges/68b4fbde49bcd465e482/maintainability)](https://codeclimate.com/github/EscolaLMS/API/maintainability)

## Packages

Summary code coverage from all the packages [![cc](https://raw.githubusercontent.com/EscolaLMS/API/cc-badge/tests/cc-badge.svg)](https://github.com/EscolaLMS/API/actions/workflows/phpunit-cc.yml) [![Tests Code Coverage](https://github.com/EscolaLMS/API/actions/workflows/phpunit-cc.yml/badge.svg)](https://github.com/EscolaLMS/API/actions/workflows/phpunit-cc.yml)



- [escolalms/auth](https://packagist.org/packages/escolalms/)
- [escolalms/cart](https://packagist.org/packages/escolalms/)
- [escolalms/categories](https://packagist.org/packages/escolalms/)
- [escolalms/core](https://packagist.org/packages/escolalms/)
- [escolalms/courses](https://packagist.org/packages/escolalms/)
- [escolalms/files](https://packagist.org/packages/escolalms/)
- [escolalms/headless-h5p](https://packagist.org/packages/escolalms/)
- [escolalms/images](https://packagist.org/packages/escolalms/)
- [escolalms/pages](https://packagist.org/packages/escolalms/)
- ["escolalms/payments](https://packagist.org/packages/escolalms/)
- [escolalms/reports](https://packagist.org/packages/escolalms/)
- [escolalms/scorm](https://packagist.org/packages/escolalms/)
- [escolalms/settings](https://packagist.org/packages/escolalms/)
- [escolalms/tags](https://packagist.org/packages/escolalms/)
- [escolalms/video](https://packagist.org/packages/escolalms/)

## Installation

To install defult docker enviroment either clone this repo or use

```bash
composer create-project escolallms/api escola-lms
```

### Postgres (default)

```sh
make init
```

### Mysql

```
make init-mysql
```

## Demo & Credentials

| Role    | Email ID               | Password |
| ------- | ---------------------- | -------- |
| Admin   | admin@escola-lms.com   | secret   |
| Tutor   | tutor@escola-lms.com   | secret   |
| Student | student@escola-lms.com | secret   |

## Demo

[https://escola-lms-api.stage.etd24.pl/api/documentation](https://escola-lms-api.stage.etd24.pl/api/documentation)

This is fully working demo. **Note** that content is regeneraed every day - it's a seeder that is not persistent, every day database and files are cleared and rebuilt from skratch.

## Test

There are hundreds of tests in the packages and they are divided into:

### Integration packages test

Each packge contains their own php integration test this repo runs all of the

To run use `./vendor/bin/phpunit`

### End-to-end tests

[Cypress.io](https://docs.cypress.io/) is running end-to-end tests

To launch those use `yarn && yarn run cypress open`

You can see the results in the [cypress dashboard](https://dashboard.cypress.io/projects/kmx5cw/runs) including video artifacts

## Tasks

See [makefile](makefile) for all availabe devops tasks

- `make test-phpunit`
- `make test-behat`
- `make bash`
- `make composer-update`
- `make swagger-generate`
- `make migrate-fresh`
- `make switch-to-postgres`
- `make switch-to-mysql`
- `make migrate-mysql`
- `make migrate-postgres`
- `make test-phpunit-postgres`
- `make test-behat-postgres`
- `make test-phpunit-mysql`
- `make test-behat-mysql`
- `make init`
- `make init-mysql`
- `make init-postgres`

# IT0049 TFA1 CodeIgniter POS Foundations

This project is a basic four-page Point-of-Sale website developed using CodeIgniter 4.

## Developer

* Name: Kyle Christian Miranda
* Section: TB32

## Pages

* Home
* About
* Customer Accounts
* User Accounts

The Customer Accounts and User Accounts pages use static PHP arrays as temporary data sources. This version does not use a database.

## Requirements

* PHP 8.2 or newer
* Composer
* CodeIgniter 4

## Installation

1. Clone or download this repository.
2. Open a terminal inside the project folder.
3. Install the required dependencies:

```bash
composer install
```

4. Copy the `env` file and rename the copy to `.env`.
5. Set the base URL inside `.env`:

```text
app.baseURL = 'http://localhost:8080/'
```

6. Start the CodeIgniter development server:

```bash
php spark serve
```

7. Open the server address displayed in the terminal. If port `8080` is unavailable and CodeIgniter uses another port, update `app.baseURL` to match the displayed address.

## Routes

* `/` — Home page
* `/about` — About page
* `/customers` — Customer Accounts page
* `/users` — User Accounts page

## Features

* Four working routes and pages
* Navigation links between all pages
* Five sample customer records
* Five sample user or staff records
* Static PHP arrays used as temporary data sources
* HTML tables created using PHP `foreach` loops

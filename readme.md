<img src="https://github.com/user-attachments/assets/a6ae2080-e865-4fde-b41d-5a09964d7de2">

## Introduction

InvoiceShelf is an open-source web & mobile app that helps you track expenses, payments & create professional invoices & estimates.

InvoiceShelf is a fork of [Crater](https://crater.finance) that focuses in stability, updates and new features.

The Web Application is made using Laravel & VueJS while the Mobile Apps are built using React Native.

**NOTE:** The docker image files are moved into a separate repository [InvoiceShelf/docker](https://github.com/InvoiceShelf/docker).

## Launching Crater

Install PHP 8.2 and enable the following extensions:

* fileinfo extension
* exif extension
* sqlite3 extension
* pdo_sqlite extension

Then run the following commands in order:

```bash
yarn
composer update
composer install
cp .env.testing .env
php artisan reset:app --force
yarn dev
php artisan key:generate
php artisan serve
```

User email and password can be found in : `database/seeds/UserTableSeeder.php`

# Table of Contents

- [Table of Contents](#table-of-contents)
  - [Documentation](#documentation)
  - [Download](#download)
  - [Mobile Apps](#mobile-apps)
  - [Discord](#discord)
  - [Roadmap](#roadmap)
  - [Copyright](#copyright)
  - [Translate](#translate)
  - [License](#license)

## Documentation

- [Installation Steps](https://docs.invoiceshelf.com/installation.html)
- [User Guide](https://docs.invoiceshelf.com/)
- [Developer Guide](https://docs.invoiceshelf.com/developer-guide.html)
- [API Documentation](https://api-docs.invoiceshelf.com)

## Download

- [Download Link](https://invoiceshelf.com)

## Mobile Apps

- Andorid - Coming Soon
- IOS - Coming Soon
- [Source](https://github.com/InvoiceShelf/mobile)

## Discord

Join the InvoiceShelf discord server to discuss:
[Invite Link](https://discord.gg/eHXf4zWhsR)

## Roadmap

~~Here's a rough roadmap of things to come (not in any specific order):

- [x] Automatic Update
- [x] Email Configuration
- [x] Installation Wizard
- [x] Address Customisation & Default notes
- [x] Edit Email before Sending Invoice
- [x] Available as a docker image
- [x] Performance Improvements
- [x] Customer View page
- [x] Add and Use Custom Fields on Invoices & Estimates.
- [x] Multiple Companies
- [x] Recurring Invoices
- [x] Customer Portal
- [ ] Accept Payments (Stripe Integration)
- [ ] Improved template system (invoices and estimate)
- [ ] Modules and templates marketplace


## Copyright

- © 2024 IDEOLOGIX MEDIA DOOEL.
- © 2022 Crater Invoice, Inc

**Special thanks to:**

- [Crater](https://crater.finance/)
- [Birkhoff Lee](https://github.com/BirkhoffLee)
- [Akaunting](https://github.com/akaunting/akaunting)
- [MakerLab](https://github.com/MakerLab-Dev)
- [Sebastian Cretu](https://github.com/sebastiancretu)
- [Florian Gareis](https://github.com/TheZoker)

## Translate

Help us translate on https://crowdin.com/project/invoiceshelf

**Thanks to Translation Contributors:**

- [Hassan A. Ba Abdullah (Arabic)](https://github.com/hsnapps)
- [Clément de Louvencourt (French)](https://github.com/PHClement)
- [Robin Delattre (French)](https://github.com/RobinDev)
- [René Loos (Dutch)](https://github.com/Loosie94)
- [Stefan Azarić (Serbian)](https://github.com/azaricstefan)
- [Emmanuel Lampe (German)](https://github.com/rexlManu)
- [edevrob (Latvian)](https://github.com/edevrob)

## License

InvoiceShelf is released under the GNU AFFERO GENERAL PUBLIC LICENSE Version 3.
See [LICENSE](LICENSE) for details.


# Roadmap

* [x] Add ICE
* [x] Add Patent
* [x] Commercial Register
* [x] Fiscal identifier
* [ ] Taxe professionnelle
* [ ] Activité
~~Here's a rough roadmap of things to come (not in any specific order):

- [x] Automatic Update
- [x] Email Configuration
- [x] Installation Wizard
- [x] Address Customisation & Default notes
- [x] Edit Email before Sending Invoice
- [x] Available as a docker image
- [x] Performance Improvements
- [x] Customer View page
- [x] Add and Use Custom Fields on Invoices & Estimates.
- [x] Multiple Companies
- [x] Recurring Invoices
- [x] Customer Portal
- [ ] Accept Payments (Stripe Integration)
- [ ] Improved template system (invoices and estimate)
- [ ] Modules and templates marketplace


## Copyright

- © 2024 IDEOLOGIX MEDIA DOOEL.
- © 2022 Crater Invoice, Inc

**Special thanks to:**

- [Crater](https://crater.finance/)
- [Birkhoff Lee](https://github.com/BirkhoffLee)
- [Akaunting](https://github.com/akaunting/akaunting)
- [MakerLab](https://github.com/MakerLab-Dev)
- [Sebastian Cretu](https://github.com/sebastiancretu)
- [Florian Gareis](https://github.com/TheZoker)

## Translate

Help us translate on https://crowdin.com/project/invoiceshelf

**Thanks to Translation Contributors:**

- [Hassan A. Ba Abdullah (Arabic)](https://github.com/hsnapps)
- [Clément de Louvencourt (French)](https://github.com/PHClement)
- [Robin Delattre (French)](https://github.com/RobinDev)
- [René Loos (Dutch)](https://github.com/Loosie94)
- [Stefan Azarić (Serbian)](https://github.com/azaricstefan)
- [Emmanuel Lampe (German)](https://github.com/rexlManu)
- [edevrob (Latvian)](https://github.com/edevrob)

## License

InvoiceShelf is released under the GNU AFFERO GENERAL PUBLIC LICENSE Version 3.
See [LICENSE](LICENSE) for details.

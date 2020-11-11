
# PHP Email API - Documentation

> Create and manage email addresses in PHP. Send and receive emails and attachments in code and tests.

## Quick links

- [Download PHP Plugin](https://www.github.com/mailslurp/mailslurp-client-php/)
- [GitHub Repository](https://www.github.com/mailslurp/mailslurp-client-php/)
- [Official PHP Library](https://packagist.org/packages/mailslurp/mailslurp-client-php)
- [Full method documentation](./docs/README/)

## Get started

MailSlurp is an email API that let's your create email addresses on demand then send and receive emails in code and tests. **No MailServer is required**.

::: tip
This section describes how to get up and running with the PHP client. To use another language or the REST API see the [developer page](https://www.mailslurp.com/developers/).

See the examples page for [code examples and use with common frameworks](https://www.mailslurp.com/examples/).

See the method documentation for a [list of all functions](./docs/README/).
:::

## Get an API Key

You need a free MailSlurp account to use the service. [Sign up for a free account](https://app.mailslurp.com/sign-up/) first.

Once signed up [login your dashboard](https://app.mailslurp.com/login/). Find your API Key and copy the code. You'll need this to configure the MailSlurp client in PHP.

<figure>

![find-api-key](https://www.mailslurp.com/assets/guides/find-api-key.png)

<caption>Copy your API Key from the <a href="https://app.mailslurp.com">MailSlurp dashboard</a>.</caption>
</figure>

## Add PHP Library

MailSlurp has an official PHP library. There are several ways to install it:

### a) Composer dependency

If you use the [composer package manager](https://getcomposer.org) you can run

```bash
composer require mailslurp/mailslurp-client-php
```

Or add it to your `composer.json` file:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/mailslurp/mailslurp-client-php.git"
    }
  ],
  "require": {
    "mailslurp/mailslurp-client-php": "*@dev"
  }
}
```

Then include the library with the composer autoload convention:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
```

### b) Manual installation

Alternatively you can download the PHP Library and include it in your project's root directory.

<figure>

![php-email-library-github](https://www.mailslurp.com/assets/guides/php-download.png)

<caption>Download the MailSlurp PHP email library<a href="https://app.mailslurp.com">MailSlurp dashboard</a>.</caption>
</figure>

Then include the files so you have access to MailSlurp in your code:

```php
<?php
require_once('/path/to/MailSlurpClient/vendor/autoload.php');
```

## Create an API instance

To call the MailSlurp API you must create an instance of the controller you wish to access. Each instance must be configured with an API Key. See method documentation for a [list of all controllers and methods](./docs).

```php
<?php
// add your API Key to the MailSlurp config
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');

// create controllers to access parts of the MailSlurp API
$inboxController = new MailSlurp\Api\InboxControllerApi($config);
$waitForController = new MailSlurp\Api\WaitForControllerApi($config);
```

## Basic usage

A common use case is to create a new email address, send it an email and then receive the contents:

### Create an email address

To create an email address use the inbox controller to create a new inbox. Inboxes have real email addresses and can send and receive emails and attachments.

```php
// create an email address
$inbox = $inboxController->createInbox();
print_r($inbox->getEmailAddress())
```

### Send an email

To send an email first create an inbox. Then use the `sendEmail` method on the `InboxController` and pass it the sender inbox's ID and email options.

```php
$send_email_options = new \MailSlurp\Models\SendEmailOptions();
// specify to recipients in list form
$send_email_options->setTo(["test@example.com"])
$send_email_options->setSubject("First email")
$send_email_options->setBody("Hello")

// send options from the inbox we created
$inboxController->sendEmail($inbox->getId(), $send_email_options)
```

### Receive an email

You can receive emails in PHP using MailSlurp. First create an inbox then call a `waitFor` method. These methods wait until a new unread email has arrived and return it.

```php
// get an email in the inbox
$timeout = 10000; // wait at most 10 seconds for new email
$unread_only = true; // only count unread emails

$email = $waitForController->waitForLatestEmail($inbox->getId(), $timeout, $unread_only);
print_r($email->getBody())
```

## SDK Documentation

For more functions and examples [read the library documentation](./docs).

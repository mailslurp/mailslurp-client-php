# PHP Email and SMS API - Documentation

Create and manage email addresses and phone numbers in PHP. Send and receive emails, attachments, and SMS in code and tests. Here is a quick example:

```php
// configure mailslurp/mailslurp-client-php library
$config = MailSlurp\Configuration::getDefaultConfiguration()
    ->setApiKey('x-api-key', getenv("API_KEY"));
$inboxController = new MailSlurp\Apis\InboxControllerApi(null, $config);
// create an inbox
$inbox = $inboxController->createInboxWithDefaults();
// send an email
$sendOptions = new MailSlurp\Models\SendEmailOptions();
$sendOptions->setTo([$inbox->getEmailAddress()]);
$sendOptions->setSubject("Test");
$sendOptions->setBody("Hello");
$inboxController->sendEmail($inbox->getId(), $sendOptions);
// receive the email
$waitForController = new MailSlurp\Apis\WaitForControllerApi(null, $config);
$email = $waitForController->waitForLatestEmail($inbox->getId(), 120000, true);
$this->assertNotNull($email->getBody());
```

## Video tutorial

[![PHP mailslurp tutorial](https://www.mailslurp.com/video-thumbnails/php-tutorial.jpeg)](https://youtu.be/-gVB7WvHvfw)

## Quick links

- [API documentation](https://docs.mailslurp.com/api/)
- [Download PHP Plugin](https://www.github.com/mailslurp/mailslurp-client-php/)
- [GitHub Repository](https://www.github.com/mailslurp/mailslurp-client-php/)
- [Official PHP Library](https://packagist.org/packages/mailslurp/mailslurp-client-php)
- [Full method documentation](https://php.mailslurp.com/)

## Examples

- [Laravel Mailable/Notification setup](https://www.mailslurp.com/guides/send-email-laravel-mailable-notifications/)
- [PHP Codeception Selenium Example](https://www.mailslurp.com/examples/php-test-email-api-codeception/)
- [PHPUnit Example](https://www.mailslurp.com/examples/phpunit-email-testing/)
- [PHP send email with SMTP](https://www.mailslurp.com/smtp/php-send-email-smtp/)

## Get started

MailSlurp is an email API that lets you create email addresses on demand then send and receive emails in code and tests. **No MailServer is required**.

This section describes how to get up and running with the PHP client. To use another language or the REST API see the [developer page](https://www.mailslurp.com/developers/).

See the examples page for [code examples and use with common frameworks](https://www.mailslurp.com/examples/).

See the method documentation for a [list of all functions](https://php.mailslurp.com/).

## Get an API Key

You need a free MailSlurp account to use the service. [Sign up for a free account](https://app.mailslurp.com/sign-up/) first.

Once signed up [login your dashboard](https://app.mailslurp.com/login/). Find your API Key and copy the code. You'll need this to configure the MailSlurp client in PHP.

![find-api-key](https://www.mailslurp.com/assets/guides/find-api-key.png)

Copy your API Key from the [MailSlurp dashboard](https://app.mailslurp.com).

## PHP Setup

The client is tested for PHP 7 and requires the following non-default PHP extensions to be installed:

```bash
php-ext-curl
php-xml
php-mbstring
```

Typically, these come with most PHP installations. On Linux they can also be installed like so:

`sudo apt-get install php-ext-curl php-mbstring php-xml`

## Add PHP Library

There are several ways to install MailSlurp.

### a) Composer dependency

If you use the [composer package manager](https://getcomposer.org) you can run:

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
// assuming your file is in root directory and a vendor folder exists next to it
require_once(__DIR__ . '/vendor/autoload.php');
```

### b) Manual installation

Alternatively you can download the PHP Library and include it in your project's root directory.

<figure>

![php-email-library-github](https://www.mailslurp.com/assets/guides/php-download.png)

<caption>Download the MailSlurp PHP email library<a href="https://app.mailslurp.com">MailSlurp dashboard</a>.</caption>
</figure>

Then include the files to have access to MailSlurp in your code:

```php
<?php
require_once('/path/to/MailSlurpClient/vendor/autoload.php');
```

## Create an API instance

To call the MailSlurp API you must create an instance of the controller you wish to access. Each instance must be configured with an API Key. See method documentation for a [list of all controllers and methods](https://php.mailslurp.com/).

### Configure the API Key

```php
private function getConfig()
{
    // create a mailslurp configuration with API_KEY environment variable
    // get your own free API KEY at https://app.mailslurp.com/sign-up/
    return MailSlurp\Configuration::getDefaultConfiguration()
        ->setApiKey('x-api-key', getenv("API_KEY"));
}
```

### Create a controller

```php
$inboxController = new MailSlurp\Apis\InboxControllerApi(null, $this->getConfig());
```

## Basic usage

A common use case is to create a new email address, send it an email and then receive the contents:

### Create an email address

To create an email address use the inbox controller to create a new inbox. Inboxes have real email addresses and can send and receive emails and attachments.

```php
$options = new \MailSlurp\Models\CreateInboxDto();
$options->setName("Test inbox");
$options->setPrefix("test");
$inbox = $inboxController->createInboxWithOptions($options);
```

### Send an email
Here is a simple example of sending an email:

```php
$send_options = new MailSlurp\Models\SendEmailOptions();
$send_options->setTo([$inbox->getEmailAddress()]);
$send_options->setSubject("Test");
$send_options->setBody("Confirmation code = abc123");
$inbox_controller->sendEmail($inbox_2->getId(), $send_options);
```

### Read an email
You can use the WaitFor controller methods to wait for an expected email to arrive in an inbox:

```php
$wait_for_controller = new MailSlurp\Apis\WaitForControllerApi(null, $this->getConfig());
```

Then call it like so:

```php
$timeout_ms = 30000;
$unread_only = true;
$email = $wait_for_controller->waitForLatestEmail($inbox->getId(), $timeout_ms, $unread_only);
```

### Fetch emails
You can get emails from an inbox using the inbox controller:



You can also fetch in paginated form:



### Get an email
Get an email directly by ID using the email controller:

```php
s
        $emails = $inbox_controller->getEmails($inbox->getId());
        
```

### SMTP access (PHPMailer, mail function etc.)
SMTP inboxes provide IMAP and SMTP access credentials via the `getImapSmtpAccess` function. Use these to configure PHPMailer, PearMailer or other SMTP sending clients. First create an `SMTP_INBOX`:

```php
$options = new \MailSlurp\Models\CreateInboxDto();
$options->setInboxType("SMTP_INBOX");
$inbox_smtp = $inboxController->createInboxWithOptions($options);
```

Then use the access settings to configure PHPMailer:

```php
$access_details = $inboxController->getImapSmtpAccess($inbox_smtp->getId());
$mail = new PHPMailer\PHPMailer\PHPMailer(true);
// set mail server settings using the inbox access details
$mail->isSMTP();
$mail->Host       = $access_details->getSecureSmtpServerHost();
$mail->SMTPAuth   = true;
$mail->Username   = $access_details->getSecureSmtpUsername();
$mail->Password   = $access_details->getSecureSmtpPassword();
$mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port       = $access_details->getSecureSmtpServerPort();
```

### List inboxes

Inbox lists are paginated.

```php
<?php
public function test_canListInboxes(): void
{
    // create an inbox controller with config
    $inboxController = new MailSlurp\Apis\InboxControllerApi(null, $this->config);

    $pageInboxes = $inboxController->getAllInboxes($favourite = null, $page = 0, $size = 20);

    // assert pagination properties
    $this->assertEquals(0, $pageInboxes->getNumber());
    $this->assertEquals(20, $pageInboxes->getSize());
    $this->assertGreaterThan(0, $pageInboxes->getTotalElements());

    // access inboxes via content
    foreach ($pageInboxes->getContent() as $inbox) {
        $this->assertNotNull($inbox->getId());
    }
}
```

### Send an email with more options

To send an email first create an inbox. Then use the `sendEmail` method on the `InboxController` and pass it the sender inbox's ID and email options.

```php
<?php
public function test_canSendEmail(): void
{
    // create a new inbox
    $inboxController = new MailSlurp\Apis\InboxControllerApi(null, $this->config);
    $inbox = $inboxController->createInbox();

    // send options
    $sendOptions = new MailSlurp\Models\SendEmailOptions();
    $sendOptions->setTo([$inbox->getEmailAddress()]);
    $sendOptions->setSubject("Welcome");
    $sendOptions->setIsHtml(true);
    // (you can use normal strings too)
    $sendOptions->setBody(<<<EOF
        <html>
            <h1>MailSlurp supports HTML</h1>
        </html>
    EOF);

    // send
    $inboxController->sendEmail($inbox->getId(), $sendOptions);
}
```

### Attachments

Using attachments in PHP is easy. For sending attachments you must first upload each file and store the returned attachment IDs.
For sending use these IDs with `SendEmailOptions`. Received email attachments can be downloaded using the `EmailControllerApi`.

```php
<?php
private function uploadAttachment(): array
{
    // a path to some file you want to attach
    $pathToAttachment = $this->pathToAttachment;

    // read file contents
    $contents = file_get_contents($pathToAttachment);

    // encode the file contents to a base64 encoded string for uploading
    $base64Contents = base64_encode($contents);

    // extract file name from path
    $filename = basename($pathToAttachment);
    
    // get the mime type from the file name
    $contentType =  mime_content_type($filename);

    // set upload options
    $uploadOptions = new MailSlurp\Models\UploadAttachmentOptions();
    $uploadOptions->setFilename($filename);
    $uploadOptions->setContentType($contentType);
    $uploadOptions->setBase64Contents($base64Contents);

    // now upload using attachment controller
    $attachmentController = new MailSlurp\Apis\AttachmentControllerApi(null, $this->config);

    // returns [$attachmentId]
    return $attachmentController->uploadAttachment($uploadOptions);
}
```

To send the attachments use like so:

```php
<?php
$attachmentIds = $this->uploadAttachment();

// send options with attachments
$sendOptions = new MailSlurp\Models\SendEmailOptions();
$sendOptions->setTo([$inbox->getEmailAddress()]);
$sendOptions->setSubject("See attached!");
$sendOptions->setAttachments($attachmentIds);

$inboxController->sendEmail($inbox->getId(), $sendOptions);
```

### Receive an email

You can receive emails in PHP using MailSlurp. First create an inbox then call a `waitFor` method. These methods wait until a new unread email has arrived and return it.

```php
<?php
// get an email in the inbox
$timeout_millis = 10000; // wait at most 10 seconds for new email
$unread_only = true; // only count unread emails

$email = $waitForController->waitForLatestEmail($inbox->getId(), $timeout_millis, $unread_only);

// access email content and properties
print_r($email->getBody())
print_r($email->getSubject())
```

Larger example:

```php
<?php
// create inbox to send from
$inboxController = new MailSlurp\Apis\InboxControllerApi(null, $this->config);

$inbox1= $inboxController->createInbox();
$inbox2 = $inboxController->createInbox();

// send options
$sendOptions = new MailSlurp\Models\SendEmailOptions();
$sendOptions->setTo([$inbox2->getEmailAddress()]);
$sendOptions->setSubject("Here are your files");
$sendOptions->setBody("Hello <strong>JOE</strong>");
$sendOptions->setIsHtml(true);

// send email from inbox 1 to inbox 2 using options above
$inboxController->sendEmail($inbox1->getId(), $sendOptions);

// wait for email to arrive in inbox 2
$waitForController = new MailSlurp\Apis\WaitForControllerApi(null, $this->config);
$email = $waitForController->waitForLatestEmail($inbox_id=$inbox2->getId(), $timeout=30000);

// access email contents
$this->assertEquals($email->getInboxId(), $inbox2->getId());
$this->assertStringContainsString("Here are your files", $email->getSubject());
```

### Receive attachment

Test example:

```php
<?php
$emailAttachmentId1 = $email->getAttachments()[0];

// download an attachment as base 64 encoded string
$emailController = new MailSlurp\Apis\EmailControllerApi(null, $this->config);
$downloadedAttachment = $emailController->downloadAttachmentBase64($emailAttachmentId1, $email->getId());

$this->assertGreaterThan(0, $downloadedAttachment->getSizeBytes());
$this->assertEquals("text/plain", $downloadedAttachment->getContentType());

// decode file contents
$content = base64_decode($downloadedAttachment->getBase64FileContents());
$this->assertStringContainsString("Sample upload file", $content);
```

### Extract email content

You can use regex to parse codes or statements for email bodies like so:

```php
$matches = array();
preg_match('/.+code = (.+)/', $email->getBody(), $matches);
$confirmation_code = $matches[1];
$this->assertEquals($confirmation_code, "abc123");
```

## SDK Documentation

For more functions and examples [read the library documentation](https://php.mailslurp.com/) or see the [PHP guides](https://www.mailslurp.com/tags/php).

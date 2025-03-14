<?php
/**
 * EmailControllerApiTest
 * PHP version 7.4
 *
 * @category Class
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * MailSlurp API
 *
 * MailSlurp is an API for sending and receiving emails and SMS from dynamically allocated email addresses and phone numbers. It's designed for developers and QA teams to test applications, process inbound emails, send templated notifications, attachments, and more.  ## Resources  - [Homepage](https://www.mailslurp.com) - Get an [API KEY](https://app.mailslurp.com/sign-up/) - Generated [SDK Clients](https://docs.mailslurp.com/) - [Examples](https://github.com/mailslurp/examples) repository
 *
 * The version of the OpenAPI document: 6.5.2
 * Contact: contact@mailslurp.dev
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the endpoint.
 */

namespace MailSlurp\Test\Api;

use \MailSlurp\Configuration;
use \MailSlurp\ApiException;
use \MailSlurp\ObjectSerializer;
use PHPUnit\Framework\TestCase;

/**
 * EmailControllerApiTest Class Doc Comment
 *
 * @category Class
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EmailControllerApiTest extends TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test case for applyImapFlagOperation
     *
     * Set IMAP flags associated with a message. Only supports '\\Seen' flag..
     *
     */
    public function testApplyImapFlagOperation()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for canSend
     *
     * Check if email can be sent and options are valid..
     *
     */
    public function testCanSend()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for checkEmailBody
     *
     * Detect broken links, spelling, and images in email content.
     *
     */
    public function testCheckEmailBody()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for checkEmailBodyFeatureSupport
     *
     * Show which mail clients support the HTML and CSS features used in an email body..
     *
     */
    public function testCheckEmailBodyFeatureSupport()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for checkEmailClientSupport
     *
     * Show which email programs and devices support the features used in an email body..
     *
     */
    public function testCheckEmailClientSupport()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for deleteAllEmails
     *
     * Delete all emails in all inboxes..
     *
     */
    public function testDeleteAllEmails()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for deleteEmail
     *
     * Delete an email.
     *
     */
    public function testDeleteEmail()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for downloadAttachment
     *
     * Get email attachment bytes. Returned as `octet-stream` with content type header. If you have trouble with byte responses try the `downloadAttachmentBase64` response endpoints and convert the base 64 encoded content to a file or string..
     *
     */
    public function testDownloadAttachment()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for downloadAttachmentBase64
     *
     * Get email attachment as base64 encoded string as an alternative to binary responses. Decode the `base64FileContents` as a `utf-8` encoded string or array of bytes depending on the `contentType`..
     *
     */
    public function testDownloadAttachmentBase64()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for downloadBody
     *
     * Get email body as string. Returned as `plain/text` with content type header..
     *
     */
    public function testDownloadBody()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for downloadBodyBytes
     *
     * Get email body in bytes. Returned as `octet-stream` with content type header..
     *
     */
    public function testDownloadBodyBytes()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for forwardEmail
     *
     * Forward email to recipients.
     *
     */
    public function testForwardEmail()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for getAttachmentMetaData
     *
     * Get email attachment metadata. This is the `contentType` and `contentLength` of an attachment. To get the individual attachments  use the `downloadAttachment` methods..
     *
     */
    public function testGetAttachmentMetaData()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for getEmail
     *
     * Get email content including headers and body. Expects email to exist by ID. For emails that may not have arrived yet use the WaitForController..
     *
     */
    public function testGetEmail()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for getEmailAttachments
     *
     * Get all email attachment metadata. Metadata includes name and size of attachments..
     *
     */
    public function testGetEmailAttachments()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for getEmailContentMatch
     *
     * Get email content regex pattern match results. Runs regex against email body and returns match groups..
     *
     */
    public function testGetEmailContentMatch()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for getEmailContentPart
     *
     * Get email content part by content type.
     *
     */
    public function testGetEmailContentPart()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for getEmailContentPartContent
     *
     * Get email content part by content type raw response.
     *
     */
    public function testGetEmailContentPartContent()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for getEmailCount
     *
     * Get email count.
     *
     */
    public function testGetEmailCount()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for getEmailHTML
     *
     * Get email content as HTML. For displaying emails in browser context..
     *
     */
    public function testGetEmailHTML()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for getEmailHTMLJson
     *
     * Get email content as HTML in JSON wrapper. For fetching entity decoded HTML content.
     *
     */
    public function testGetEmailHTMLJson()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for getEmailHTMLQuery
     *
     * Parse and return text from an email, stripping HTML and decoding encoded characters.
     *
     */
    public function testGetEmailHTMLQuery()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for getEmailLinks
     *
     * Parse and return list of links found in an email (only works for HTML content).
     *
     */
    public function testGetEmailLinks()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for getEmailPreviewURLs
     *
     * Get email URLs for viewing in browser or downloading.
     *
     */
    public function testGetEmailPreviewURLs()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for getEmailScreenshotAsBase64
     *
     * Take a screenshot of an email in a browser and return base64 encoded string.
     *
     */
    public function testGetEmailScreenshotAsBase64()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for getEmailScreenshotAsBinary
     *
     * Take a screenshot of an email in a browser.
     *
     */
    public function testGetEmailScreenshotAsBinary()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for getEmailSummary
     *
     * Get email data including headers but not body. Expects email to exist by ID. For emails that may not have arrived yet use the WaitForController..
     *
     */
    public function testGetEmailSummary()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for getEmailTextLines
     *
     * Parse and return text from an email, stripping HTML and decoding encoded characters.
     *
     */
    public function testGetEmailTextLines()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for getEmailThread
     *
     * Return email thread information. Use items endpoints to get messages for thread..
     *
     */
    public function testGetEmailThread()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for getEmailThreadItems
     *
     * Return email thread items..
     *
     */
    public function testGetEmailThreadItems()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for getEmailThreads
     *
     * Return email threads in paginated form.
     *
     */
    public function testGetEmailThreads()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for getEmailsOffsetPaginated
     *
     * Get all emails in all inboxes in paginated form. Email API list all..
     *
     */
    public function testGetEmailsOffsetPaginated()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for getEmailsPaginated
     *
     * Get all emails in all inboxes in paginated form. Email API list all..
     *
     */
    public function testGetEmailsPaginated()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for getGravatarUrlForEmailAddress
     *
     * .
     *
     */
    public function testGetGravatarUrlForEmailAddress()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for getLatestEmail
     *
     * Get latest email in all inboxes. Most recently received..
     *
     */
    public function testGetLatestEmail()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for getLatestEmailInInbox1
     *
     * Get latest email in an inbox. Use `WaitForController` to get emails that may not have arrived yet..
     *
     */
    public function testGetLatestEmailInInbox1()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for getOrganizationEmailsPaginated
     *
     * Get all organization emails. List team or shared test email accounts.
     *
     */
    public function testGetOrganizationEmailsPaginated()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for getRawEmailContents
     *
     * Get raw email string. Returns unparsed raw SMTP message with headers and body..
     *
     */
    public function testGetRawEmailContents()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for getRawEmailJson
     *
     * Get raw email in JSON. Unparsed SMTP message in JSON wrapper format..
     *
     */
    public function testGetRawEmailJson()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for getUnreadEmailCount
     *
     * Get unread email count.
     *
     */
    public function testGetUnreadEmailCount()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for markAllAsRead
     *
     * Mark all emails as read or unread.
     *
     */
    public function testMarkAllAsRead()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for markAsRead
     *
     * Mark an email as read or unread.
     *
     */
    public function testMarkAsRead()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for replyToEmail
     *
     * Reply to an email.
     *
     */
    public function testReplyToEmail()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for searchEmails
     *
     * Get all emails by search criteria. Return in paginated form..
     *
     */
    public function testSearchEmails()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for sendEmailSourceOptional
     *
     * Send email.
     *
     */
    public function testSendEmailSourceOptional()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for setEmailFavourited
     *
     * Set email favourited state.
     *
     */
    public function testSetEmailFavourited()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for validateEmail
     *
     * Validate email HTML contents.
     *
     */
    public function testValidateEmail()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }
}

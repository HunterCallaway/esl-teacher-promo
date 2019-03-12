<?php
/**
 * mail-config.php
 * This file contains your reCAPTCHA API keys and your recipient's email addresses.
 *
 * @param string $siteKey your public reCAPTCHA API key
 * @param string $secret your secret reCAPTCHA API key
 * @param array $MAIL_RECIPIENTS array of email addresses and corresponding recipient names to send form responses to
 *
 * @author Hunter Callaway <jcallaway3@cnm.edu>
 *
 * This file contains sensitive information and should ALWAYS be gitignored!
 **/

//the SendGrid SMTP authorization$smtpUser = '-- SendGrid USER --';
$smtpSecret = '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';

// your Google reCAPTCHA keys here
$siteKey = '6Le8BJYUAAAAAKXL3-K68hncIjtWylDwKwDqOoEI';
$secret = '6Le8BJYUAAAAAG0cNJfOOKd6KFHzl_L-8e2NWcjc';

/**
 * attach the recipients to the message
 * notice this an array that can include or omit the the recipient's real name
 * use the recipients' real name where possible; this reduces the probability of the Email being marked as spam
 **/
$MAIL_RECIPIENTS = ["john.hunter.callaway@gmail.com", "Hunter Callaway"];
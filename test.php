<?php
require_once(__DIR__ . '/autoload.php');

$api_instance = new NotifyLk\Api\SmsApi();
$user_id = "27836"; // string | API User ID - Can be found in your settings page.
$api_key = "uNORbkxXbGzfcXByZ4w9"; // string | API Key - Can be found in your settings page.
$message = "Hey Prabath Thalangama, your tickets are ready to go!

This email is sent as a confirmation of your order #e56259e843ffbd7 placed on Tue 27 Aug 2024, 8:11 PM

TICKETS
NEWS - ADHIMATHRA	x2	Rs40
Date: Fri 30 Aug 2024, 5:30 PM
Venue: Longbar

-EventHub.lk team"; // string | Text of the message. 320 chars max.

$to = "94710564090"; // string | Number to send the SMS. Better to use 9471XXXXXXX format.
$sender_id = "NotifyDEMO"; // string | This is the from name recipient will see as the sender of the SMS. Use \\\"NotifyDemo\\\" if you have not ordered your own sender ID yet.
$contact_group = 0; // int | A group ID to associate the saving contact with

try {
    $api_instance->sendSMS($user_id, $api_key, $message, $to, $sender_id, $contact_group);
} catch (Exception $e) {
    echo 'Exception when calling SmsApi->sendSMS: ', $e->getMessage(), PHP_EOL;
}
?>

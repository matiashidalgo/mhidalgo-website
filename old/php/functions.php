<?php
/**
 * Created for  mhidalgo.
 *
 * @author      :     mhidalgo@summasolutions.net
 *              Date:        26/10/15
 *              Time:        14:58
 * @copyright   Copyright (c) 2015 Summa Solutions (http://www.summasolutions.net)
 */
require_once('mail/Mandrill.php');

/**
 * Function to get Years passed from a date = array( 'day' => x , 'month' => x , 'year' => x )
 * @param $date
 *
 * @return int
 */
function calculateYears($date)
{
    $yearPassed = 0;
    if ((int)date("n") < $date['month']) {
        if ((int)date("n") == $date['month'] && (int)date("j") >= $date['day']){
            $yearPassed = (int)date("Y") - $date['year'];
        } else {
            $yearPassed = (int)date("Y") - $date['year'] - 1;
        }
    } else {
        $yearPassed = (int)date("Y") - $date['year'];
    }
    return $yearPassed;
}

/**
 * Function to send emails behind Mandrill
 * @param $mailData
 *
 * @return array|Exception|Mandrill_Error
 */
function sendEmail($mailData)
{
    try {
        $mandrill = new Mandrill($mailData['mandrill_key']);
        $message = array(
            'html' => $mailData['html_content'],
            /*'text' => $mailData['text_content'],*/
            'subject' => $mailData['subject'],
            'from_email' => $mailData['from_email'],
            'from_name' => $mailData['from_name'],
            'to' => $mailData['to_list']
            /*array(
                array(
                    'email' => 'recipient.email@example.com',
                    'name' => 'Recipient Name',
                    'type' => 'to'
                )
            )*/,
            'headers' => $mailData['headers']
            /*array('Reply-To' => 'message.reply@example.com')*/,
            'important' => false,
            'track_opens' => null,
            'track_clicks' => null,
            'auto_text' => null,
            'auto_html' => null,
            'inline_css' => null,
            'url_strip_qs' => null,
            'preserve_recipients' => null,
            'view_content_link' => null,
            'bcc_address' => null/*'message.bcc_address@example.com'*/,
            'tracking_domain' => null,
            'signing_domain' => null,
            'return_path_domain' => null,
            'merge' => false,
            'merge_language' => null/*'mailchimp'*/,
            'global_merge_vars' => array(
                /*array(
                    'name' => 'merge1',
                    'content' => 'merge1 content'
                )*/
            ),
            'merge_vars' => array(
                /*array(
                    'rcpt' => 'recipient.email@example.com',
                    'vars' => array(
                        array(
                            'name' => 'merge2',
                            'content' => 'merge2 content'
                        )
                    )
                )*/
            ),
            'tags' => array()/*array('password-resets')*/,
            'subaccount' => null/*'customer-123'*/,
            'google_analytics_domains' => array('mhidalgo.xyz'),
            'google_analytics_campaign' => null/*'message.from_email@example.com'*/,
            'metadata' => array('website' => 'www.mhidalgo.xyz'),
            /*'recipient_metadata' => array(
                array(
                    'rcpt' => 'recipient.email@example.com',
                    'values' => array('user_id' => 123456)
                )
            ),*/
            /*'attachments' => array(
                array(
                    'type' => 'text/plain',
                    'name' => 'myfile.txt',
                    'content' => 'ZXhhbXBsZSBmaWxl'
                )
            ),*/
            /*'images' => array(
                array(
                    'type' => 'image/png',
                    'name' => 'IMAGECID',
                    'content' => 'ZXhhbXBsZSBmaWxl'
                )
            )*/
        );
        $async = false;
        $ip_pool = null/*'Main Pool'*/;
        $send_at = null/*'example send_at'*/;
        $result = $mandrill->messages->send($message, $async, $ip_pool, $send_at);
        /*
        Array
        (
            [0] => Array
                (
                    [email] => recipient.email@example.com
                    [status] => sent
                    [reject_reason] => hard-bounce
                    [_id] => abc123abc123abc123abc123abc123
                )

        )
        */
        return $result;
    } catch(Mandrill_Error $e) {
        // Mandrill errors are thrown as exceptions
        //echo 'A mandrill error occurred: ' . get_class($e) . ' - ' . $e->getMessage();
        // A mandrill error occurred: Mandrill_Unknown_Subaccount - No subaccount exists with the id 'customer-123'
        //throw $e;
        return $e;
    }
}

/**
 * Function to sanitize data from forms
 * @param        $data
 * @param string $type
 *
 * @return mixed
 */
function sanitize($data,$type = 'string')
{
    switch($type) {
        case 'email':
            $data = filter_var($data,FILTER_SANITIZE_EMAIL);
            break;
        case 'url':
            $data = filter_var($data,FILTER_SANITIZE_URL);
            break;
        case 'html':
            $data = htmlspecialchars($data, ENT_QUOTES, 'utf-8');
            break;
        case 'text':
            $data = filter_var($data,FILTER_SANITIZE_STRING);
            $data = nl2br($data);
            break;
        case 'number':
            $data = filter_var($data,FILTER_SANITIZE_NUMBER_INT);
            break;
        case 'float':
            $data = filter_var($data,FILTER_SANITIZE_NUMBER_FLOAT);
            break;
        case 'string':
        default:
            $data = filter_var($data,FILTER_SANITIZE_STRING);
            break;
    }
    return trim($data);
}
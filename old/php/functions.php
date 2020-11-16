<?php
/**
 * Created for  mhidalgo.
 *
 * @author      :     mhidalgo@summasolutions.net
 *              Date:        26/10/15
 *              Time:        14:58
 * @copyright   Copyright (c) 2015 Summa Solutions (http://www.summasolutions.net)
 */
//require_once('mail/Mandrill.php');

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
    mail($mailData['to_list']['email'],$mailData['subject'],$mailData['html_content']);
    return array(array('status' => 'sent'));
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

function parseTags($tags)
{
    $oldTags = explode(',',$tags);
    $tags = array();
    foreach ($oldTags as $index => $tag) {
        $tags[strtolower(str_replace('.','',str_replace(' ','-',trim($tag))))] = str_replace('.','',trim($tag));
    }
    return $tags;
}

function getAllTags($profile,$lang)
{
    $tags = array();
    foreach ($profile['portfolio'] as $portfolio) {
        $tags = array_unique(array_merge($tags,parseTags($portfolio[$lang]['technologies'])));
    }
    return $tags;
}
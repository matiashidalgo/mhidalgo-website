<?php
require_once('php/functions.php');

    if ($_POST["name"] &&
        $_POST["website"] &&
        $_POST["email"] &&
        $_POST["comment"] &&
        preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$_POST["email"])
    ) {

        $website = ($_POST["website"] == "WebSite" && !filter_var(sanitize($_POST["website"],'url'), FILTER_VALIDATE_URL)) ? false : sanitize($_POST["website"],'url');
        $toEmail = 'me@mhidalgo.xyz';
        $message = '';
        $subject = '';
        if($website) {
            $subject = 'Contacto en mhidalgo.xyz de '.sanitize($_POST["name"],'string').' del website '.$website;
            $message = sanitize($_POST["comment"],'html') . " Enviado por ".sanitize($_POST["name"],'string')." del sitio web ".$website;
        } else {
            $subject = 'Contacto en mhidalgo.xyz de '.sanitize($_POST["name"],'string');
            $message = sanitize($_POST["comment"],'html') . " Enviado por ".sanitize($_POST["name"],'string');
        }

        $mailData = array(
            'mandrill_key'  => 'CrrPFJi_FLu7zaBhdZlsVA',
            'html_content'  => $message,
            'subject'       => $subject,
            'from_email'    => sanitize($_POST['email'],'email'),
            'from_name'     => sanitize($_POST["name"],'string'),
            'to_list'       =>
                array(
                    array(
                        'email' => $toEmail,
                        'name' => 'Matias Hidalgo',
                        'type' => 'to'
                    )
                ),
            'headers'       =>
                array('Reply-To' => 'me@mhidalgo.xyz'),
        );

        $results = sendEmail($mailData);
        if (!$results instanceof Mandrill_Error) {
            $resultGeneral = '';
            $resultStatus = array();
            foreach($results as $result) {
                $sent = false;
                switch($result['status'])
                {
                    case 'sent':
                        $sent = true;
                        break;
                    case 'queued':
                        $sent = true;
                        break;
                    case 'scheduled':
                        $sent = true;
                        break;
                    case 'rejected':
                        $sent = false;
                        break;
                    case 'invalid':
                        $sent = false;
                        break;
                }

                if ($resultGeneral == '') {
                    if ($sent) {
                        $resultGeneral = 'OK';
                    } else {
                        $resultGeneral = 'ERROR';
                        $resultStatus[] = $result['status'];
                    }
                } else {
                    if (!$sent && $resultGeneral == 'OK') {
                        $resultGeneral = 'ERROR';
                        $resultStatus[] = $result['status'];
                    }
                }
            }
        } else {
            $resultGeneral = 'ERROR';
            $resultStatus = array($results->getMessage());
        }
        echo ($resultGeneral != 'OK')? $resultGeneral . ': ' . implode(', ',$resultStatus) : $resultGeneral;
    } else {
        echo "VALIDATION-NON-PASSED";
    }

?>
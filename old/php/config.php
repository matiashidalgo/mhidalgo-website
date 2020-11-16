<?php
/**
 * Created for  mhidalgo.
 * @author:     me@mhidalgo.tk
 * @copyright   Copyright (c) 2017 Matias Hidalgo (http://www.mhidalgo.tk)
 */
require_once('functions.php');
if (!isset($_GET['lang'])) {
    $lang = 'es';
    require_once('i18n/es.php');
} else {
    switch ($_GET['lang']) {
        case 'en':
            require_once('i18n/en.php');
            $lang = 'en';
            break;
        case 'es':
        default:
            require_once('i18n/es.php');
            $lang = 'es';
            break;
    }
}
$yearExperience = calculateYears(array('day' => 1, 'month' => 1, 'year' => 2008));
$keywords = 'magento, magento 2, magento 2 solution specialist, magento 2 order management, e-commerce, php, web developer, web, developer, desarrollador, programación, programador, HTML, HTML5, CSS3, CSS, Yii, Framework, MVC, Matias, Hidalgo, Senior';
$config = array(
    'es' => array(
        'title' => 'Matias Hidalgo - Senior Magento Developer x7 Certificado - vCard',
        'metas' => array(
            'description'   => 'vCard de Matias Hidalgo, Senior Magento developer con más de '.$yearExperience.' años de experiencia desarrollando e-commerces y websites',
            'keyword'       => $keywords,
        ),
        'email' => 'me@mhidalgo.tk'
    ),
    'en' => array(
        'title' => 'Matias Hidalgo - Senior Magento Developer x7 Certified - vCard',
        'metas' => array(
            'description'   => 'Matias Hidalgo vCard, Senior Magento developer with more than '.$yearExperience.' years of experience developing e-commerces and websites',
            'keyword'       => $keywords,
        ),
        'email' => 'me@mhidalgo.tk'
    ),
);
require_once('profile.php');
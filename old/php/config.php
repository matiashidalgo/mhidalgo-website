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
$keywords = 'magento, magento 2, magento 2 solution specialist, magento solution specialist, magento certified developer, e-commerce, php, web developer, web, developer, desarrollador, programación, programador, HTML, HTML5, CSS3, CSS, Yii, Framework, MVC, Matias, Hidalgo, Senior';
$config = array(
    'es' => array(
        'title' => 'Matias Hidalgo - Senior PHP Developer & Magento Certified Dev. Plus, Solution Specialist, M2 Solution Specialist and M2 Professional Developer - vCard',
        'metas' => array(
            'description'   => 'vCard de Matias Hidalgo, Magento developer con más de '.$yearExperience.' años de experiencia desarrollando e-commerces y websites',
            'keyword'       => $keywords,
        ),
        'email' => 'me@mhidalgo.tk'
    ),
    'en' => array(
        'title' => 'Matias Hidalgo - Senior PHP Developer & Magento Certified Dev. Plus, Solution Specialist, M2 Solution Specialist and M2 Professional Developer - vCard',
        'metas' => array(
            'description'   => 'Matias Hidalgo vCard, Magento developer with more than '.$yearExperience.' years of experience developing e-commerces and websites',
            'keyword'       => $keywords,
        ),
        'email' => 'me@mhidalgo.tk'
    ),
);
require_once('profile.php');
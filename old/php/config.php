<?php
/**
 * Created for  mhidalgo.
 * @author:     mhidalgo@summasolutions.net
 * Date:        22/10/15
 * Time:        11:13
 * @copyright   Copyright (c) 2015 Summa Solutions (http://www.summasolutions.net)
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
$config = array(
    'es' => array(
        'title' => 'Matias Hidalgo - Desarrollador Web & Soporte Tecnico - vCard',
        'metas' => array(
            'description'   => 'vCard de Matias Hidalgo, Web developer con más de '.$yearExperience.' años de experiencia desarrollando e-commerces y websites',
            'keyword'       => 'magento, e-commerce, php, web developer, web, developer, desarrollador, soporte, tecnico, técnico, programación, programador, HTML, HTML5, CSS3, CSS, Yii, Framework, MVC, Matias, Hidalgo, ingeniero, Senior, Junior, Semi-Senior',
        ),
        'email' => 'me@mhidalgo.xyz'
    ),
    'en' => array(
        'title' => 'Matias Hidalgo - Web Developer & Magento CD+ - vCard',
        'metas' => array(
            'description'   => 'Matias Hidalgo vCard, Web developer with more than '.$yearExperience.' years of experience developing e-commerces and websites',
            'keyword'       => 'magento, e-commerce, php, web developer, web, developer, desarrollador, soporte, tecnico, técnico, programación, programador, HTML, HTML5, CSS3, CSS, Yii, Framework, MVC, Matias, Hidalgo, ingeniero, Senior, Junior, Semi-Senior',
        ),
        'email' => 'me@mhidalgo.xyz'
    ),
);

require_once('profile.php');
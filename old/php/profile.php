<?php
/**
 * Created for  mhidalgo.
 *
 * @author      :     mhidalgo@summasolutions.net
 *              Date:        26/10/15
 *              Time:        14:20
 * @copyright   Copyright (c) 2015 Summa Solutions (http://www.summasolutions.net)
 */

$profile = array(
    'full_name'         => 'Matias Hidalgo',
    'photo'             => 'images/content/mhidalgonew2.png',
    'job'               => array(
        'es' => 'TTL, PHP & Magento Developer, x7 Magento Certified',
        'en' => 'TTL, PHP & Magento Developer, x7 Magento Certified',
    ),
    'motto'             => array(
        'es' => 'Persevera y Triunfarás',
        'en' => 'Persevere and will triumph',
    ),
    'names'             => 'Matias Martin',
    'last_name'         => 'Hidalgo',
    'age'               => calculateYears(array('day' => 28, 'month' => 3, 'year' => 1992)),
    'nationality'       => array(
        'es' => 'Argentino',
        'en' => 'Argentinean',
    ),
    'address'           => array(
        'country'   => 'Argentina',
        'state'     => 'Buenos Aires',
        'city'      => 'Tandil',
        'street'    => 'Carlos Gardel 1731',
        'lat'       => '-20.275686',
        'long'      => '57.3747906'
    ),
    'mobile'            => '+54 249 428 1765',
    'phone'             => null,
    'email'             => 'me@mhidalgo.tk',
    'website'           => 'www.mhidalgo.tk',
    'year_experience'   => $yearExperience,
    'level_experience'  => 'TTL & Certified Sr.',
    'languages'         => 'ES, EN',
    'self_description'  => array(
        'es' => 'Soy un Desarrollador de PHP y Magento Senior con sólidos conocimientos técnicos en análisis, diseño y desarrollo de aplicaciones web. Durante los últimos seis años me especializo en el desarrollo de e-commerce bajo la plataforma Magento (1 y 2) llegando a conseguir siete certificaciones en dicha plataforma mientras me proyecto a convertirme en Arquitecto de Magento.',
        'en' => 'Sr. PHP and Magento Developer with a solid technical background and working experience in analysis, design and development of web based applications. During last six years I specialize in e-commerce development with Magento (1 and 2) platform even I own seven certifications in such platform meanwhile I plan to become a Magento Architect.',
    ),
    'skills'            => include('profile/skills.php'),
    'office'            => array(
        'MS Word' => '90',
        'MS Excel' => '95',
        'Powerpoint'=> '80',
    ),
    'experience'        => include('profile/experience.php'),
    'study'             => include('profile/study.php'),
    'curriculum'        => include('profile/curriculum.php'),
    'portfolio'         => include('profile/portfolio.php')
);

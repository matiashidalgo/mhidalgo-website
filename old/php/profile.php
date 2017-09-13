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
    'photo'             => 'images/content/mhidalgo.jpg',
    'job'               => array(
        'es' => 'PHP Developer & Magento MCD+/MSS',
        'en' => 'PHP Developer & Magento MCD+/MSS',
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
        'country'   => 'Mauritius',
        'state'     => 'Buenos Aires',
        'city'      => 'Benito Juarez',
        'street'    => 'Pellegrini 382',
        'lat'       => '-20.275686',
        'long'      => '57.3747906'
    ),
    'mobile'            => '+954 249-457-1044',
    'phone'             => null,
    'email'             => 'me@mhidalgo.tk',
    'website'           => 'www.mhidalgo.tk',
    'year_experience'   => $yearExperience,
    'level_experience'  => 'Sr.',
    'languages'         => 'ES, EN',
    'self_description'  => array(
        'es' => 'Soy un Sr. PHP Developer con sólidos conocimientos técnicos en análisis, diseño y desarrollo de aplicaciones web. En los últimos cuatro años tome una orientación al desarrollo de e-commerce pero mientras tanto utilizo mi tiempo libre para continuar expandiendo mis conocimientos en frontend development y los nuevos frameworks JS.',
        'en' => 'Sr. PHP Developer with a solid technical background and working experience in analysis, design and development of web based applications. On last four years I\'ve taken a backend e-commerce developer orientation but meanwhile took free time to keep up my knowledge on frontend development and new JavaScript frameworks.',
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

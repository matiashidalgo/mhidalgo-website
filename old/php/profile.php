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
        'es' => 'Desarrollador PHP y Magento CD+',
        'en' => 'PHP Developer & Magento CD+',
    ),
    'motto'             => array(
        'es' => 'Persevera y Triunfarás',
        'en' => 'Persevere and you will succeed',
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
        'city'      => 'Benito Juarez',
        'street'    => 'Pellegrini 382',
        'lat'       => '',
        'long'      => ''
    ),
    'mobile'            => '+954 249-457-1044',
    'phone'             => null,
    'email'             => 'me@mhidalgo.xyz',
    'website'           => 'www.mhidalgo.xyz',
    'year_experience'   => $yearExperience,
    'level_experience'  => 'SSr.',
    'languages'         => 'ES, EN',
    'self_description'  => array(
        'es' => 'Soy un Semi Sr. PHP Developer con sólidos conocimientos técnicos en análisis, diseño y desarrollo de aplicaciones web. En los últimos dos años tome una orientación al desarrollo de e-commerce pero mientras tanto utilizo mi tiempo libre para continuar expandiendo mis conocimientos en frontend development y los nuevos frameworks JS.',
        'en' => 'Semi Sr. PHP Developer with a solid technical background and working experience in analysis, design and development of web based applications. On last two years he had taken a backend e-commerce developer orientation but meanwhile took free time to keep up his knowledge on frontend develop and new JavaScript frameworks.',
    ),
    'skills'            => array(
        array(
            'show' => true,
            'es' => array(
                'label'         => 'PHP',
                'percentage'    => '90',
                'description'   => 'Comenzando a programar en la universidad con este magnífico lenguaje, fui ganando experiencia. Actualmente desarrollo e-commerce con Magento'
            ),
            'en' => array(
                'label'         => 'PHP',
                'percentage'    => '90',
                'description'   => 'From the beginning in the university I develop web apps on PHP language, that make me growing daily a lot of experience. Today I develop Magento e-commerces'
            ),
        ),
        array(
            'show' => true,
            'es' => array(
                'label'         => 'Magento',
                'percentage'    => '95',
                'description'   => 'Desde que trabajo en Summa Solutions utilizo esta plataforma de e-commerce profesionalizandome dia a dia, recientemente en Agosto de 2015 consegui certificarme como Magento Developer Plus con un score excelente.'
            ),
            'en' => array(
                'label'         => 'Magento',
                'percentage'    => '95',
                'description'   => 'At Summa Solutions I develop e-commerce using Magento Platform, so I have daily new experiences with it. Recently, on August of 2015 I get my certificate like Magento Developer Plus with a perfect score.'
            ),
        ),
        array(
            'show' => false,
            'es' => array(
                'label'         => 'CSS & HTML',
                'percentage'    => '90',
                'description'   => 'A lo largo de mis proyectos de desarrollo de aplicaciones web siempre tuve que desarrollar utilizando HTML y CSS.'
            ),
            'en' => array(
                'label'         => 'CSS & HTML',
                'percentage'    => '90',
                'description'   => 'On all the proyects I develop web applications with HTML and CSS.'
            ),
        ),
        array(
            'show' => false,
            'es' => array(
                'label'         => 'Yii Framework',
                'percentage'    => '80',
                'description'   => 'Durante unas prácticas profesionales supervisadas conoci este Framework MVC en PHP y posteriormente lo utilize en el desarrollo de un proyecto privado.'
            ),
            'en' => array(
                'label'         => 'Yii Framework',
                'percentage'    => '80',
                'description'   => 'I learn how to develop web applications on Temperies and after that I use Yii for a private project.'
            ),
        ),
    ),
    'office'            => array(
        'MS Word' => '90',
        'MS Excel' => '95',
        'Powerpoint'=> '80',
    ),
    'experience'        => array(
        array(
            'es' => array(
                'from'  => array(
                    'type' => 'date',
                    'month' => 'Oct',
                    'year'  => '2013',
                ),
                'to'    => array(
                    'type' => 'now',
                ),
                'title'         => 'PHP Developer',
                'company'       => 'Summa Solutions',
                'description'   => 'Desarrollo aplicaciones para comercios electronicos, tambien llamados e-commerce, utilizando la plataforma Magento. Tambien trabajé en proyectos con Wordpress y Yii. Utilizamos la metodologia Scrum.'
            ),
            'en' => array(
                'from'  => array(
                    'type' => 'date',
                    'month' => 'Oct',
                    'year'  => '2013',
                ),
                'to'    => array(
                    'type' => 'now',
                ),
                'title'         => 'PHP Developer',
                'company'       => 'Summa Solutions',
                'description'   => 'Develop e-commerce based on Magento Platform. Also I\'ve been working with Wordpress and Yii for some proyects. We use Scrum.'
            ),
        ),
        array(
            'es' => array(
                'from'  => array(
                    'type' => 'date',
                    'month' => 'Oct',
                    'year'  => '2012',
                ),
                'to'    => array(
                    'type' => 'date',
                    'month' => 'Oct',
                    'year'  => '2013',
                ),
                'title'         => 'Desarrollador Web',
                'company'       => 'Temperies IT',
                'description'   => 'Estube trabajando en muchos proyectos de desarrollo de aplicaciones web, en diferentes lenguajes y arquitecturas.'
            ),
            'en' => array(
                'from'  => array(
                    'type' => 'date',
                    'month' => 'Oct',
                    'year'  => '2012',
                ),
                'to'    => array(
                    'type' => 'date',
                    'month' => 'Oct',
                    'year'  => '2013',
                ),
                'title'         => 'Web Developer',
                'company'       => 'Temperies IT',
                'description'   => 'I was working on a lot of projects developing web apps, using different languages and architectures.'
            ),
        ),
        array(
            'es' => array(
                'from'  => array(
                    'type' => 'date',
                    'month' => 'May',
                    'year'  => '2008',
                ),
                'to'    => array(
                    'type' => 'date',
                    'month' => 'Feb',
                    'year'  => '2009',
                ),
                'title'         => 'Soporte técnico y atención al cliente',
                'company'       => 'TODOSISTEMAS',
                'description'   => 'Desempeñe tareas de soporte técnico reparando equipos informáticos en la empresa Service Oficial de LAWSA y MAPFRE.'
            ),
            'en' => array(
                'from'  => array(
                    'type' => 'date',
                    'month' => 'May',
                    'year'  => '2008',
                ),
                'to'    => array(
                    'type' => 'date',
                    'month' => 'Feb',
                    'year'  => '2009',
                ),
                'title'         => 'Technical support and customer assistant',
                'company'       => 'TODOSISTEMAS',
                'description'   => 'I was providing technical support fixing PCs on official services of LAWSA and MAPFRE.'
            ),
        ),
        array(
            'es' => array(
                'from'  => array(
                    'type' => 'date',
                    'month' => 'Ene',
                    'year'  => '2008',
                ),
                'to'    => array(
                    'type' => 'now',
                ),
                'title'         => 'Soporte técnico a domicilio',
                'company'       => 'Freelance',
                'description'   => 'Proporciono soluciones informáticas a domicilio en mi tiempo libre.'
            ),
            'en' => array(
                'from'  => array(
                    'type' => 'date',
                    'month' => 'Ene',
                    'year'  => '2008',
                ),
                'to'    => array(
                    'type' => 'now',
                ),
                'title'         => 'Developer and Technical support',
                'company'       => 'Freelance',
                'description'   => 'I develop web apps on my free time.'
            ),
        ),
    ),
    'study'             => array(
        array(
            'es' => array(
                'from'  => array(
                    'type' => 'date',
                    'month' => 'Mar',
                    'year'  => '2007',
                ),
                'to'  => array(
                    'type' => 'date',
                    'month' => 'Dic',
                    'year'  => '2009',
                ),
                'title'         => 'Técnico en Informática Personal y Profesional',
                'place'         => 'EET Nº2 Ing. Felipe Senillosa',
                'description'   => 'En el año 2009 obtube mi primer titulo de Técnico en Informática.'
            ),
            'en' => array(
                'from'  => array(
                    'type' => 'date',
                    'month' => 'Mar',
                    'year'  => '2007',
                ),
                'to'  => array(
                    'type' => 'date',
                    'month' => 'Dic',
                    'year'  => '2009',
                ),
                'title'         => 'Computer Technician',
                'place'         => 'EET Nº2 Ing. Felipe Senillosa',
                'description'   => 'On 2009 I get my degree on Computer Technician.'
            ),
        ),
        array(
            'es' => array(
                'from'  => array(
                    'type' => 'date',
                    'month' => 'Mar',
                    'year'  => '2011',
                ),
                'to'    => array(
                    'type' => 'date',
                    'month' => 'Dic',
                    'year'  => '2013',
                ),
                'title'         => 'Ténico Universitario en Programación y Administración de Redes',
                'place'         => 'UNCPBA',
                'description'   => 'En 2012 concluí con todas las cursadas de la tecnicatura universitaria y el 10 de Diciembre de 2013 rendi la Tesis obteniendo un 10 y concluyendo la carrera.'
            ),
            'en' => array(
                'from'  => array(
                    'type' => 'date',
                    'month' => 'Mar',
                    'year'  => '2011',
                ),
                'to'    => array(
                    'type' => 'date',
                    'month' => 'Dic',
                    'year'  => '2013',
                ),
                'title'         => 'Technical Developer and Networks Management',
                'place'         => 'UNCPBA',
                'description'   => 'On 2012 I finish my lessons on the university and at December 2013 I did my thesis getting an excellent 100% note.'
            ),
        ),
        array(
            'es' => array(
                'from'  => array(
                    'type' => 'date',
                    'month' => 'Mar',
                    'year'  => '2010',
                ),
                'to'    => array(
                    'type' => 'now',
                ),
                'title'         => 'Ingenieria en Sistemas',
                'place'         => 'UNCPBA',
                'description'   => 'Inicie mi carrera de ingenieria en el 2010 y la continue en 2013, luego de recibirme de TUPAR, y continuo mis estudios hasta la actualidad.'
            ),
            'en' => array(
                'from'  => array(
                    'type' => 'date',
                    'month' => 'Ene',
                    'year'  => '2008',
                ),
                'to'    => array(
                    'type' => 'now',
                ),
                'title'         => 'Software Engineering',
                'place'         => 'UNCPBA',
                'description'   => 'I started Software Engineering at 2010 and I continue with it at 2013. I continue studding since that moment.'
            ),
        ),
        array(
            'es' => array(
                'from'  => array(
                    'type' => 'date',
                    'month' => 'Mar',
                    'year'  => '2015',
                ),
                'to'    => array(
                    'type' => 'date',
                    'month' => 'Ago',
                    'year'  => '2015',
                ),
                'title'         => 'Magento Certified Developer Plus',
                'place'         => 'Magento Inc.',
                'description'   => 'Me prepare durante 2015 logrando obtener mi certificación en Magento Developer Plus en Agosto del mismo año.'
            ),
            'en' => array(
                'from'  => array(
                    'type' => 'date',
                    'month' => 'Mar',
                    'year'  => '2015',
                ),
                'to'    => array(
                    'type' => 'date',
                    'month' => 'Aug',
                    'year'  => '2015',
                ),
                'title'         => 'Magento Certified Developer Plus',
                'place'         => 'Magento Inc.',
                'description'   => 'I studied in order to get my degree on Magento Certified Developer Plus, and I got it at August of that year.'
            ),
        ),
    ),
    'curriculum'        => array(
        array(
            'format'=> 'PDF',
            'file'  => 'CV-mhidalgo.pdf',
            'last_updated' => '03/11/2015',
            'info' => array(
                'es' => 'Este link le permitira descargar mi curriculum en Español en su version PDF.',
                'en' => 'This link allow you to download my CV on PDF and spanish language.',
            )
        ),
        array(
            'format'=> 'DOCX',
            'file'  => 'CV-mhidalgo.docx',
            'last_updated' => '03/11/2015',
            'info' => array(
                'es' => 'Este link le permitira descargar mi curriculum en Español en su version DOCX.',
                'en' => 'This link allow you to download my CV on DOCX and spanish language.',
            )
        ),
        array(
            'format'=> 'PDF',
            'file'  => 'CV-mhidalgo-EN.pdf',
            'last_updated' => '03/11/2015',
            'info' => array(
                'es' => 'Este link le permitira descargar mi curriculum en Ingles en su version PDF.',
                'en' => 'This link allow you to download my CV on PDF and english language.',
            )
        ),
        array(
            'format'=> 'DOCX',
            'file'  => 'CV-mhidalgo-EN.docx',
            'last_updated' => '03/11/2015',
            'info' => array(
                'es' => 'Este link le permitira descargar mi curriculum en Ingles en su version DOCX.',
                'en' => 'This link allow you to download my CV on DOCX and english language.',
            )
        ),
        array(
            'format'=> 'URL',
            'file'  => 'http://www.magentocommerce.com/certification/directory/dev/1548112/',
            'last_updated' => null,
            'info' => array(
                'es' => 'Este link le permitira visualizar mi certificacion en Magento.',
                'en' => 'This link allow you to see my Magento Certification.',
            )
        ),
    ),
    'portfolio'         => array(
        array(
            'es' => array(
                'date' => array(
                    'from'  => '2011',
                    'to'    => null,
                ),
                'title' => 'PCLider.com.ar',
                'url'   => 'http://www.pclider.com.ar',
                'tasks' => 'Desarrollador, diseñador, tester, administrador de la base de datos',
                'technologies' => 'HTML, CSS, CMS Wordpress, MySQL, Social Networks (Fb and Twitter).',
                'description' => 'Desarrollé mi propia web para publicar mis servicios técnicos en Tandil a través de internet utilizando un website builder (Wix.com) e implementando un blog Wordpress para la publicación de información.',
            ),
            'en' => array(
                'date' => array(
                    'from'  => '2011',
                    'to'    => null,
                ),
                'title' => 'PCLider.com.ar',
                'url'   => 'http://www.pclider.com.ar',
                'tasks' => 'Developer, designer, tester, DBA',
                'technologies' => 'HTML, CSS, CMS Wordpress, MySQL, Social Networks (Fb and Twitter).',
                'description' => 'Develop my own web page in order to publish my services as a computer technician using an online website builder (Wix.com) and deploying a blog with Wordpress.',
            ),
        ),
        array(
            'es' => array(
                'date' => array(
                    'from'  => '2012',
                    'to'    => '2015',
                ),
                'title' => 'ServiceLeoTv.com.ar',
                'url'   => 'http://www.serviceleotv.com.ar',
                'tasks' => 'Desarrollador, diseñador, tester, administrador de la base de datos',
                'technologies' => 'PHP, HTML, CSS3, Javascript, jQuery, Yii Framework, MVC Framework, MySQL, Pair Programming, PEAR.',
                'description' => 'Desarrollo un proyecto privado basado en la administración de talleres de electrónica y proveer servicios a través de la web, para esto utilicé PHP + HTML + CSS3 + Javascript/jQuery funcionando dentro de Yii Framework y una base de datos MySQL.'."\n".' En 2012 use PEAR Framework pero luego se optó cambiar por un MVC Framework y el proyecto migro a Yii Framework.',
            ),
            'en' => array(
                'date' => array(
                    'from'  => '2012',
                    'to'    => '2015',
                ),
                'title' => 'ServiceLeoTv.com.ar',
                'url'   => 'http://www.serviceleotv.com.ar',
                'tasks' => 'Developer, designer, tester, DBA',
                'technologies' => 'PHP, HTML, CSS3, Javascript, jQuery, Yii Framework, MVC Framework, MySQL, Pair Programming, PEAR.',
                'description' => 'Develop a private project oriented to help electronic technicians to manage their own workshops and to provide some new services behind web.'."\n".' Long-term technical support, hosting and new functionalities provider.',
            ),
        ),
        array(
            'es' => array(
                'date' => array(
                    'from'  => '2012',
                    'to'    => null,
                ),
                'title' => 'Crixos.com',
                'url'   => null,
                'tasks' => 'Front-end Developer',
                'technologies' => 'OOP, PHP, HTML, CSS3, Javascript, jQuery, Yii Framework, MVC Framework, MySQL, Scrum.',
                'description' => 'Desarrollaba funciones para la aplicación Web con PHP + HTML + CSS3 + Javascript/jQuery trabajando dentro de un Yii Framework y participando en tareas con el servidor MySQL.',
            ),
            'en' => array(
                'date' => array(
                    'from'  => '2012',
                    'to'    => null,
                ),
                'title' => 'Crixos.com',
                'url'   => null,
                'tasks' => 'Front-end Developer',
                'technologies' => 'OOP, PHP, HTML, CSS3, Javascript, jQuery, Yii Framework, MVC Framework, MySQL, Scrum.',
                'description' => 'Develop functionalities to web application. Develop import CSV of emails based-on export contacts from Hotmail and Gmail services.',
            ),
        ),
        array(
            'es' => array(
                'date' => array(
                    'from'  => '2012',
                    'to'    => '2013',
                ),
                'title' => 'Santander Rio KM',
                'url'   => null,
                'tasks' => 'Front-end Developer',
                'technologies' => 'HTML, CSS, Javascript, jQuery, Sharepoint.',
                'description' => 'Maquetaba con HTML + CSS + Javascript/jQuery orientado a IE8 y colaboraba con la integración en Sharepoint 2010.',
            ),
            'en' => array(
                'date' => array(
                    'from'  => '2012',
                    'to'    => '2013',
                ),
                'title' => 'Santander Rio KM',
                'url'   => null,
                'tasks' => 'Front-end Developer',
                'technologies' => 'HTML, CSS, Javascript, jQuery, Sharepoint.',
                'description' => 'Develop frontend views and Javascript code using jQuery based-on IE8.',
            ),
        ),
        array(
            'es' => array(
                'date' => array(
                    'from'  => '2013',
                    'to'    => null,
                ),
                'title' => 'Ruby on Rails e-Commerce',
                'url'   => null,
                'tasks' => 'Front-end y Back-end Developer',
                'technologies' => 'OOP, HTML5, CSS3, Ruby on Rails, Ruby, RubyGems, Twitter Bootstrap.',
                'description' => 'Desarrolle la prueba de concepto inicial maquetando responsivo en Twitter Bootstrap Framework y programando la lógica en ruby con gemas.',
            ),
            'en' => array(
                'date' => array(
                    'from'  => '2013',
                    'to'    => null,
                ),
                'title' => 'Ruby on Rails e-Commerce',
                'url'   => null,
                'tasks' => 'Front-end and Back-end Developer',
                'technologies' => 'OOP, HTML5, CSS3, Ruby on Rails, Ruby, RubyGems, Twitter Bootstrap.',
                'description' => 'Develop web application based-on Rails standards, using Twitter Bootstrap.',
            ),
        ),
        array(
            'es' => array(
                'date' => array(
                    'from'  => '2013',
                    'to'    => null,
                ),
                'title' => 'GWN Mobile',
                'url'   => null,
                'tasks' => 'PhoneGAP Developer',
                'technologies' => 'SCRUM, HTML5, CSS3, javascript, jQuery, jQuery Mobile, PhoneGAP, Objective-C para iOS, Java para Android.',
                'description' => 'En GWN Mobile desarrolle una aplicación web mobile para Android e iOS usando PhoneGAP y jQuery Mobile que proporcionaba una interface de comunicación con el sistema en producción GWN.',
            ),
            'en' => array(
                'date' => array(
                    'from'  => '2013',
                    'to'    => null,
                ),
                'title' => 'GWN Mobile',
                'url'   => null,
                'tasks' => 'PhoneGAP Developer',
                'technologies' => 'SCRUM, HTML5, CSS3, javascript, jQuery, jQuery Mobile, PhoneGAP, Objective-C for iOS, Java for Android.',
                'description' => 'Develop mobile application to consume GWN application using REST services.'."\n".' Integrate native code for Android and iOS devices with PhoneGAP.',
            ),
        ),
        array(
            'es' => array(
                'date' => array(
                    'from'  => '2013',
                    'to'    => date('Y'),
                ),
                'title' => 'Grand Marché',
                'url'   => null,
                'tasks' => 'PHP y Magento Developer',
                'technologies' => 'OOP, PHP, HTML, CSS3, SASS, Compass, Javascript, jQuery, Prototype, Magento CE, MySQL, SEO, Social Networks, Facebook API, Google + API, Twitter OAuth, TodoPago API, MercadoPago API, SPS Decidir API, Andreani WS, Scrum.',
                'description' => 'Desarrolle módulos de magento para customizar la plataforma basado en los requerimientos del cliente.'."\n".' Se da soporte a largo plazo.'."\n".' Se aplicaron mejoras de seguridad y los últimos parches de Magento.'."\n".' Desarrolle una nueva extensión de magento para integrar Andreani como método de envío.'."\n".' Integre SPS Decidir como método de pago.'."\n".' Integre Mercado Pago como método de pago.'."\n".' Integre Todo Pago como método de pago.'."\n".' Participé activamente en el rediseño del sitio desempeñando tareas de Frontend.',
            ),
            'en' => array(
                'date' => array(
                    'from'  => '2013',
                    'to'    => date('Y'),
                ),
                'title' => 'Grand Marché',
                'url'   => null,
                'tasks' => 'PHP and Magento Developer',
                'technologies' => 'OOP, PHP, HTML, CSS3, SASS, Compass, Javascript, jQuery, Prototype, Magento CE, MySQL, SEO, Social Networks, Facebook API, Google + API, Twitter OAuth, TodoPago API, MercadoPago API, SPS Decidir API, Andreani WS, Scrum.',
                'description' => 'Develop Magento modules to customize e-commerce platform based-on client requirements.'."\n".' Develop Magento extensión to integrate Andreani carrier.'."\n".' Develop Magento extensión to login using social networks Google +, Facebook and Twitter.'."\n".' Integrate uDropship Vendors module and customize them.'."\n".' Long-term technical support.'."\n".' Security improvements and latest Magento Patches applied.'."\n".' Integrate MercadoPago Marketplace Payment Method.'."\n".' Integrate MercadoPago Express Payment Method.'."\n".' Integrate TodoPago Payment Method.'."\n".' Integrate SPS Decidir Payment Method.'."\n".' Develop new reports based-on client requirements.'."\n".' Develop multi-vendor sells functionality.'."\n".' Estimate SEO integrations and social-oriented settings to get more visitors.'."\n".' Develop new design and theme adjustments as a Frontend developer.',
            ),
        ),
        array(
            'es' => array(
                'date' => array(
                    'from'  => '2014',
                    'to'    => date('Y'),
                ),
                'title' => 'QBC - Que Buena Compra',
                'url'   => null,
                'tasks' => 'PHP y Magento Developer',
                'technologies' => 'OOP, PHP, HTML, CSS3, Javascript, jQuery, Magento EE, MySQL, Scrum.',
                'description' => 'Desarrolle módulos de magento para customizar la plataforma basado en los requerimientos del cliente.'."\n".' Se da soporte a largo plazo.'."\n".' Se aplicaron mejoras de seguridad y los últimos parches de Magento.',
            ),
            'en' => array(
                'date' => array(
                    'from'  => '2014',
                    'to'    => date('Y'),
                ),
                'title' => 'QBC - Que Buena Compra',
                'url'   => null,
                'tasks' => 'PHP and Magento Developer',
                'technologies' => 'OOP, PHP, HTML, CSS3, Javascript, jQuery, Magento EE, MySQL, Scrum.',
                'description' => 'Develop Magento modules to customize e-commerce platform based-on client requirements.'."\n".' Security improvements and latest Magento Patches applied.'."\n".' Long-term technical support.',
            ),
        ),
        array(
            'es' => array(
                'date' => array(
                    'from'  => '2014',
                    'to'    => null,
                ),
                'title' => 'QBC - Subastas',
                'url'   => null,
                'tasks' => 'PHP y Magento Developer',
                'technologies' => 'OOP, PHP, HTML, CSS3, Javascript, jQuery, Ajax, Yii 1.5, MVC Framework, MySQL, SEO, REST Services, Twitter Bootstrap, Scrum.',
                'description' => 'Se hizo un análisis de los requerimientos y se estimaron los tiempos de desarrollo.'."\n".' Se desarrollo una aplicacion web para un sistema de subastas online utilizando Twitter Bootstrap para el frontend.'."\n".' Se desarrollo un backend acorde a los requerimientos del cliente con Full Ajax.'."\n".' Se desarrollo una API REST para que sea consumida desde sitios externos.',
            ),
            'en' => array(
                'date' => array(
                    'from'  => '2014',
                    'to'    => null,
                ),
                'title' => 'QBC - Subastas',
                'url'   => null,
                'tasks' => 'PHP and Magento Developer',
                'technologies' => 'OOP, PHP, HTML, CSS3, Javascript, jQuery, Ajax, Yii 1.5, MVC Framework, MySQL, SEO, REST Services, Twitter Bootstrap, Scrum.',
                'description' => 'Requirements analysis and estimate times of developing.'."\n".' Develop web app for auctions online based-on client requirements, using Twitter Bootstrap.'."\n".' Develop Full-Ajax functionalities for Product Page and Moderation Page.'."\n".' Develop backend functionalities and REST services to be consumed by external websites.',
            ),
        ),
        array(
            'es' => array(
                'date' => array(
                    'from'  => '2014',
                    'to'    => null,
                ),
                'title' => 'TGC - The Great Courses',
                'url'   => null,
                'tasks' => 'PHP y Magento Developer',
                'technologies' => 'OOP, PHP, HTML, CSS3, Javascript, jQuery, Ajax, Magento EE, MySQL, Scrum.',
                'description' => 'Para TGC se desarrollo un e-commerce para ventas de cursos en diversos formatos para USA, UK y Australia.',
            ),
            'en' => array(
                'date' => array(
                    'from'  => '2014',
                    'to'    => null,
                ),
                'title' => 'TGC - The Great Courses',
                'url'   => null,
                'tasks' => 'PHP and Magento Developer',
                'technologies' => 'OOP, PHP, HTML, CSS3, Javascript, jQuery, Ajax, Magento EE, MySQL, Scrum.',
                'description' => 'Develop Magento modules to customize e-commerce platform based-on client requirements.'."\n".' Develop Ajax functionalities for Product Page, Shopping Cart and Checkout pages.',
            ),
        ),
        array(
            'es' => array(
                'date' => array(
                    'from'  => '2014',
                    'to'    => null,
                ),
                'title' => 'Environmental Lights',
                'url'   => null,
                'tasks' => 'PHP y Magento Developer',
                'technologies' => 'OOP, PHP, HTML5, CSS3, SASS, Compass, Javascript, jQuery, Responsive Design, Magento EE, MySQL, Scrum.',
                'description' => 'Se desarrollo un tema responsive con su correspondiente JS para optimizar la navegación y facilitar el acceso de dispositivos mobile y tablet.',
            ),
            'en' => array(
                'date' => array(
                    'from'  => '2014',
                    'to'    => null,
                ),
                'title' => 'Environmental Lights',
                'url'   => null,
                'tasks' => 'PHP and Magento Developer',
                'technologies' => 'OOP, PHP, HTML5, CSS3, SASS, Compass, Javascript, jQuery, Responsive Design, Magento EE, MySQL, Scrum.',
                'description' => 'Develop Magento responsive theme and Javascript to optimize responsive changes.',
            ),
        ),
        array(
            'es' => array(
                'date' => array(
                    'from'  => '2014',
                    'to'    => null,
                ),
                'title' => 'Carrefour',
                'url'   => null,
                'tasks' => 'PHP y Magento Developer',
                'technologies' => 'OOP, PHP, HTML, CSS3, SASS, Compass, Javascript, Prototype, Magento CE, MySQL, Scrum.',
                'description' => 'Desarrolle módulos de magento para customizar la plataforma basado en los requerimientos del cliente.'."\n".' Integre el retiro en sucursales como método de envío.',
            ),
            'en' => array(
                'date' => array(
                    'from'  => '2014',
                    'to'    => null,
                ),
                'title' => 'Carrefour',
                'url'   => null,
                'tasks' => 'PHP and Magento Developer',
                'technologies' => 'OOP, PHP, HTML, CSS3, SASS, Compass, Javascript, Prototype, Magento CE, MySQL, Scrum.',
                'description' => 'Develop Magento modules to customize e-commerce platform based-on client requirements.'."\n".' Integrate Magento module to Store pickup.',
            ),
        ),
        array(
            'es' => array(
                'date' => array(
                    'from'  => '2014',
                    'to'    => null,
                ),
                'title' => 'Vapeworld',
                'url'   => null,
                'tasks' => 'PHP y Magento Developer',
                'technologies' => 'OOP, PHP, HTML, CSS3, SASS, Compass, Javascript, Prototype, Magento CE, MySQL, Scrum.',
                'description' => 'Desarrolle módulos de magento para customizar la plataforma basado en los requerimientos del cliente.'."\n".' Me encargé de llevar adelante el Upgrade de Magento 1.6 a 1.9 sumado a optimizaciones sobre el código.'."\n".' Desarrolle una nueva funcionalidad para conseguir un mejor precio en productos seleccionados.',
            ),
            'en' => array(
                'date' => array(
                    'from'  => '2014',
                    'to'    => null,
                ),
                'title' => 'Vapeworld',
                'url'   => null,
                'tasks' => 'PHP and Magento Developer',
                'technologies' => 'OOP, PHP, HTML, CSS3, SASS, Compass, Javascript, Prototype, Magento CE, MySQL, Scrum.',
                'description' => 'Develop Magento modules to customize e-commerce platform based-on client requirements.'."\n".' Upgrade Magento 1.6 to 1.9 and improvements over old code.'."\n".' Develop a new functionality to get a better price on specific products.',
            ),
        ),
        array(
            'es' => array(
                'date' => array(
                    'from'  => '2014',
                    'to'    => date('Y'),
                ),
                'title' => 'Makro Virtual',
                'url'   => null,
                'tasks' => 'PHP y Magento Developer',
                'technologies' => 'OOP, PHP, HTML, CSS3, Javascript, jQuery, Magento CE, MySQL, Performance Analysis, Scrum.',
                'description' => 'Estube a cargo de la migracion del sitio desde el proveedor anterior.'."\n".' Se da soporte a largo plazo.'."\n".' Se hizo un análisis de performance y se documentó las correcciones y mejoras realizadas.'."\n".' Se aplicaron mejoras de seguridad y los últimos parches de Magento.'."\n".' Se llevo adelante el upgrade de Magento 1.6 a 1.9.',
            ),
            'en' => array(
                'date' => array(
                    'from'  => '2014',
                    'to'    => date('Y'),
                ),
                'title' => 'Makro Virtual',
                'url'   => null,
                'tasks' => 'PHP and Magento Developer',
                'technologies' => 'OOP, PHP, HTML, CSS3, Javascript, jQuery, Magento CE, MySQL, Performance Analysis, Scrum.',
                'description' => 'Migration Server from previous provider.'."\n".' Long-term technical support.'."\n".' Performance analysis and documentation about fixes and improvements to do.'."\n".' Security improvements and latest Magento Patches applied.'."\n".' Upgrade Magento 1.6 to 1.9 and improvements to performance on a lot of pages.',
            ),
        ),
        array(
            'es' => array(
                'date' => array(
                    'from'  => '2014',
                    'to'    => null,
                ),
                'title' => 'Palacio de Hierro',
                'url'   => null,
                'tasks' => 'PHP y Magento Developer',
                'technologies' => 'OOP, PHP, Magento EE, MySQL, Performance Analysis.',
                'description' => 'Se hizo un análisis de los requerimientos y se estimaron los tiempos de desarrollo.',
            ),
            'en' => array(
                'date' => array(
                    'from'  => '2014',
                    'to'    => null,
                ),
                'title' => 'Palacio de Hierro',
                'url'   => null,
                'tasks' => 'PHP and Magento Developer',
                'technologies' => 'OOP, PHP, Magento EE, MySQL, Performance Analysis.',
                'description' => 'Requirements analysis and estimate times of developing.',
            ),
        ),
        array(
            'es' => array(
                'date' => array(
                    'from'  => '2014',
                    'to'    => date('Y'),
                ),
                'title' => 'El Burgues',
                'url'   => null,
                'tasks' => 'PHP y Magento Developer',
                'technologies' => 'OOP, PHP, HTML, CSS3, SASS, Compass, Javascript, Prototype, Magento CE, MySQL, Andreani WS, Scrum.',
                'description' => 'Desarrolle módulos de magento para customizar la plataforma basado en los requerimientos del cliente.'."\n".' Desarrolle una nueva extensión de magento para integrar Andreani como método de envío.'."\n".' Integre SPS Decidir como método de pago.'."\n".' Se da soporte a largo plazo.'."\n".' Se aplicaron mejoras de seguridad y los últimos parches de Magento.'."\n".' Integre el retiro en sucursales como método de envío.',
            ),
            'en' => array(
                'date' => array(
                    'from'  => '2014',
                    'to'    => date('Y'),
                ),
                'title' => 'El Burgues',
                'url'   => null,
                'tasks' => 'PHP and Magento Developer',
                'technologies' => 'OOP, PHP, HTML, CSS3, SASS, Compass, Javascript, Prototype, Magento CE, MySQL, Andreani WS, Scrum.',
                'description' => 'Develop Magento modules to customize e-commerce platform based-on client requirements.'."\n".' Develop Magento extensión to integrate Andreani carrier.'."\n".' Integrate SPS Decidir Payment Method.'."\n".' Security improvements and latest Magento Patches applied.'."\n".' Long-term technical support.'."\n".' Integrate Magento module to Store pickup.',
            ),
        ),
        array(
            'es' => array(
                'date' => array(
                    'from'  => '2015',
                    'to'    => date('Y'),
                ),
                'title' => 'Stylewatch',
                'url'   => null,
                'tasks' => 'PHP y Magento Developer',
                'technologies' => 'OOP, PHP, HTML, CSS3, SASS, Compass, Javascript, Prototype, Magento CE, MySQL, Andreani WS, Scrum.',
                'description' => 'Desarrolle módulos de magento para customizar la plataforma basado en los requerimientos del cliente.'."\n".' Se da soporte a largo plazo.'."\n".' Se aplicaron mejoras de seguridad y los últimos parches de Magento.'."\n".' Se llevo adelante el upgrade de Magento 1.8 a 1.9.',
            ),
            'en' => array(
                'date' => array(
                    'from'  => '2015',
                    'to'    => date('Y'),
                ),
                'title' => 'Stylewatch',
                'url'   => null,
                'tasks' => 'PHP and Magento Developer',
                'technologies' => 'OOP, PHP, HTML, CSS3, SASS, Compass, Javascript, Prototype, Magento CE, MySQL, Andreani WS, Scrum.',
                'description' => 'Develop Magento modules to customize e-commerce platform based-on client requirements.'."\n".' Upgrade Magento CE 1.8.1.0 to 1.9.2.0.'."\n".' Security improvements and latest Magento Patches applied.'."\n".' Long-term technical support.',
            ),
        ),
        array(
            'es' => array(
                'date' => array(
                    'from'  => '2015',
                    'to'    => date('Y'),
                ),
                'title' => 'US Polo',
                'url'   => null,
                'tasks' => 'PHP y Magento Developer',
                'technologies' => 'OOP, PHP, HTML, CSS3, SASS, Compass, Javascript, Prototype, Magento EE, MySQL, Scrum.',
                'description' => 'Desarrolle módulos de magento para customizar la plataforma basado en los requerimientos del cliente.'."\n".' Se da soporte a largo plazo.'."\n".' Se aplicaron mejoras de seguridad y los últimos parches de Magento.',
            ),
            'en' => array(
                'date' => array(
                    'from'  => '2015',
                    'to'    => date('Y'),
                ),
                'title' => 'US Polo',
                'url'   => null,
                'tasks' => 'PHP and Magento Developer',
                'technologies' => 'OOP, PHP, HTML, CSS3, SASS, Compass, Javascript, Prototype, Magento EE, MySQL, Scrum.',
                'description' => 'Develop Magento modules to customize e-commerce platform based-on client requirements.'."\n".' Security improvements and latest Magento Patches applied.'."\n".' Long-term technical support.',
            ),
        ),
        array(
            'es' => array(
                'date' => array(
                    'from'  => '2015',
                    'to'    => date('Y'),
                ),
                'title' => 'Meet Magento Argentina',
                'url'   => null,
                'tasks' => 'PHP y Frontend Developer',
                'technologies' => 'OOP, PHP, HTML, CSS3, Javascript, jQuery, Wordpress 4, MySQL, Scrum.',
                'description' => 'Customize algunos templates de wordpress basado en los requerimientos del cliente.'."\n".' Hice carga de datos en ambiente productivo y capacité a otro desarrollador en el uso y desarrollo con wordpress.',
            ),
            'en' => array(
                'date' => array(
                    'from'  => '2015',
                    'to'    => date('Y'),
                ),
                'title' => 'Meet Magento Argentina',
                'url'   => null,
                'tasks' => 'PHP and Frontend Developer',
                'technologies' => 'OOP, PHP, HTML, CSS3, Javascript, jQuery, Wordpress 4, MySQL, Scrum.',
                'description' => 'Customized wordpress templates based-on client requirements.'."\n".' Data entry and Wordpress teaching for co-workers.',
            ),
        ),
    )
);

<?php
$urlsPrefix = (!isset($urlsPrefix))?'':$urlsPrefix;
require_once('php/config.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $lang; ?>">

<head>

    <title><?php echo $config[$lang]['title']; ?></title>

    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<meta name="description" content="<?php echo $config[$lang]['metas']['description']; ?>">
	
	<meta name="keywords" content="<?php echo $config[$lang]['metas']['keyword']; ?>">
	
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Titillium+Web:400,600|Patua+One:400|Titillium+Web:400italic,700italic&amp;subset=latin,latin-ext"/>

    <link rel="stylesheet" type="text/css" href="<?php echo $urlsPrefix; ?>css/reset.css"/>

    <link rel="stylesheet" type="text/css" href="<?php echo $urlsPrefix; ?>css/color-blue.css"/>

    <link rel="stylesheet" type="text/css" href="<?php echo $urlsPrefix; ?>css/style.css"/>

    <link rel="stylesheet" type="text/css" href="<?php echo $urlsPrefix; ?>css/jquery.fancybox.css"/>

    <link rel="stylesheet" type="text/css" href="<?php echo $urlsPrefix; ?>css/custom.css"/>

</head>

<body>



    <!-- Wrapper --><div id = "wrapper" class = "wrapper">



        <!-- Navigation --><ul id = "navigation-menu" class = "navigation-menu">

            <li class="first"><a class = "profile" href="#profile"><span><?php echo $language['Profile']; ?></span></a></li>

            <li><a class = "cv" href="#cv"><span><?php echo $language['CV']; ?></span></a></li>

            <li><a class = "documents" href="#documents"><span><?php echo $language['Documents']; ?></span></a></li>

            <li><a class = "portfolio" href="#portfolio"><span><?php echo $language['Portfolio']; ?></span></a></li>

            <li class="last"><a class = "contacts" href="#contacts"><span><?php echo $language['Contact']; ?></span></a></li>

        </ul><!-- /Navigation -->



        <!-- Container --><div id = "container">



        <!-- Profile --><div id = "profile">



            <!-- Info --><div id = "info">



                <div class = "photo">

                    <img src = "<?php echo $urlsPrefix.$profile['photo']; ?>" height="280" width="280"/>

                </div>



                <div class = "personal-info">



                    <div class = "name-position">

                        <div class = "name"><?php echo $profile['full_name']; ?></div>

                        <div class = "position"><?php echo $profile['job'][$lang]; ?></div>

                    </div>



                    <div class = "motto">

                        <div class = "motto-text"><?php echo $profile['motto'][$lang]; ?></div>

                    </div>



                </div>



            </div><!-- /Info -->



            <!-- Content Inner --><div class = "content-inner">



                <!-- Left Sidebar --><div class = "left-sidebar">



                    <div id = "information" class = "block">

                        <h2><?php echo $language['Information']; ?></h2>

                        <div class = "block-content">

                            <div class = "field">

                                <span class = "label"><?php echo $language['Names']; ?>:</span>

                                <span class = "text"><?php echo $profile['names']; ?></span>

                            </div>

                            <div class = "field">

                                <span class = "label"><?php echo $language['LastName']; ?>:</span>

                                <span class = "text"><?php echo $profile['last_name']; ?></span>

                            </div>

                            <div class = "field">

                                <span class = "label"><?php echo $language['Age']; ?>:</span>

                                <span class = "text">
                                    <?php echo $profile['age']; ?>
                                </span>

                            </div>

                            <div class = "field">

                                <span class = "label"><?php echo $language['Nationality']; ?>:</span>

                                <span class = "text"><?php echo $profile['nationality'][$lang]; ?></span>

                            </div>

                            <div class = "field">

                                <span class = "label"><?php echo $language['LivingIn']; ?>:</span>

                                <span class = "text"><?php echo $profile['address']['country']; ?></span>

                            </div>

                        </div>

                    </div>



                    <div id = "skills" class = "block">

                        <h2><?php echo $language['Skills']; ?></h2>

                        <div class = "block-content">

                            <div class = "field">

                                <span class = "label"><?php echo $language['YearsOfExperience']; ?>:</span>

                                <span class = "text"><?php echo $language['MoreOf']; ?> <?php echo $profile['year_experience']; ?></span>

                            </div>

                            <div class = "field">

                                <span class = "label"><?php echo $language['Level']; ?>:</span>

                                <span class = "text"><?php echo $profile['level_experience']; ?></span>

                            </div>

                            <div class = "field">

                                <span class = "label"><?php echo $language['Languages']; ?>:</span>

                                <span class = "text"><?php echo $profile['languages']; ?></span>

                            </div>

                        </div>



                    </div>



                </div><!-- /Left Sidebar -->



                <!-- Content --><div class = "content">



                    <div class = "body">

                        <p><?php echo $profile['self_description'][$lang]; ?></p>

                    </div>



                    <div id = "my-skills" class = "block">

                        <div class = "block-content">

                            <?php foreach ($profile['skills'] as $skill): ?>
                            <div class = "roll-field">

                                <div class = "label"><?php echo $skill[$lang]['label']; ?></div>

                                <div class = "progressbar"><span class = "progress-count" level = "<?php echo $skill[$lang]['percentage']; ?>"></span></div>

                            </div>
                            <?php endforeach; ?>

                        </div>

                    </div>



                </div><!-- /Content -->



                <!-- Cleaner --><div class="clear"></div><!-- /Cleaner -->



            </div><!-- /Content Inner -->



        </div><!-- /Profile-->



        <!-- CV --><div id = "cv">



            <!-- Content Inner --><div class = "content-inner">



                <!-- Left Sidebar --><div class = "left-sidebar page">



                <div id = "programming" class = "block">

                    <h2><?php echo $language['Development']; ?></h2>

                    <div class = "block-content">

                        <?php foreach ($profile['skills'] as $skill): ?>
                            <div class = "field roll-with-description <?php if ($skill['show']): ?> show <?php else: ?> hide <?php endif; ?>">

                                <div class = "roll-button"><span></span></div>

                                <div class = "roll-field">

                                    <div class = "label"><?php echo $skill[$lang]['label']; ?></div>

                                    <div class = "progressbar"><span class = "progress-count" level = "<?php echo $skill[$lang]['percentage']; ?>"></span></div>

                                    <div class = "description"><?php echo $skill[$lang]['description']; ?></div>

                                </div>

                            </div>
                        <?php endforeach; ?>

                        <!-- Cleaner --><div class="clear"></div><!-- /Cleaner -->

                    </div>

                </div>



                <div id = "office-apps" class = "block">

                    <h2><?php echo $language['OfficeApps']; ?></h2>

                    <div class = "block-content">

                        <?php foreach ($profile['office'] as $office => $percentage): ?>
                            <div class = "roll-field">

                                <div class = "label"><?php echo $office; ?></div>

                                <div class = "progressbar"><span class = "progress-count" level = "<?php echo $percentage; ?>"></span></div>

                            </div>
                        <?php endforeach; ?>

                    </div>

                </div>



            </div><!-- /Left Sidebar -->



            <!-- Content --><div class = "content">



                <div id = "employment" class = "block">

                    <h2><?php echo $language['ProfessionalExperience']; ?></h2>

                    <div class = "block-content">

                        <?php foreach ($profile['experience'] as $experience): ?>
                            <div class="text-field date">

                                <div class="text-field-left"><?php echo $language['From']; ?><br/><?php echo $experience[$lang]['from']['month']; ?><br/><?php echo $experience[$lang]['from']['year']; ?><br/><?php echo $language['To']; ?><br/><?php if ($experience[$lang]['to']['type'] == 'now'): ?><?php echo $language['Today']; ?><?php else: ?><?php echo $experience[$lang]['to']['month']?><br/><?php echo $experience[$lang]['to']['year']?><?php endif; ?></div>

                                <div class="text-field-right">

                                    <div class="title"><?php echo $experience[$lang]['title']; ?></div>

                                    <div class="meta without-icon"><span class="tag"><?php echo $experience[$lang]['company']; ?></span></div>

                                    <div class="text"><p><?php echo $experience[$lang]['description']; ?></p></div>

                                </div>

                            </div>
                        <?php endforeach; ?>

                    </div>

                </div>



                <div id = "education" class = "block last">

                    <h2><?php echo $language['Studies']; ?></h2>

                    <div class = "block-content">

                        <?php foreach ($profile['study'] as $study): ?>
                            <div class="text-field date">

                                <div class="text-field-left"><?php echo $language['From']; ?><br/><?php echo $study[$lang]['from']['month']; ?><br/><?php echo $study[$lang]['from']['year']; ?><br/><?php echo $language['To']; ?><br/><?php if ($study[$lang]['to']['type'] == 'now'): ?><?php echo $language['Today']; ?><?php else: ?><?php echo $study[$lang]['to']['month']?><br/><?php echo $study[$lang]['to']['year']?><?php endif; ?></div>

                                <div class="text-field-right">

                                    <div class="title"><?php echo $study[$lang]['title']; ?></div>

                                    <div class="meta without-icon"><span class="tag"><?php echo $study[$lang]['place']; ?></span></div>

                                    <div class="text"><p><?php echo $study[$lang]['description']; ?></p></div>

                                </div>

                            </div>
                        <?php endforeach; ?>
						
                    </div>

                </div>



            </div><!-- /Content -->



            <!-- Cleaner --><div class="clear"></div><!-- /Cleaner -->



        </div><!-- /Content Inner -->



        </div><!-- /CV -->



        <!-- Documents --><div id = "documents">



            <!-- Content --><div class = "content">



                <!-- Documents Letters --><div id="letters" class = "content-inner">



                    <div id = "curriculum-vitae" class = "block last">

                        <h2><?php echo $language['CurriculumVitae']; ?></h2>

                        <div class = "block-content">

                            <?php foreach ($profile['curriculum'] as $curriculum): ?>
                                <div class="text-field file">

                                    <div class="text-field-left"><a href = "<?php if (strtolower($curriculum['format']) != 'url'): echo $urlsPrefix.$curriculum['file']; ?>"><?php echo $language['Download']; ?><br/><?php else: echo $curriculum['file']; ?>" target="_blank"><?php echo $language['GoTo']; ?><br/><?php endif;  ?><?php echo $curriculum['format']; ?></a></div>

                                    <div class="text-field-right">

                                        <div class="title"><?php echo $curriculum['title']; ?> - <?php echo $curriculum['format']; ?></div>

                                        <div class="meta without-icon"><span class="date"><?php if (!is_null($curriculum['last_updated'])): ?><?php echo $language['UpdatedTo']; ?> <?php echo $curriculum['last_updated']; ?> <?php else: ?> <?php echo $language['UpToDate']; ?> <?php endif; ?></span></div>

                                        <div class="text"><p><?php echo $curriculum['info'][$lang]; ?></p></div>

                                    </div>

                                </div>
                            <?php endforeach; ?>

                        </div>

                    </div>





                    <!-- Cleaner --><div class="clear"></div><!-- /Cleaner -->



                </div><!-- /Documents Letters -->


            </div><!-- /Content -->



            <!-- Cleaner --><div class="clear"></div><!-- /Cleaner -->



        </div><!-- /Documents -->



        <!-- Portfolio --><div id = "portfolio">



            <!-- Content --><div class = "content">



            <h2><?php echo $language['Portfolio']; ?></h2>

                    <div id="tag-chooser" class="block tag-chooser"></div>

                <div id = "employment" class = "block">

                    
                    <div class = "block-content">

                        <?php foreach ($profile['portfolio'] as $portfolio): ?>
                            <div class="text-field date <?php echo implode(' ',array_keys(parseTags($portfolio[$lang]['technologies']))) ?>">

                                <div class="text-field-left"><?php echo $portfolio[$lang]['date']['from']; ?><?php if (!is_null($portfolio[$lang]['date']['to']) && ((int)$portfolio[$lang]['date']['from'] != (int)$portfolio[$lang]['date']['to'])): ?><br/><?php echo $language['To']; ?><br/><?php echo $portfolio[$lang]['date']['to']?><?php endif; ?></div>

                                <div class="text-field-right">

                                    <div class="title"><?php if (!is_null($portfolio[$lang]['url'])): ?><a href="<?php echo $portfolio[$lang]['url']; ?>"><?php endif; ?><?php echo $portfolio[$lang]['title']; ?><?php if (!is_null($portfolio[$lang]['url'])): ?></a><?php endif; ?></div>

                                    <div class="meta without-icon"><span class="tag"><?php echo $language['TasksMade']; ?>: <?php echo $portfolio[$lang]['tasks']; ?></span></div>

                                    <div class="meta without-icon"><span class="tag"><?php echo $language['Technologies']; ?>: <?php echo $portfolio[$lang]['technologies']; ?></span></div>

                                    <div class="text"><p><?php echo nl2br($portfolio[$lang]['description']); ?></p></div>

                                </div>

                            </div>
                        <?php endforeach; ?>

                    </div>

                </div>



            </div><!-- /Content -->



            <!-- Cleaner --><div class="clear"></div><!-- /Cleaner -->



        </div><!-- /Portfolio -->



        <!-- Contacts --><div id = "contacts">



            <div id ="contact-map-block" class ="block">

                <h2><?php echo $language['Contact']; ?></h2>

                <!--<div id="map"></div>-->

            </div>



            <!-- Content Inner --><div class = "content-inner">



                <div class = "left-sidebar">

                    <div id = "contact-information" class="block">

                        <h2><?php echo $language['ContactInformation']; ?></h2>

                        <div class = "block-content">

                            <div class = "contact-field address">

                                <div id = "contact-name"><?php echo $profile['full_name']; ?></div>

                                <div id = "contact-address"><?php echo $profile['address']['street']; ?><br/><?php echo $profile['address']['city']; ?>, <?php echo $profile['address']['state']; ?></div> <!-- ORIGINALMENTE TOMABA ESTA DIRECCION PARA EL MAPA PERO LO CAMBIE PARA QUE TOME LA GEOPOSICION-->

                            </div>

                            <div class = "contact-field phone">

                                <?php if (!is_null($profile['mobile'])): ?><div id = "contact-phone"><?php echo $language['Mobile']; ?>: <?php echo $profile['mobile']; ?></div><?php endif; ?>

                                <?php if (!is_null($profile['phone'])): ?><div id = "contact-fax"><?php echo $language['Address']; ?>: <?php echo $profile['phone']; ?></div><?php endif; ?>

                            </div>

                            <div class = "contact-field mail">

                                <div id = "contact-mail"><?php echo $language['Email']; ?>: <?php echo $profile['email']; ?></div>

                                <div id = "contact-site"><?php echo $language['Website']; ?>: <?php echo $profile['website']; ?></div>

                            </div>

                        </div>

                    </div>

                </div>



                <div class = "content">



                    <div id = "contact-form" class = "block">

                        <h3><?php echo $language['SendYourComment']; ?></h3>

                        <!-- Contacts Form --><form id = "contact">
                            <div class="status-success" style="display: none"><?php echo $language['success_message_for_contact_form']; ?></div>
                            <div class="status-error" style="display: none"><?php echo $language['error_message_for_contact_form']; ?></div>
                            <div id = "about">

                                <input id="form-name" title="<?php echo $language['YourName']; ?>" type="text" name="name" class="input" value="" placeholder="<?php echo $language['Name']; ?>*" onblur="if (this.value.length == 0) {this.style='color: #849299';}" onfocus="if (this.value.length == 0) {this.style='color: black';}">

                                <input id="form-email" title="<?php echo $language['YourEmail']; ?>" type="text" name="email" class="input" value="" placeholder="<?php echo $language['Email']; ?>*" onblur="if (this.value.length == 0) {this.style='color: #849299';}" onfocus="if (this.value.length == 0) {this.style='color: black';}">

                                <input id="form-website" title="<?php echo $language['YourWebsite']; ?>" type="text" name="website" class="input" value="" placeholder="<?php echo $language['Website']; ?>" onblur="if (this.value.length == 0) {this.style='color: #849299';}" onfocus="if (this.value.length == 0) {this.style='color: black';}">

                            </div>

                            <div id = "mess">

                                <textarea id="form-message" title="<?php echo $language['YourMessage']; ?>" name="comment" cols="82" rows="6" class="textarea" placeholder="<?php echo $language['WhatCanIDo']; ?>*" onfocus="this.style='color: black';"></textarea>

                            </div>

                            <div id = "send">

                                <input title="<?php echo $language['SendComment']; ?>" type="submit" name="submit" value="<?php echo $language['SendComment']; ?>" class="button">

                            </div>

                        </form><!-- /Contacts Form -->

                    </div>



                </div>



                <!-- Cleaner --><div class="clear"></div><!-- /Cleaner -->



            </div><!-- /Content Inner -->



        </div><!-- /Contacts -->



            <!-- Social Button -->
            <div id = "social">

                <ul class = "pos-button">

                    <li class = "first"><a href = "https://www.facebook.com/sharer.php?u=http%3A%2F%2Fwww.mhidalgo.tk"  class = "facebook" title="Facebook"></a></li>


                    <li><a href = "https://plus.google.com/share?url=http%3A%2F%2Fwww.mhidalgo.tk" class = "google" title="Google+"></a></li>

                    <li><a href = "https://twitter.com/share?url=http%3A%2F%2Fwww.mhidalgo.tk" class = "twitter" title="Twitter"></a></li>

                    <li><a href = "http://www.linkedin.com/shareArticle?mini=true&url=http%3A%2F%2Fwww.mhidalgo.tk&title=MatiasHidalgovCard&summary=MatiasHidalgovCard&source=www.mhidalgo.tk" class = "linkedin" title="Linkedin"></a></li>

                    <li class = "last"><a href = "http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fwww.mhidalgo.tk&amp;media=http%3A%2F%2Fwww.mhidalgo.tk%2Fimages%2Fcontent%2Ffoto.jpg&amp;description=MatiasHidalgovCard" class = "pinterest" title="Pinterest"></a></li>


                </ul>

            </div>
            <!-- /Social Button -->



            <!-- Action Button -->
            <div id = "action">

                <ul class = "pos-button">

                    <!--
                    <li class = "first"><a href = "#" class = "print" title="Print"></a></li>
                    -->

                    <li class = "first last"><a href = "#documents" class = "save" title="Save"></a></li>

                    <!--
                    <li class = "last"><a href = "#" class = "share" title="Share"></a></li>
                    -->

                </ul>

            </div>
            <!-- /Action Button -->



        </div><!-- /Container -->



        <!-- Footer --><div id = "footer">

            <div id = "copyright">© <?php echo date('Y'); ?> All Rights Reserved.</div>

        </div><!-- /Footer -->

        <div class="language-selector">
            <h3 class="language-title"><?php echo $language['LanguageSelector'] ?></h3>
            <h3 class="language-title-first-letter"><?php echo substr($language['LanguageSelector'],0,1); ?></h3>
            <ul class="pos-button">
                <li class = "first"><a href = "/" class = "ES" title="Español"><img src="<?php echo $urlsPrefix; ?>images/i18n/flag.png" title="Español" alt="Español" /></a></li>
                <li class = "last"><a href = "/en/" class = "EN" title="English"><img src="<?php echo $urlsPrefix; ?>images/i18n/flagEN.png" title="English" alt="English" /></a></li>
            </ul>
        </div>

    </div><!-- /Wrapper -->

	<!-- Social adds -->

    <script type="text/javascript" src="<?php echo $urlsPrefix; ?>js/jquery.min.js"></script>

    <script type="text/javascript" src="<?php echo $urlsPrefix; ?>js/jquery.easytabs.min.js"></script>

    <script type="text/javascript" src="<?php echo $urlsPrefix; ?>js/jquery.hashchange.min.js"></script>

    <script type="text/javascript" src="<?php echo $urlsPrefix; ?>js/jquery.isotope.min.js"></script>

    <script type="text/javascript" src="<?php echo $urlsPrefix; ?>js/jquery.adipoli.min.js"></script>

    <script type="text/javascript" src="<?php echo $urlsPrefix; ?>js/jquery.fancybox.pack.js"></script>

    <script type="text/javascript" src="<?php echo $urlsPrefix; ?>js/jquery.placeholder.min.js"></script>

    <script type="text/javascript" src="<?php echo $urlsPrefix; ?>js/response.min.js"></script>

    <script type="text/javascript">
        var GLOBAL_VARS = {
            'lat' : '<?php echo $profile['address']['lat']; ?>',
            'long': '<?php echo $profile['address']['long']; ?>',
            'address': 'Carlos Gardel 1731, Tandil, Argentina',
            'contact': {
                'urlPost'   : '<?php echo $urlsPrefix; ?>contact.php'
            },
            'portfolioTags': <?php echo json_encode(getAllTags($profile,$lang)); ?>
        };


        function validateForm (form) {
            var returned = true,
                message = "",
                inputName = $('#form-name'),
                inputEmail = $('#form-email'),
                inputMessage = $('#form-message'),
                inputWebsite = $('#form-website');
            if (inputName.val() === "") {
                returned = false;
                message = "<?php echo $language['FormValidationNameRequiredMessage']; ?>";
            }
            if (inputEmail.val() === "" && !isEmail(inputEmail.val()) && returned) {
                returned = false;
                message = "<?php echo $language['FormValidationEmailRequiredMessage']; ?>";
            }
            if (inputMessage.val() === "" && returned) {
                returned = false;
                message = "<?php echo $language['FormValidationMessageRequiredMessage']; ?>";
            }
            if (inputWebsite.val() !== '' && !isUrl(inputWebsite.val()) && returned) {
                returned = false;
                message = '<?php echo $language['FormValidationWebsiteUrlMessage']; ?>';
            }

            if (message !== "") {
                alert(message);
            }
            return returned;
        }

        function appendTagsChooser() {
            $.each(GLOBAL_VARS.portfolioTags,function(index,tag) {
                $('#tag-chooser').append('<div class="tag ' + index + '">' + tag + '</div>')
            });
        }

        $(document).ready(function(){
            $('input, textarea').placeholder();
            //appendTagsChooser();
        });
    </script>

    <script type="text/javascript" src="<?php echo $urlsPrefix; ?>js/custom.js"></script>

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-42621446-1', 'mhidalgo.tk');
	  ga('send', 'pageview');

	</script>
</body>

</html>
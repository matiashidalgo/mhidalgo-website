$(document).ready(function(){
    
    /* ---------------------------------------------------------------------- */
    /*	Progressbar load page
    /* ---------------------------------------------------------------------- */
    $(".progressbar > span").each(function() {
        var bar = $(this);
        var level = $(this).attr('level');
        bar.width(0);
        bar.animate({
            width: level+'%'
        }, 800);
    });
	
    /* ---------------------------------------------------------------------- */
    /*	Tabs Menu Major
    /* ---------------------------------------------------------------------- */
    var $tabscontainer = $("#wrapper");

    $tabscontainer.easytabs({
        animate			: true,
        updateHash		: true,
        transitionIn	: 'slideDown',
        transitionOut	: 'slideUp',
        animationSpeed	: 600,
        tabActiveClass	: 'active'
    });
     /*    Progressbar load swich tabs     */
    $tabscontainer.bind('easytabs:midTransition', function() {
        $(".progressbar > span").each(function() {
            var bar = $(this);
            var level = $(this).attr('level');
            bar.width(0);
            bar.animate({
                width: level+'%'
            }, 800);
        });
    
		/* End */
		/* ---------------------------------------------------------------------- */
		/*	Google Maps
		/* ---------------------------------------------------------------------- */
		/*var $map 				= $('#map'),
			$tabContactClass 	= ('contacts');

		$tabscontainer.bind('easytabs:after', function(evt,tab,panel) {
			if ( tab.hasClass($tabContactClass) ) {
				$map.gMap({
					address: GLOBAL_VARS.address,
					zoom: 16,
					markers: [
						{ 'address' : GLOBAL_VARS.address }
					]
				});
			}
		});*/
    });
	
    
    /* ---------------------------------------------------------------------- */
    /*	ProgressBar Show/Hide Description
    /* ---------------------------------------------------------------------- */
    $(".roll-with-description.hide").each(function(){
        $(this).each(function(){
            $(this).find(".description").css('display','none')
        })
    });

    $(".roll-with-description.show").each(function(){
        $(this).each(function(){
            $(this).find(".description").css('display','block')
        })
    });

    $(".roll-with-description").each(function(){
        $(this).click(function(){
            var speed = 600;
            if ($(this).hasClass("show")) {
                $(this).removeClass("show");
                $(this).find(".description").slideUp(speed);
                setTimeout($(this).addClass("hide"), speed);

            }
            else if ($(this).hasClass("hide")) {
                $(this).removeClass("hide");
                $(this).find(".description").slideDown(speed);
                setTimeout($(this).addClass("show"), speed);
            }
        })
    });
	
    /* ---------------------------------------------------------------------- */
    /*	Block Show/Hide Description
    /* ---------------------------------------------------------------------- */
    $(".hidden").each(function(){
        $(this).each(function(){
            $(this).find(".block-content").css('display','none')
        })
    });

    $(".showing").each(function(){
        $(this).each(function(){
            $(this).find(".block-content").css('display','block')
        })
    });

    
    /* ---------------------------------------------------------------------- */
    /*	Contact Form
     /* ---------------------------------------------------------------------- */

    // Needed variables
    var $contactform 	= $('#contact');

    $contactform.submit(function(){
        if (validateForm($(this))) {
            $.ajax({
                type: "POST",
                url: GLOBAL_VARS.contact.urlPost,
                data: $(this).serialize(),
                success: function(msg)
                {
                    // Hide any previous response text
                    $(".status-error,.status-success").hide();
                    if(msg == 'OK'){
                        response = $(".status-success").show();//'<div class="status-success">'+ GLOBAL_VARS.contact.successMsg +'</div>';
                    }
                    else if(msg == 'VALIDATION-NON-PASSED'){
                        response = $(".status-error").show();//'<div class="status-error">'+ GLOBAL_VARS.contact.errorMsg +'</div>';
                    } else {
                        response = $(".status-error").html(msg).show();//'<div class="status-error">'+ msg +'</div>';
                    }
                    // Show response message
                    //$contactform.prepend(response);
                }
            });
        }
        return false;
    });
    /* End */
    $(window).resize(function(){
        $('body').css('min-height',$(window).height());
    });
    $('body').css('min-height',$(window).height());
});

function isEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}

function isUrl(url) {
    var regexp = /(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/
    return regexp.test(url);
}

jQuery(document).ready(function ($) {
    
    //"use strict";

    formValidate();
    phoneValidation();    
    quickJumps();
    scroll();
    mobileBanner();

    function scroll() {        

        $(window).scroll(function () {

            if ($(this).scrollTop() > 300) {
                $('.scroll-top').fadeIn();
            } else {
                $('.scroll-top').fadeOut();
            }

            var position = $(window).scrollTop();  
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();
                if (scroll > position) {
                    //console.log('scrollDown');                    
                    //$('header').fadeOut('slow');
               
                } else {
                    //console.log('scrollUp');                    
                    //$('header').fadeIn('slow');
                }
                position = scroll;
            });           

        });
        $('.scroll-top').click(function () {
            $('html, body').animate({ scrollTop: 0 }, 800);
            return false;
        });

    };
    
    function mobileBanner() {
        $(window).scroll(function() {
              if ($(this).scrollTop() > $(document).height() - $(window).height() - 100) {
              $('.foot').fadeOut();
            }
            else {
              $('.foot').fadeIn(200);
            }
    });
    $('a[href="#"]' ).click( function(e) {
      e.preventDefault();
    });
    };

    function phoneValidation() {
        $(function(){
          $(".phone").mask("(999) 999-9999");
          $(".phone").on("blur", function() {
              var last = $(this).val().substr( $(this).val().indexOf("-") + 1 );
              if( last.length == 5 ) {
                  var move = $(this).val().substr( $(this).val().indexOf("-") + 1, 1 );
                  var lastfour = last.substr(1,4);
                  var first = $(this).val().substr( 0, 9 );
                  $(this).val( first + move + '-' + lastfour );
              }
          });
        });
    };

    function formValidate() {

        $(document).ready(function(){
            jQuery.validator.addMethod("phoneValidate", function(phone_number, element) {
               phone_number = phone_number.replace(/\s+/g, ""); 
               return this.optional(element) || phone_number.length > 9 &&
               phone_number.match(/^(1-?)?(\([2-9]\d{2}\)|[2-9]\d{2})-?[2-9]\d{2}-?\d{4}$/);
           }, "*Enter a valid phone number");
            var u   = 'res/submit';
            $("#contact_form").validate({meta:"validte"});
            $("#contact_submit").click(function(obj){
                if($("#contact_form").valid()){
                    
                    $('body').append('<iframe id="hidden_iframe" name="hidden_iframe" onload="if(submitted){parent.window.location=\'/thank-you\';}" style="display: none;"></iframe>');
                        $('#contact_form').submit();
                        __ctm.form.track('app.calltrackingmetrics.com',
                            'FRT472ABB2C5B9B141A3F4C355E1FA7B72E596AA6349BCD7BCF4D765013C5848F05',
                            "8448885391",
                            {
                                country_code: "1",
                                name: document.getElementById("contact_name").value,
                                phone: document.getElementById("contact_number").value,
                                custom: { "message": document.getElementById("contact_message").value }
                            });
                } else{
                    alert('Please Fill Out Required Fields');
                }
            });
        });
    };

    function quickJumps() {
        $('body').scrollspy({target: ".header", offset: 500});   
        $("#quick-jump a").on('click', function(event) {
          if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;
            $('html, body').animate({
              scrollTop: $(hash).offset().top
            }, 800, function(){
              window.location.hash = hash;
            });
          }
        });
    };


});
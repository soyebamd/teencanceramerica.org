//Functions
jQuery(document).ready(function(){

  jQuery('.iwacontact').iwacontactForm();

  jQuery(".page-template-sidebar-form-php .control_dropdown").selectbox();

  //Donation Dropdowns
  jQuery(".control_dropdown").selectbox();

  //Donation Buttons
  jQuery("#donate_btns_5").click(function () {var text = jQuery(this).text();jQuery("input[id='donation.amount']").val("$5.00");});
  jQuery("#donate_btns_10").click(function () {var text = jQuery(this).text();jQuery("input[id='donation.amount']").val("$10.00");});
  jQuery("#donate_btns_25").click(function () {var text = jQuery(this).text();jQuery("input[id='donation.amount']").val("$25.00");});
  jQuery("#donate_btns_50").click(function () {var text = jQuery(this).text();jQuery("input[id='donation.amount']").val("$50.00");});
  jQuery("#donate_btns_100").click(function () {var text = jQuery(this).text();jQuery("input[id='donation.amount']").val("$100.00");});
  jQuery("#donate_btns_250").click(function () {var text = jQuery(this).text();jQuery("input[id='donation.amount']").val("$250.00");});


  //Shop Slider - Adidas
  jQuery('#top_search_overlay').click(function(){
  jQuery('#top_search_overlay').css({ display: "none" } );   
  jQuery('.top_search').animate({ width: "180px" }, 500 );   
  jQuery('.top_search_input').animate({ width: "140px" }, 500 );    
  });

  var metaslider_1955018760 = function(jQuery) {
  jQuery('#metaslider_1955018760').nivoSlider({ 
  boxCols: 7,
  boxRows: 5,
  pauseTime: 5000,
  effect: 'fade',
  controlNav: true,
  directionNav: false,
  pauseOnHover: true,
  animSpeed: 600,
  prevText: 'Previous',
  nextText: 'Next',
  slices: 15
  });
  };
  var timer_metaslider_1955018760 = function() {
  if (window.jQuery && jQuery.isReady) {
  metaslider_1955018760(window.jQuery);
  } else {
  window.setTimeout(timer_metaslider_1955018760, 100);
  }
  };
  timer_metaslider_1955018760();


  //Fancybox
  jQuery(".fancybox").fancybox();



  //Form
  jQuery('#contact_form').ajaxForm(function(){}); 
  //jQuery('.iwacontact').ajaxForm(function(){});
  jQuery('.contact_form_submit').click(function(){
  jQuery('.contact_page_sent').animate({"opacity": "1" }, 400 ).delay(5000).animate({"opacity": "0"}, 400 );
  })
  /*
  jQuery('.ajax-submit').click(function(){
  jQuery('.ajax-result').animate({"opacity": "1" }, 400 ).delay(5000).animate({"opacity": "0"}, 400 );
  })*/

  // Hide inactive Navigation Buttons
  if(jQuery(".nav-previous").text() == "") { 
  jQuery(".nav-previous").css("display","none");
  }
  if(jQuery(".nav-next").text() == "") { 
  jQuery(".nav-next").css("display","none");
  }

  // Twitter
  jQuery(function () {
    // start jqtweet!
    JQTWEET.loadTweets();
  }); 

  //Home Title
  var maxL = 50;    
  jQuery('div.entry-title').each(function (i, div) {
    var text = jQuery(div).text();
    if(text.length > maxL) {
        var begin = text.substr(0, maxL),
            end = text.substr(maxL);
        jQuery(div).html(begin)
            .append(jQuery('<a class="readmsore"/>').attr('href', '#').html('...'))
            .append(jQuery('<div class="hidden" />').html(end));
    }
  });

  var maxL = 130;    
  jQuery('div.entry-description').each(function (i, div) {
    var text = jQuery(div).text();
    if(text.length > maxL) {
        var begin = text.substr(0, maxL),
            end = text.substr(maxL);
        jQuery(div).html(begin)
            .append(jQuery('<a class="readmsore"/>').attr('href', '#').html('...'))
            .append(jQuery('<div class="hidden" />').html(end));
    }
  });

   
  // SUBSCRIBE VALIDATE
  jQuery('#subscribe_form').submit(function() {
  jQuery('#subscribe_form').css({"color": "rgba(0,0,0,0.2)" } );
  jQuery('.subscribe_response').css({"display": "block" } );
  jQuery('.subscribe_response').delay(500).animate({"opacity": "1"}, 100 );

  setTimeout(function() {
    jQuery('#subscribe_form').css({"color": "rgba(255,255,255,0.1)" } );
    jQuery('.subscribe_response').animate({"opacity": "0" }, 500);
    jQuery('.subscribe_response').css({"display": "none" } );
    jQuery('#subscribe_form').closest('form').find("input[type=text]").val("Email Address");    
    }, 2200); 
        
  jQuery.ajax({
    url: 'https://www.teencanceramerica.org/wp-content/themes/twentytwelve/blocks/forms/formdata.php',
    data: 'ajax=true&email=' + escape(jQuery('#email').val()),
    success: function(msg) {
      if(msg.indexOf("already subscribed to list") !== -1)
      {
        msg = "Email is already subscribed.";
      }
      jQuery('.subscribe_response').html(msg);
    }
  });
  return false;

  });

  // Replace Gallery Links with Video links in Media > Videos on site
  var linkReplace;
  jQuery('.set_5').each(function() {
  var linkReplace = jQuery(this).attr('title') + "?iframe=true";
  jQuery(this).attr('href', linkReplace);
  jQuery(this).attr('rel', 'wp-video-lightbox[iframes]');
  });


});











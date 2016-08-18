
$(document).ready(function(){
					   
										  
	
      $(window).on('scroll', function() {  
									  
									  
									 
									   
									   
									   
						   if($(window).scrollTop() >= $('#video-view').offset().top+100){ /*$('#scroll').hide();*/  $('#main-nav li a').removeClass('active'); $('#main-nav li:first a').addClass('active');} 
						   
						    if($(window).scrollTop() <= $('#video-view').offset().top){ /*$('#scroll').show();*/} 
							
							
							
							
							
					if($(window).scrollTop() >= $('#part2').offset().top-10){  $('#main-nav li a').removeClass('active'); $('#main-nav li:nth-child(2) a').addClass('active');} 
					
					
					if($(window).scrollTop() >= $('#part3').offset().top-10){  $('#main-nav li a').removeClass('active'); $('#main-nav li:nth-child(3) a').addClass('active');} 
					
					
					if($(window).scrollTop() >= $('#part4').offset().top-10){  $('#main-nav li a').removeClass('active'); $('#main-nav li:nth-child(4) a').addClass('active');} 
					
					
					if($(window).scrollTop() >= $('#part5').offset().top-100){  $('#main-nav li a').removeClass('active'); $('#main-nav li:nth-child(5) a').addClass('active');} 
							
							
							
							});
						 
						   
					function full_width(){	   var jw = $(window).innerHeight();
						   
						  // alert(jw	);
						  
						  $('.tca-fullPage, #cover, #main-nav').css({'height':jw+'px'})
						  
						// $('#wrapper').css({'margin-top':jw+'px'})
						
					}
					
					
					window.onload = full_width();
						  
						  $(window).resize(function(){
													
													full_width();
													
													});
						  
						  //Parallex effect
						  
						$('#wrapper').parallax("-50%", 0.05	);
						    
						/*   $('.tca-fullPage').parallax();*/
						  
						  
						 
						  $("#main-nav a, #scroll").mPageScroll2id({

      
				
			});
						  
						  
	
	
					var ss = $('video#bg-video').height();
	
	 $('#video-view').css({'height':ss+'px'})
						  });


$( window  ).load(function() {

	var ss = $('video#bg-video').height();
	
	 $('#video-view').css({'height':ss+'px'})
						  
						  //alert(ss);
						  
});

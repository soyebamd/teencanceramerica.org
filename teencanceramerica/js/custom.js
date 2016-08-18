// JavaScript Document

$(document).ready(function(){


//MOB FUCNTION
  
  
  			
          
$("#mob-expand-button").click(function()
{
   
  							
		
		
      $('#slide-menu').animate({ left: '0' }, 500);
	  
	  
       $('#wrapper').animate({ left: '70%' }, 500);
	   
	   $('body').css('overflow-x','hidden');
	   
	   $('#close-the-mobnav').css('display','inline-block');
	   
	    $(this).css('display','none');
  
  
		   $('#mob-menu').css('float','left');
		
		
	   
	   
   
    });




$("#close-the-mobnav").click(function()
{
   
  							
		  $('#mob-menu').css('float','none');
		
      $('#slide-menu').animate({ left: '-70%' }, 500);
	  
	  $(this).css('display','none');
	  
	    $('#mob-expand-button').css('display','inline-block');
	   
	  
	  $('#wrapper').animate({ left: '0' }, 500);
	  
	   $('body').css('overflow-x','hidden');
      
   
    });


          var  mob_width= $( window ).width();
         
          function dv_width(){
            
            if( mob_width >= 767){
          
           $('#slide-menu').animate({ left: '-70%' }, 500);
               $('#wrapper').animate({ left: '0' }, 500);
              
            
          
         
          
          }
            
          }
          
          dv_width(); 
          
          
        
          

          
          
          
          //end mob
          
          

						   
						   
						   
	$("#divide article:nth-child(2n)").after("<div style='clear:both; width:100%; height:20px;'></div>");
	
	
	$("#hernan-slider-post article:nth-child(4n)").after("<div style='clear:both; width:100%; height:50px;'></div>");
	
	
	$(".teen-posts article:nth-child(2n)").after("<div style='clear:both; width:100%; height:50px;'></div>");
	
	$('.road-sub:nth-child(3n)').after("<div style='clear:both; width:100%; height:30px;'></div>");
	
	
	
	
	
	
	
						   
					
		//cache nav
		
		/*
		var nav = $("#menu-main-menu");
				
		//add indicators and hovers to submenu parents
		nav.find("li").each(function() {
			if ($(this).find("ul").length > 0) {
				
				$("<span>").text("").appendTo($(this).children(":first"));

				//show subnav on hover
				$(this).mouseenter(function() {
					$(this).find("ul").stop(true, true).slideDown();
				});
						
				//hide submenus on exit
				$(this).mouseleave(function() {
					$(this).find("ul").stop(true, true).slideUp();
				});
			}
		});
	
	
	*/
	
	$("ul#menu-get-involved, ul#news-event").slideUp();
	
/*	$('#main, #top-header').hover(function(){
							  
							  $("ul#menu-get-involved, ul#news-event").slideUp();
							  
							  }); */
	
	
	
	
	//get involved
/*	$('#menu-item-38').mouseenter(function() {
									  
									 
					$("body").find("ul#menu-get-involved").stop(true, true).slideDown();
					$("body").find("ul#news-event").stop(true, true).slideUp()
				});
	
	
	 $('ul#menu-get-involved').mouseleave(function(){
					$("body").find("ul#menu-get-involved").stop(true, true).slideUp()
				});
	 */

	
	
	
	
	//news and events
	
/*	
		$('#menu-item-5222').mouseenter(function() {
												 
												 
									$("body").find("ul#menu-get-involved").stop(true, true).slideUp()  
									 
					$("body").find("ul#news-event").stop(true, true).slideDown();
				});
	
	
	 $('ul#news-event').mouseleave(function(){
					$("body").find("ul#news-event").stop(true, true).slideUp()
				});
	
				*/
				
				//
				
				$("ul#no-menu-get-involved, ul#no-news-event").slideDown();
	
						   
						   
						   $('#home-slider').bxSlider({
													  
													  mode:'fade',
													  adaptiveHeight:true,
													  auto:true
													  
													  
													  });
						   
						    $('#news-posts').bxSlider({
													  
													 
													  adaptiveHeight:true,
													  auto:false,
													   nextSelector: '#slider-next',
  prevSelector: '#slider-prev',
  nextText: '<i class="fa fa-arrow-left">',
  prevText: '<i class="fa fa-arrow-right">',
  pager:false
													  
													  
													  });
							
							
							

	   $('#hernan-slider-post*****').bxSlider({
													  
													  mode:'fade',
													  adaptiveHeight:true,
						
		
		controls: true,
		
		minSlides: 4,
		maxSlides: 4,
		
		slideWidth:300
		
													
													  
													  
													  });
						   
	
						   
						   $('.celeb-posts:first, .celeb-posts:nth-child(3)').css({'margin-top':0});
						  
						   
						   
						   });

$('#home-slider img').load(function(){
									
									
									
									$("#home-slider").fadeIn(1000);
									$(".loading").hide();
									
						  
	//upcoming feature post
	
	
	
	$('#upcoming-events-posts .blog-feature-img:first').show();
	
	$('#upcoming-events-posts ul li:first').addClass('active');
	
	
	
	
						  
						  
						  }); //end document ready function
jQuery(function(){
  var zoomEffectID = $("body");

  jQuery("#mobile-menu").click(function(e){
    e.preventDefault();
      if(jQuery("nav ul.menu").hasClass("active-menu")){
        jQuery("nav ul.menu").removeClass("active-menu").addClass("inactive-menu");
        jQuery(zoomEffectID).removeClass("showAnimation").addClass("hideAnimation");
      }else{
        jQuery("nav ul.menu").addClass("active-menu").removeClass("inactive-menu");
        jQuery(zoomEffectID).addClass("showAnimation").removeClass("hideAnimation");
      }
  });

	var isDesktop = (function() {
		return !('ontouchstart' in window) || !('onmsgesturechange' in window);
	})();
	window.isDesktop = isDesktop;

  jQuery(window).resize(function(){
  	if( isDesktop ){ 
        jQuery("nav ul.menu").removeClass("active-menu").addClass("inactive-menu");
        jQuery(zoomEffectID).removeClass("showAnimation").addClass("hideAnimation");
	}else{
		jQuery("nav ul.menu").attr("style", "overflow:scroll");
	}
  });


    /* 
    $(window).scroll( function(){
    
        $('.row').each( function(i){
            
            var bottom_of_object = $(this).position().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            
            if( bottom_of_window > bottom_of_object ){
                
                $(this).animate({'opacity':'1'},500);
                    
            }
            
        }); 
    
    });
    */

var imageList = [];
var fileextension = ".png";
$.ajax({
    //This will retrieve the contents of the folder if the folder is configured as 'browsable'
    url: dir,
    success: function (data) {
        //Lsit all png file names in the page
        //$(data).find("a:contains(" + fileextension + ")").each(function () {
        $(data).find("a:contains(.png), a:contains(.jpg), a:contains(.jpeg)").each(function () {
            var tempFile = this.href.replace(window.location.host, "");
            var filename = tempFile.substring(tempFile.lastIndexOf("/") + 1, tempFile.length);//.replace("http:///", "");
            //$("body").append($("<img src=" + dir + filename + "></img>"));
            imageList.push(dir + filename);
            //console.log((dir + filename));
        });
    }
}).complete(function(){

	  var timer = null;

	   var myLoader = new html5Preloader();
	    
	    myLoader.addFiles.apply(myLoader, imageList);

	    myLoader.on('finish', function(){
	        
	        timer=null;
	        clearInterval(timer);
	        
	      });


	       timer=setInterval(function(){
	        $('section[data-splash-value]').text(Math.floor(myLoader.getProgress()*100)+'%');
	        $('section[data-splash-image-left]').css({'width':Math.floor((myLoader.getProgress()*50))+'%'});
	        $('section[data-splash-image-right]').css({'width':Math.floor((myLoader.getProgress()*50))+'%'});
	        if(Math.floor((myLoader.getProgress()*100))==100){
	          
	          $('span#loader-main-control').fadeOut(400);
	          $('span#loader-view-control').delay(500).fadeIn(700);
	          
	        }
	        
	      }, 200);

	});

  jQuery('section[data-splash-image-left], section[data-splash-image-right]').css({
    "margin-top": jQuery(window).height()/2.2
  });

  jQuery(window).resize(function(){
    jQuery('section[data-splash-image-left], section[data-splash-image-right]').css({
      "margin-top": jQuery(window).height()/2.2
    });
  });


});
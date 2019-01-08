//Slide Ticker
(function($){
  $.fn.list_ticker = function(options){
    
    var defaults = {
      speed:4000,
	  effect:'slide'
    };
    var options = $.extend(defaults, options);
    return this.each(function(){
      var obj = $(this);
      var list = obj.children();
      list.not(':first').hide();
      
      setInterval(function(){
        
        list = obj.children();
        list.not(':first').hide();
        
        var first_li = list.eq(0)
        var second_li = list.eq(1)
		
		if(options.effect == 'slide'){
			first_li.slideUp();
			second_li.slideDown(function(){
				first_li.remove().appendTo(obj);
			});
		} else if(options.effect == 'fade'){
			first_li.fadeOut(function(){
				second_li.fadeIn();
				first_li.remove().appendTo(obj);
			});
		}
      }, options.speed)
    });
  };
})(jQuery);

//Onlinestatus abfragen
var lastOnlineState = '';
function onlinestatus() {
    $.get("./src/live.php?online=1", function(response) {
        var online = (response !== '');
        if(online) {
            $(".online").fadeIn();
            $(".offline").fadeOut();
        } else {
            $(".online").fadeOut();
            $(".offline").fadeIn();
        }
        if (online !== lastOnlineState) {
            $(".noinfo").fadeOut();
            lastOnlineState = online;
        }
    });
}
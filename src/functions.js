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

//Spielerinfo Abfragen
$(document).ready(function() {
    $('#items').list_ticker({
        speed:5000,
        effect:'fade'
    });

    $("#serverstatus").load("./src/live.php?serverstatus=1");
    var serverstatus = setInterval(
    function() {
        $("#serverstatus").load("./src/live.php?serverstatus=1");
    }, 10000);

    $("#livelog").load("./src/live.php?livelog=1");
    var livelog = setInterval(
    function() {
        $("#livelog").load("./src/live.php?livelog=1");
    }, 10000);

    //Server starten
    $("button[name='start_server']").click(function(e) {
        e.preventDefault();
        $(this).fadeOut();
        $(".noinfo").fadeIn();
        $(".offline p:first-of-type").fadeOut();
        $.post('', {start_server: true}, function() {
            $("button[name='stopp_server']").fadeIn();
        });
    });

    //Server stoppen
    $("button[name='stopp_server']").click(function(e) {
        e.preventDefault();
        $(this).fadeOut();
        $(".noinfo").fadeIn();
        $("#console").fadeOut();
        $.post('', {stopp_server: true}, function() {
            $("button[name='start_server']").fadeIn();
        });
    });

    //Command ausführen
    $("#sendcommand").click(function(e) {
        e.preventDefault();

        var commandInput = $("input[name='command']");

        $.post('', {command: commandInput.val()}, function() {
            commandInput.val('');
        });
    });
    onlinestatus();
    setInterval(onlinestatus, 10000);
});
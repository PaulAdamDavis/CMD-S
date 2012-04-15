
(function($) {

    $(function(){
    
        $(window).keypress(function(event) {
		    if (!(event.which == 115 && event.ctrlKey) && !(event.metaKey)) return true;
		    $("#publish[name='save']").click();
		    event.preventDefault();
		    return false;
		});
    
    });

})(jQuery);
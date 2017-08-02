( function( $ ) {
$( document ).ready(function() {
//var printonclick=$(".hupso-share-buttons a[onclick='window.print();']").attr('href');

$(".hupso-share-buttons a[onclick='window.print();']").attr("onclick","PrintElem('#print_me')");
$('#cssmenu').prepend('<div id="indicatorContainer"><div id="pIndicator"><div id="cIndicator"></div></div></div>');
    var activeElement = $('#cssmenu>ul>li:first');

    $('#cssmenu>ul>li').each(function() {
        if ($(this).hasClass('active')) {
            activeElement = $(this);
        }
    });


	var posLeft = activeElement.position().left;
	var elementWidth = activeElement.width();
	posLeft = posLeft + elementWidth/2 -6;
	if (activeElement.hasClass('has-sub')) {
		posLeft -= 6;
	}

	$('#cssmenu #pIndicator').css('left', posLeft);
	var element, leftPos, indicator = $('#cssmenu pIndicator');
	
	$("#cssmenu>ul>li").hover(function() {
        element = $(this);
        var w = element.width();
        if ($(this).hasClass('has-sub'))
        {
        	leftPos = element.position().left + w/2 - 12;
        }
        else {
        	leftPos = element.position().left + w/2 - 6;
        }

        $('#cssmenu #pIndicator').css('left', leftPos);
    }
    , function() {
    	$('#cssmenu #pIndicator').css('left', posLeft);
    });

	$('#cssmenu>ul').prepend('<li id="menu-button"><a>Menu</a></li>');
	$( "#menu-button" ).click(function(){
    		if ($(this).parent().hasClass('open')) {
    			$(this).parent().removeClass('open');
    		}
    		else {
    			$(this).parent().addClass('open');
    		}
    	});
$("#showCalendarLI_1").css("display","block");
   var i=1;
   setInterval(function(){
       $("[id^=showCalendarLI_]").css("display","none");
       $("#showCalendarLI_"+i).css("display","block");
       if(i<3)
           i++;
       else
           i=1;
   }, 3000);

    $("#lastNewsLI_1").css("display","block");
   var j=0;
   setInterval(function(){
       $("[id^=lastNewsLI_]").css("display","none");
       $("#lastNewsLI_"+j).css("display","block");
       if(j<4)
           j++;
       else
           j=0;
   }, 3000);

		
		});
} )( jQuery );

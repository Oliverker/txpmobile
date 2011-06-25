// Grow textareas
			$(document).ready(function(){			
				$('textarea').ata();
			});	
			
			
// Nav Slide & Hide everything else when active
$(function()
{
		
	$("#nav-content").hide();
	
	$("a.content-toggle").toggle(function()
	{
		$("div#nav-content").slideDown();
		$("li.tabup a").addClass("visible"); 
		$(".txp-container").addClass("hide"); 
		$("#messagepane").addClass("hide"); 
		$(".txp-control-panel").addClass("hide"); 
	},
	function()
	{
		$("div#nav-content").slideUp();
		$("li.tabup a").removeClass("visible"); 
		$(".txp-container").removeClass("hide"); 
		$("#messagepane").removeClass("hide"); 
		$(".txp-control-panel").removeClass("hide"); 
	});
		
});


// Slide twitter Options
$(function()
{
		
	$("#arc_twitter_options").hide();
	
	$("#arc_twitter .lever a").toggle(function()
	{
		$("#arc_twitter_options").slideDown();
	},
	function()
	{
		$("#arc_twitter_options").slideUp();
	});
		
});


// Orientation

  $(document).ready( function(){
    var height = $(window).height();
    var width = $(window).width();

    if(width>height) {
      // Landscape
      $("body").addClass('landscape');
    } else {
      // Portrait
      $("body").addClass('portrait');
    }

   });
   
  $(window).resize( function(){
    var height = $(window).height();
    var width = $(window).width();

    if(width>height) {
      // Landscape
      $("body").addClass('landscape');
      $("body").removeClass('portrait');
    } else {
      // Portrait
      $("body").addClass('portrait');
      $("body").removeClass('landscape');
    }

   });

// Hide Address Bar on mobile
addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);

function hideURLbar(){
window.scrollTo(0,1);
}

			// Add <P> for styling
			$(document).ready(function(){			
				$('<p class="timestamp">Timestamp</p>').insertBefore('p.publish-now');
				$('<p class="comments">Comments</p>').insertBefore('p.comment-annotate');
				$('<p class="expire">Expires</p>').insertBefore('p.date.expires');
				$('<div id="navigation"></div>').insertAfter('div#messagepane');

			});


$( init );
function init() {
  $('#configuration_content').appendTo( $('#article-main') );
  $('#supporting_content').appendTo( $('#article-main') );
  $('form[name=imagelistform]').appendTo( $('#image_container') );
  $('#nav-content').appendTo( $('#navigation') );

}
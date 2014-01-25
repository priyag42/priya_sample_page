
/*__________________ Scroll related____________________  */
$(function(){
	$(window).scroll(function() {
		if($(this).scrollTop() > 1000) {
			$('#backtotop').fadeIn();	
		} else {
			$('#backtotop').fadeOut();
		}
	});
 
	$('#backtotop').click(function() {
		$('html,body').animate({scrollTop:0},800);
	});	

$("#ancScrollToBottom").click(function () {
    $("html, body").animate({
        scrollTop: $(document).height()
    }, 1000);
});


$("#blue").click(function () {
    $('html,body').animate({
        scrollTop: $("#dvMain1").offset().top
    }, 1000);
});

$("#green").click(function () {
    $('html,body').animate({
        scrollTop: $("#dvMain3").offset().top
    }, 1000);
});
$("#violet").click(function () {
    $('html,body').animate({
        scrollTop: $("#dvMain4").offset().top
    }, 1000);
});
$("#lightblue").click(function () {
    $('html,body').animate({
        scrollTop: $("#dvMain5").offset().top
    }, 1000);
    
});
$("#trans").click(function () {
    $('html,body').animate({
        scrollTop: $("#dvMain2").offset().top
    }, 1000);
});
$("#footer").click(function () {
    $('html,body').animate({
        scrollTop: $("#dvMain6").offset().top
    }, 1000);
});

});//]]> 


$('body').scrollspy();
/*__________________ Scroll related____________________  */

/*__________________dvMain2 related___________________*/
$(document).ready(function(){		
	$("#priya1").click(function(){
		$("#priya2").slideToggle("slow");
	});
		
	
	var counter = 0;
	$("#upvote").click(function(){
	counter++;
	$("#votes").html(counter+" People liked it.").fadeIn('slow').delay(1500).fadeOut('slow');
		
	});	
		
	$("#downvote").click(function(){
	counter--;
	$("#votes").html(counter+" People liked it.").fadeIn('slow').delay(1500).fadeOut('slow');
		
	});		
		
		
});






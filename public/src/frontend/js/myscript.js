/*----- this my first code for Jqurey ------*/
$(document).ready(function() {
	$("#tab2").hide();
	$("#tab3").hide();
	$("#tab4").hide();
	$("#tab5").hide();
	$(".tabs-menu a").click(function(event){
		event.preventDefault();
		var tab=$(this).attr("href");
		$(".tab-grid").not(tab).css("display","none");
		$(tab).fadeIn("slow");
	});
});
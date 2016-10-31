
$(document).ready(function(){

	$(".flipme").click(function(){
		$(".front").addClass("hide");
		$(".back").removeClass("hide");
	});

$(".choose").click(function(){
		$(".back").addClass("hide");
		$(".payment").removeClass("hide");
	});


$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
});





})



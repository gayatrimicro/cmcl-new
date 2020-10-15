$(".navToggle").click (function(){
  $(this).toggleClass("open");
  $("nav").toggleClass("open");
  $(".MenuShow").toggleClass("Opc1");
});

$(".PosLi a").click(function(){
	$(this).next().css("right","0%");
	$(".MenuShow").css("left","-100%");
});

$(".Bck").click(function(){
	$(this).parent().parent().parent().css("right","-100%");
	$(".MenuShow").css("left","0%");
});
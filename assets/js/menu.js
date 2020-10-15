function showMenu(val){
	
	var visible_div = $(".menu-list .menu-item:nth-child("+val+") .sub-menu").css('display');
	if(visible_div == "table"){
		$(".menu-list .menu-item:nth-child("+val+") .sub-menu").css({"display":"none"});
		return;
	}
	$(".menu-list .menu-item .sub-menu").css({"display":"none"});
	$(".menu-list .menu-item:nth-child("+val+") .sub-menu").css({"display":"table","opacity":"1"});
	
	
}
function showSubMenu(){
	
	var visible_div = $("#work").css('display');
	if(visible_div == "table"){
		
		$("#work").css({"display":"none"});
		return;
	}
	$("#work").css({"display":"none","opacity":0});
	$("#work").css({"display":"table","opacity":1});
	
	
}




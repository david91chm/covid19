$('.collapse').on('show.bs.collapse', function () {
	$(this).prev().find("span").attr("class", "glyphicon glyphicon-chevron-down");
	$(this).prev().addClass("showBtn");
	//alert();
});
$('.collapse').on('hidden.bs.collapse', function () {
	$(this).prev().find("span").attr("class", "glyphicon glyphicon-chevron-right");
	$(this).prev().removeClass("showBtn");
});
$(".myButton").click(function(){
	$(this).next().collapse('toggle');	
});
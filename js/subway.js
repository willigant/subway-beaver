$(".one-train, .two-train, .three-train, .four-train, .four-train, .five-train, .six-train, .seven-train, .a-train, .c-train, .e-train, .b-train, .d-train, .f-train, .m-train, .g-train, .j-train, .z-train, .n-train, .q-train, .r-train, .l-train, .s-train").click(function(){
	if ($(this).hasClass("selected")){
		$(this).removeClass("selected");
	} else{
	$(this).addClass("selected");
	}
});

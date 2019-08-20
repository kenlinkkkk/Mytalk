$(document).ready(function () {
	$("#goidichvu a").click(function () {
		var package_code = $(this).attr("rel");
		var data = {package_code: package_code};

		$.ajax({
			type: "POST",
			url: "mobireg",
			data: data,
			success: function (response) {
				window.location.href = response;
			}
		})
	});

	$(document).on("scroll", onScroll);

	//smoothscroll
	$('a[href^="#"]').on("click", function (e) {
		e.preventDefault();
		$(document).off("scroll");

		$("a").each(function () {
			$(this).removeClass("active");
		})
		$(this).addClass("active");

		var target = this.hash,
			menu = target;
		$target = $(target);
		$("html, body").stop().animate({
			"scrollTop": $target.offset().top,
		}, 100, "swing", function () {
			window.location.hash = target;
			$(document).on("scroll", onScroll);
		});
	});
});

function onScroll(){
	var scrollPos = $(document).scrollTop();
	$("#navbarResponsive a").each(function () {
		var currLink = $(this);
		var refElement = $(currLink.attr("href"));
		if (refElement.position().top - 150 <= scrollPos && refElement.position().top - 150 + refElement.height() > scrollPos - 150) {
			$('#navbarResponsive ul li a').removeClass("active");
			currLink.addClass("active");
		}
		else{
			currLink.removeClass("active");
		}
	});
}
$(window).scroll(function() {
	if ($(this).scrollTop()) {
		$("#myBtn").show("easing");
	} else {
		$("#myBtn").hide("easing");
	}
});

$("#myBtn").click(function() {
	$("html, body").animate({scrollTop: 0}, 500);
});

$("#dangnhapbtn1, #dangnhapbtn2").click(function (e) {
	$("#content-login").show("easing");
	$("#navbarResponsive").removeClass("show");
	e.stopPropagation();
});

$("#content-login").click(function(e){
	e.stopPropagation();
});

$("html, body, #iconClose").click(function(e){
	$("#content-login").hide();
});

$(window).on('hashchange', function(e){
	history.replaceState ("", document.title, e.originalEvent.oldURL);
});

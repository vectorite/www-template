function set_template_properties() {
	
	// Get global page properties
	var window_height = $(window).height();
	
	alert(window_height);
	
	// Set the properties for the homepage grid
	$(".wvm_grid_objects").height(window_height);

	// Set the navigation properties
	var nav_width = $('.wvm_site').width() - ($('.wvm_logo').width() + 20) - 40;
	$('.wvm_nav').width(nav_width);
	
	// Set the margin and height properties for site content
	var site_top = $('.wvm_dash').height();
	var site_height = $(window).height() - site_top;
	$('.wvm_site_global').css("margin-top",site_top+"px");
	$('.wvm_site_global').height(site_height);
	
	// Grid Navigation Text Effects
	var grid_effects = {
		depth: 4,
		angle: -235,
		color: "#333",
		lighten: -0.1,
		shadowDepth: 60,
		shadowAngle: 45,
		shadowOpacity: 0.2
	};
	
	$(".wvm_grid_object_content").text3d(grid_effects).hover(
			function() {
				$(this).text3d({
					depth: 4,
					angle: -235,
					color: "#333",
					lighten: -0.1,
					shadowDepth: 60,
					shadowAngle: 45,
					shadowOpacity: 0.4
				});
			},
			function() {
				$(this).text3d(grid_effects);
			}
		);
	
	// Dashboard Text Effects 
	var dash_effects = {
			depth: 4,
			angle: -235,
			color: "#333",
			lighten: -0.1,
			shadowDepth: 20,
			shadowAngle: 45,
			shadowOpacity: 0.2
		};
	
	$(".wvm_nav_object_content, .wvm_tagline_name").text3d(dash_effects).hover(
			function() {
				$(this).text3d({
					depth: 4,
					angle: -235,
					color: "#333",
					lighten: -0.1,
					shadowDepth: 20,
					shadowAngle: 45,
					shadowOpacity: 0.4
				});
			},
			function() {
				$(this).text3d(dash_effects);
			}
		); 
	
	// Fit the text horizontally in the grid navigation
	$(".wvm_grid_object_content").fitText();
	
	// Go to home page when clicking the logo
	$('.wvm_logo').click(function() {
		window.location = '/';
	});
	
}

$(document).ready(function() {
	set_template_properties()
});

$(window).resize(function() {
	set_template_properties()
});
function set_template_properties() {

	// Define the height of grid objects and margins for their container
	var grid_objs_height = $(".wvm_grid_object").width();
	var grid_objs_radius = (grid_objs_height / 2) - 20;
	
	// Set the properties of the HTML elements
	//$(".wvm_grid_object").height(grid_objs_height+"px");
	//$(".wvm_grid_object_content").css({borderRadius: grid_objs_radius});
	
	// Set the line height for grid objects content
	var grid_objs_content_line_height = grid_objs_height - 86;
	
	// Set the line height
	//$(".wvm_grid_object_content").css("line-height",grid_objs_content_line_height+"px");
	
	// Set the navigation properties
	var nav_width = $('.wvm_site').width() - ($('.wvm_logo').width() + 20) - 40;
	$('.wvm_nav').width(nav_width);
	
	// Set the margin top property for site content
	var site_top = $('.wvm_dash').height();
	$('.wvm_site').css("margin-top",site_top+"px")
	
	// Set the height for the main site container
	var site_height = $(window).height() - site_top;
	$('.wvm_site').height(site_height);
	
	// Set the grid top margin
	var grid_margin = ($('.wvm_site').height() - grid_objs_height) / 2;
	$(".wvm_site_grid").css("margin-top",grid_margin+"px");
	
	// Set text effects
	var grid_effects = {
		depth: 4,
		angle: -235,
		color: "#333",
		lighten: -0.1,
		shadowDepth: 60,
		shadowAngle: 45,
		shadowOpacity: 0.2
	};
	
	var dash_effects = {
			depth: 4,
			angle: -235,
			color: "#333",
			lighten: -0.1,
			shadowDepth: 20,
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
			$(this).text3d(default3d);
		}
	);
	
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
				$(this).text3d(default3d);
			}
		); 
	
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
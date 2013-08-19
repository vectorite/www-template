function set_template_properties() {

	// Define the height of grid objects and margins for their container
	var grid_objs_height = $(".wvm_grid_objects li").width();
	var grid_objs_margin_top = ($(window).height() - grid_objs_height) / 2;
	var grid_objs_radius = (grid_objs_height / 2) - 20;
	
	// Set the properties of the HTML elements
	$(".wvm_grid_objects li").height(grid_objs_height+"px");
	$(".wvm_grid_objects li a").css({borderRadius: grid_objs_radius});
	$(".wvm_grid_objects").css("margin-top",grid_objs_margin_top+"px");
	
	// Set the line height for grid objects content
	var grid_objs_content_line_height = grid_objs_height - 86;
	
	// Set the line height
	$(".wvm_grid_objects li a").css("line-height",grid_objs_content_line_height+"px");
	
}

$(document).ready(function() {
	set_template_properties()
});

$(window).resize(function() {
	set_template_properties()
});
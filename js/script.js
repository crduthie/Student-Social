// JavaScript Document

function swapStyleSheet(sheet){
	
	"use strict";
	
	document.getElementById('pagestyle').setAttribute('href', sheet);
}

var elementPosition = $('#navigation').offset();

$(window).scroll(function(){
	
		"use strict";
	
        if($(window).scrollTop() > elementPosition.top){
              $('#navigation').css('position','fixed').css('top','14%');
        } else {
            $('#navigation').css('position','absolute');
        }    
});

$(window).on('load', function() {
    $(".cover").fadeOut(200);
});

function newW()
{
    $(window).load();
}
setTimeout(newW, 5000);

$(document).ready(function(){
	
	"use strict";
	
	$("form").submit(function() {
	   $(this).children('#in-between').remove();
	});
    
        $('.button_text').click(function(){
            $('.button_press').addClass('active_0');
            $('.button_press_2').addClass('active_2');
            $('.button_text').addClass('disappear');
            $('.button_text_2').addClass('appear');
            $('.event_date').css('color', 'black');
            $('.word_container').css('background', 'white');
            $('.left_column_one').css('background', 'white');
            $('.post_subject').css('color', 'black');
        });
        
        $('.button_text_2').click(function(){
            $('.button_press').removeClass('active_0');
            $('.button_press_2').removeClass('active_2');
            $('.button_text').removeClass('disappear');
            $('.button_text_2').removeClass('appear');
            $('.upload_input').css('background', 'white');
            $('.post').css('background', 'white');
            $('.event_details_container').css('background', 'white');
            $('.left_column_one').css('background', 'none');
            $('.word_container').css('background', 'none');
            $('.post_name').css('color', 'black');
            $('.post_subject').css('color', 'rgba(124,124,124,1.00)');
            $('.post_descriptor').css('color', 'black');
            $('.event_title').css('color', 'black');
            $('.event_location').css('color', 'black');
            $('.event_date').css('color', 'rgba(158,80,145,1.00)');
            $('.individual_event_location').css('color', 'black');
            $('.individual_event_date').css('color', 'black');
            $('.details_text').css('color', 'black');
            $('.details_information').css('color', 'black');
            $('.events').css('color', 'black');
            $('.name').css('color', 'black');
            $('.course').css('color', 'black');
        });
	
	$('.beige').click(function(){
		$('.upload_input').css('background', '#f5f5dc');
		$('.post').css('background', '#f5f5dc');
		$('.event_details_container').css('background', '#f5f5dc');
		$('.left_column_one').css('background', '#f5f5dc');
		$('.word_container').css('background', '#f5f5dc');
	});
	
	$('.grey').click(function(){
		$('.upload_input').css('background', '#CDCDCD');
		$('.post').css('background', '#CDCDCD');
		$('.event_details_container').css('background', '#CDCDCD');
		$('.left_column_one').css('background', '#CDCDCD');
		$('.word_container').css('background', '#CDCDCD');
	});
	
	$('.sage_green').click(function(){
		$('.upload_input').css('background', '#77815c');
		$('.post').css('background', '#77815c');
		$('.event_details_container').css('background', '#77815c');
		$('.left_column_one').css('background', '#77815c');
		$('.word_container').css('background', '#77815c');
	});
	
	$('.peach').click(function(){
		$('.upload_input').css('background', '#EDD1B0');
		$('.post').css('background', '#EDD1B0');
		$('.event_details_container').css('background', '#EDD1B0');
		$('.left_column_one').css('background', '#EDD1B0');
		$('.word_container').css('background', '#EDD1B0');
	});
	
	$('.orange').click(function(){
		$('.upload_input').css('background', '#EDDD6E');
		$('.post').css('background', '#EDDD6E');
		$('.event_details_container').css('background', '#EDDD6E');
		$('.left_column_one').css('background', '#EDDD6E');
		$('.word_container').css('background', '#EDDD6E');
	});
	
	$('.yellow').click(function(){
		$('.upload_input').css('background', '#F8FD89');
		$('.post').css('background', '#F8FD89');
		$('.event_details_container').css('background', '#F8FD89');
		$('.left_column_one').css('background', '#F8FD89');
		$('.word_container').css('background', '#F8FD89');
	});
	
	$('.main_color_title').on( "click",function(){
		$('.color_box').toggleClass('remove');
	});
	
	$('.black').click(function(){
		$('.post_name').css('color', 'black');
		$('.post_subject').css('color', 'black');
		$('.post_descriptor').css('color', 'black');
		$('.event_title').css('color', 'black');
		$('.event_location').css('color', 'black');
		$('.event_date').css('color', 'black');
		$('.individual_event_location').css('color', 'black');
		$('.individual_event_date').css('color', 'black');
		$('.details_text').css('color', 'black');
		$('.details_information').css('color', 'black');
		$('.events').css('color', 'black');
		$('.name').css('color', 'black');
		$('.course').css('color', 'black');
	});
	
	$('.white').click(function(){
		$('.post_name').css('color', 'white');
		$('.post_subject').css('color', 'white');
		$('.post_descriptor').css('color', 'white');
		$('.event_title').css('color', 'white');
		$('.event_location').css('color', 'white');
		$('.event_date').css('color', 'white');
		$('.individual_event_location').css('color', 'white');
		$('.individual_event_date').css('color', 'white');
		$('.details_text').css('color', 'white');
		$('.details_information').css('color', 'white');
		$('.events').css('color', 'white');
		$('.name').css('color', 'white');
		$('.course').css('color', 'white');
	});
	
	$('.light_grey').click(function(){
		$('.post_name').css('color', 'rgba(175,175,175,1.00)');
		$('.post_subject').css('color', 'rgba(175,175,175,1.00)');
		$('.post_descriptor').css('color', 'rgba(175,175,175,1.00)');
		$('.event_title').css('color', 'rgba(175,175,175,1.00)');
		$('.event_location').css('color', 'rgba(175,175,175,1.00)');
		$('.event_date').css('color', 'rgba(175,175,175,1.00)');
		$('.individual_event_location').css('color', 'rgba(175,175,175,1.00)');
		$('.individual_event_date').css('color', 'rgba(175,175,175,1.00)');
		$('.details_text').css('color', 'rgba(175,175,175,1.00)');
		$('.details_information').css('color', 'rgba(175,175,175,1.00)');
		$('.events').css('color', 'rgba(175,175,175,1.00)');
		$('.name').css('color', 'rgba(175,175,175,1.00)');
		$('.course').css('color', 'rgba(175,175,175,1.00)');
	});
	
	$('.dark_grey').click(function(){
		$('.post_name').css('color', 'rgba(87,87,87,1.00)');
		$('.post_subject').css('color', 'rgba(87,87,87,1.00)');
		$('.post_descriptor').css('color', 'rgba(87,87,87,1.00)');
		$('.event_title').css('color', 'rgba(87,87,87,1.00)');
		$('.event_location').css('color', 'rgba(87,87,87,1.00)');
		$('.event_date').css('color', 'rgba(87,87,87,1.00)');
		$('.individual_event_location').css('color', 'rgba(87,87,87,1.00)');
		$('.individual_event_date').css('color', 'rgba(87,87,87,1.00)');
		$('.details_text').css('color', 'rgba(87,87,87,1.00)');
		$('.details_information').css('color', 'rgba(87,87,87,1.00)');
		$('.events').css('color', 'rgba(87,87,87,1.00)');
		$('.name').css('color', 'rgba(87,87,87,1.00)');
		$('.course').css('color', 'rgba(87,87,87,1.00)');
	});
	
	$('.main_color_title_2').on( "click",function(){
		$('.color_box_2').toggleClass('remove');
	});
	
});


$(document).ready(function(){
	
	$(".next_btn").click(function(){  

		var ret = $("#application-form").validationEngine('validate',{showArrow: false});

		if( ret == false ){
			return 0;
		}
	         //Function runs on NEXT button click 
		$(this).parent().next().fadeIn('slow');
		$(this).parent().css({'display':'none'});
		//Adding class active to show steps forward;

		var p = $(this).attr('id');
		if( p== "check-fields"){
			review();
		}

		$('.active-progressbar').next().addClass('active-progressbar');
	});
	
	$(".pre_btn").click(function(){            //Function runs on PREVIOUS button click 
		$(this).parent().prev().fadeIn('slow');
		$(this).parent().css({'display':'none'});
		//Removing class active to show steps backward;
		$('.active-progressbar:last').removeClass('active-progressbar');
	});
	
});

function review(){
	var summary = [];
	$('form').each(function () {

		summary.push('Form ' + this.id + ' has ' + $(this).find(':input').length + ' element(s).<br/>');

		var inputs = $(this).find(':input');

		for(var i = 0; i<inputs.length; i++){
			summary.push( $(inputs[i]).attr('name') + '  = ' + $(inputs[i]).val() + ' <br/>' );
		}

	    
	});
	$('#results').html(summary.join('<br />'));
}	

$(function(){
	 
	 // function from the jquery form plugin
	 $('#myForm_1').ajaxForm({
	 	beforeSend:function(){
	 		 $(".progress_1").show();
	 	},
	 	uploadProgress:function(event,position,total,percentComplete){
	 		$(".progress-bar-galery_1").width(percentComplete+'%'); //dynamicaly change the progress bar width
	 		$(".sr-only_1").html(percentComplete+'%'); // show the percentage number
	 	},
	 	success:function(){
	 		$(".progress_1").hide(); //hide progress bar on success of upload
	 	},
	 	complete:function(response){
	 		if(response.responseText=='0')
	 			$(".image_1").html("Error"); //display error if response is 0
	 		else
	 			$(".image_1").html("<img src='"+response.responseText+"' width='100%'/>");

	 			// show the image after success
	 	}
	 });
    $('#myForm_2').ajaxForm({
        beforeSend:function(){
            $(".progress_2").show();
        },
        uploadProgress:function(event,position,total,percentComplete){
            $(".progress-bar-galery_2").width(percentComplete+'%'); //dynamicaly change the progress bar width
            $(".sr-only_2").html(percentComplete+'%'); // show the percentage number
        },
        success:function(){
            $(".progress_2").hide(); //hide progress bar on success of upload
        },
        complete:function(response){
            if(response.responseText=='0')
                $(".image_2").html("Error"); //display error if response is 0
            else
                $(".image_2").html("<img src='"+response.responseText+"' width='100%'/>");

            // show the image after success
        }
    });
    $('#myForm_3').ajaxForm({
        beforeSend:function(){
            $(".progress_3").show();
        },
        uploadProgress:function(event,position,total,percentComplete){
            $(".progress-bar_3").width(percentComplete+'%'); //dynamicaly change the progress bar width
            $(".sr-only_3").html(percentComplete+'%'); // show the percentage number
        },
        success:function(){
            $(".progress_3").hide(); //hide progress bar on success of upload
        },
        complete:function(response){
            if(response.responseText=='0')
                $(".image_3").html("Error"); //display error if response is 0
            else
                $(".image_3").html("<img src='"+response.responseText+"' width='100%'/>");

            // show the image after success
        }
    });
	 //set the progress bar to be hidden on loading
	 $(".progress_1").hide();
});

$('document').ready(function(){
	$('.form-zayavka_1, .form-zayavka_2, .form-zayavka_3').hide();
	$('.buttons_1').on('click', function(){
		$('.form-zayavka_1').show();
	});
    $('.buttons_2').click(function(){
        $('.form-zayavka_2').show();
    });
    $('.buttons_3').click(function(){
        $('.form-zayavka_3').show();
    });
});

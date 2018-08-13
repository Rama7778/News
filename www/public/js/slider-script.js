$(function(){
	 
	 // function from the jquery form plugin
	 $('#myForm_1').ajaxForm({
	 	beforeSend:function(){
	 		 $(".progress_1").show();
	 	},
	 	uploadProgress:function(event,position,total,percentComplete){
	 		$(".progress-bar-slider_1").width(percentComplete+'%'); //dynamicaly change the progress bar width
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
            $(".progress-bar-slider_2").width(percentComplete+'%'); //dynamicaly change the progress bar width
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
            $(".progress-bar-slider_3").width(percentComplete+'%'); //dynamicaly change the progress bar width
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
    $('#myForm_4').ajaxForm({
        beforeSend:function(){
            $(".progress_4").show();
        },
        uploadProgress:function(event,position,total,percentComplete){
            $(".progress-bar-galery_1").width(percentComplete+'%'); //dynamicaly change the progress bar width
            $(".sr-only_4").html(percentComplete+'%'); // show the percentage number
        },
        success:function(){
            $(".progress_4").hide(); //hide progress bar on success of upload
        },
        complete:function(response){
            if(response.responseText=='0')
                $(".image_4").html("Error"); //display error if response is 0
            else
                $(".image_4").html("<img src='"+response.responseText+"' width='100%'/>");

            // show the image after success
        }
    });    $('#myForm_5').ajaxForm({
        beforeSend:function(){
            $(".progress_5").show();
        },
        uploadProgress:function(event,position,total,percentComplete){
            $(".progress-bar-galery_2").width(percentComplete+'%'); //dynamicaly change the progress bar width
            $(".sr-only_5").html(percentComplete+'%'); // show the percentage number
        },
        success:function(){
            $(".progress_5").hide(); //hide progress bar on success of upload
        },
        complete:function(response){
            if(response.responseText=='0')
                $(".image_5").html("Error"); //display error if response is 0
            else
                $(".image_5").html("<img src='"+response.responseText+"' width='100%'/>");

            // show the image after success
        }
    });    $('#myForm_6').ajaxForm({
        beforeSend:function(){
            $(".progress_6").show();
        },
        uploadProgress:function(event,position,total,percentComplete){
            $(".progress-bar-galery_3").width(percentComplete+'%'); //dynamicaly change the progress bar width
            $(".sr-only_6").html(percentComplete+'%'); // show the percentage number
        },
        success:function(){
            $(".progress_6").hide(); //hide progress bar on success of upload
        },
        complete:function(response){
            if(response.responseText=='0')
                $(".image_6").html("Error"); //display error if response is 0
            else
                $(".image_6").html("<img src='"+response.responseText+"' width='100%'/>");

            // show the image after success
        }
    });
	 //set the progress bar to be hidden on loading
	 $(".progress_1, .progress_2, .progress_3, .progress_4," +
         ".progress_5, .progress_6").hide();
});

$('document').ready(function(){
	$(".form-zayavka_1, .form-zayavka_2, .form-zayavka_3, " +
        ".form-zayavka_4, .form-zayavka_5, .form-zayavka_6").hide();
	$('.buttons_1').on('click', function(){
		$('.form-zayavka_1').show();
	});
    $('.buttons_2').click(function(){
        $('.form-zayavka_2').show();
    });
    $('.buttons_3').click(function(){
        $('.form-zayavka_3').show();
    });
    $('.buttons_4').click(function(){
        $('.form-zayavka_4').show();
    });
    $('.buttons_5').click(function(){
        $('.form-zayavka_5').show();
    });
    $('.buttons_6').click(function(){
        $('.form-zayavka_6').show();
    });
});

function popular(file){
	if (window.XMLHttpRequest){
	  	// code for IE7+, Firefox, Chrome, Opera, Safari
	  	xmlhttp=new XMLHttpRequest();
	 }
	 
	 else{// code for IE6, IE5
	    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	 }
			  
	 xmlhttp.onreadystatechange=function(){
			if (xmlhttp.readyState==4 && xmlhttp.status==200){
				document.getElementById("test").innerHTML=xmlhttp.responseText;
			}
	 }
	 xmlhttp.open("GET",file,true);
	 xmlhttp.send();
}



function slider(selct,shower,showvalue,cvalue){

	$("#"+shower).hide();

	$("#"+selct).click(function() {
									   
		if($(this).val() == showvalue){
				
		$("#"+shower).show("slow");
				
		}
		else if($(this).val() != showvalue){
		
			$("#"+shower).hide("slow");
			$("#"+cvalue).val("");
		}
			
	});
	

}

$(document).ready(function(){
						   	
		$('a[rel*=show]').click(function(event){
			event.preventDefault();
			$(this).next().animate({height: 'toggle'}, 400);
		});

  /////////////////////////////////////////// Faculty/Student Feedback Form /////////////////////////////////////////////////////
  
  
  // Hide "Other" inputs on page load.
  $('#other_1').hide();
  $('#other_2').hide();
  $('#other_3').hide();
  
// Shows/hides first, second, & third "Other" input field.  If the dropdown value is changes from other, clears the "Other" input.
 $("#First_Choice_Topic").click(function() {
									   
		if($(this).val() == "other"){
				
			$("#other_1").show("slow");
				
		}
		else if($(this).val() != "other"){
		
			$("#other_1").hide("slow");
			$("#first_choice_other").val("");
		}
			
	});
	
  $("#Second_Choice_Topic").click(function() {
									   
		if($(this).val() == "other"){
				
			$("#other_2").show("slow");
				
		}
		else if($(this).val() != "other"){
		
			$("#other_2").hide("slow");
			$("#second_choice_other").val("");
		}
			
	});
	
  $("#Third_Choice_Topic").click(function() {
									   
		if($(this).val() == "other"){
				
			$("#other_3").show("slow");
				
		}
		else if($(this).val() != "other"){
		
			$("#other_3").hide("slow");
			$("#third_choice_other").val("");
		}
			
	});
  	

  
  
  ////////////////////////////////////////// End Faculty/Student Feedback Form ///////////////////////////////////////////////////
  
  //////////////////////////////////////////// Faculty End of Semester Form /////////////////////////////////////////////////////
  $('input[name="referred"]').click(function(){
  	if($(this).val() == "1"){
			$(this).parent().parent().next().show("slow");
	  }
	  else{
		 $(this).parent().parent().next().hide("hide");
		  $(this).parent().parent().next().children().children("ul").children("li").children('input:[type="radio"]').attr('checked', false)	  }
  });
  
      $('input[name="first_term"]').click(function(){
  	if($(this).val() == "0"){
			$(this).parent().parent().next().show("slow");
	  }
	  else{
		 $(this).parent().parent().next().hide("hide");	  
		  $(this).parent().parent().next().children().children('input:[type="radio"]').attr('checked', false);
		  }
  });
  
    $('input[name="access_infolit"]').click(function(){
  	if($(this).val() == "1"){
			$(this).parent().parent().next().show("slow");
	  }
	  else{
		 $(this).parent().parent().next().hide("hide");
		  $(this).parent().parent().next().children().children('input:[type="radio"]').attr('checked', false);
	 }
  });
  
      $('input[name="problems"]').click(function(){
  	if($(this).val() == "1"){
			$(this).parent().parent().next().show("slow");
	  }
	  else{
		 $(this).parent().parent().next().hide("hide");
		  $(this).parent().parent().next().children().children("ul").children("li").children('input:[type="radio"]').attr('checked', false);
			$(this).parent().parent().next().children().children("ul").children("li").children("ul").hide("slow");
			$(this).parent().parent().next().children().children("ul").children("li").children("ul").children('li').children("input[type='text']").val("");
		}
  });
  
  
        $('input[name="module_problems"]').click(function(){
  	if($(this).val() == "1"){
			$(this).parent().parent().next().show("slow");
	  }
	  else{
		 $(this).parent().parent().next().hide("hide");
		  $(this).parent().parent().next().children().children('input:[type="radio"]').attr('checked', false);
		  $(this).parent().parent().next().children().children('ul').hide();
		  $(this).parent().parent().next().children().children('ul').children('li').children("input[type='text']").val("");
	  }
  });
  
$('input[name="review_module"]').click(function(){
  	if($(this).val() == "1"){
			$(this).parent().parent().next().show("slow");
	  }
	  else{
		 $(this).parent().parent().next().hide("hide");
		  $(this).parent().parent().next().children().children("ul").children("li").children('input:[type="radio"]').attr('checked', false);
		  $(this).parent().parent().next().children().children("ul").children("li").children("ul").children("li").children('input:[type="radio"]').attr('checked', false);
		  $(this).parent().parent().next().children().children("ul").children("li").children("ul").children("li").children("ul").children("li").children("input[type='text']").val("");
		  $(this).parent().parent().next().children("li").children("ul.hidden_questions").hide();
		   $(this).parent().parent().next().children().children("ul").children("li").children("ul").children("li").children("ul").hide("slow");
	}
  });
  
  $('input[name="content_appropriate"]').click(function(){
  	if($(this).val() == "0"){
			$(this).parent().parent().next().show("slow");
	  }
	  else{
		 $(this).parent().parent().next().hide("hide");
		  $(this).parent().parent().next().children().children("ul").children("li").children('input:[type="radio"]').attr('checked', false);
		  $(this).parent().parent().next().children().children("ul").children("li").children("ul").hide("slow");
		  $(this).parent().parent().next().children().children("ul").children("li").children("ul").children("li").children("input[type='text']").val("");
		}
  });

///////////////////////////////////////////////// End Faculty End of Semester Form ///////////////////////////////////////////////
  
  //////////////////////////////////////Student End of Semester Form//////////////////////////////
  
  
  // Show/hide form textfields for specifying other
  $(".hidden_other").hide();

   $('input[type="radio"]').click(function(){
	  if($(this).val() == "9"){
		  $(this).parent().children("ul").show("slow");
	  }
	  else{
		  $(this).parent().parent().children().each(function(){
			  $(this).children("ul.hidden_other").hide("slow");
			  $(this).children("ul.hidden_other").children("li").children("input[type=text]").val("");
		  });
	  }
  });
  
  // show/hide form questions based on yes or no
  $(".hidden_questions").hide();
  $('input[name="first_term"]').click(function(){
  	if($(this).val() == "0"){
			$(this).parent().parent().next().show("slow");
	  }
	  else{
		  $(this).parent().parent().next().hide("hide");
		  $(this).parent().parent().next().children().children("ul").children("li").children('input:[type="radio"]').attr('checked', false)
	  }
  });
  
  $('input[name="any_problems"]').click(function(){
	  if($(this).val() == "1"){
			$(this).parent().parent().next().show("slow");
	  }
	  else{
	  		$(this).parent().parent().next().hide("slow");
			$(this).parent().parent().next().children().each(function(){
				$(this).children("ul").children("li").children('input:[type="radio"]').attr('checked', false);
				$(this).children("ul").children("li").children("ul.hidden_other").hide("slow");
				$(this).children("ul").children("li").children("ul.hidden_other").children("li").children("input[type=text]").val("");
			});
	  }
  });
 
 //////////////////////////////////////END:   Student End of Semester Form//////////////////////////////
 
 /////////////////////////////////////////////Student-Modules POP-up//////////////////////////////////////////////////
 
 $(".student_modules a").click(function(){
		alert("IMPORTANT: If you've been assigned a module, you should ONLY use the direct link provided by your professor. Scores will not be reported to your professor from the modules on this page.\n\n Click 'OK' to continue to the module.");									 
  });
  
});

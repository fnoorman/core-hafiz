window.Question_number = 1;

$(document).ready(function(){
 
	/*$("#newContestForm").hide();
	$("#subjectiveForm").hide();

	var contest_saved_status = $("#contest_saved_status").val();
	if(contest_saved_status == 1) 
	{  
		//var contestName = $("#contest_name").val();
		$("#ContestFormType").show('slow');
		$("#success_text").show('slow');

	}else if(contest_saved_status == 2) 
	{  
		//var contestName = $("#contest_name").val();
		$("#ContestFormType").show('slow');
		//$("#success_text").show('slow');

	}*/
 

});

// create New Contest button clicked!
function newContest() {
	Question_number = 0;
	$("#newContestForm").show('slow');
}

// add New Subjective question button clicked!
function newSubQuestion() {
	$("#subjectiveForm").show('slow');
		//Question_number++;
		$("#question_id").val(Question_number);
		$("#question_label").text('Question No. '+Question_number);
		$("#question_type").val(1);
		$("#ObjectiveAnswer_options").hide('slow');
		$("#answer_id_text").show('slow');
}

// add New Objective question button clicked!
function newObQuestion() {
	$("#subjectiveForm").show('slow');
		//Question_number++;
		$("#question_id").val(Question_number);
		$("#question_label").text('Question No. '+Question_number);
		$("#question_type").val(0);
		$("#ObjectiveAnswer_options").show('slow');
		$("#answer_id_text").hide('slow');
}


//  Convert Answer's input into JSON data object function
				$.fn.serializeObject = function()
				{
				    var o = {};
				    var a = this.serializeArray();
				    var d = 0;
				    $.each(a, function() {
				    	d++;
				        if (o[this.name] !== undefined) {
				            if (!o[this.name].push) {
				                o[d] = [o+d];
				            }
				            o[this.name].push(this.value || '');
				        } else {
				            o['answer'+d] = this.value || '';
				        }
				    });
				    return o;
				};

 

$('body').on('beforeSubmit', 'form#contestDetailForm', function () 
{
     var form = $(this);

     // return false if form still have some validation errors
     if (form.find('.has-error').length) {
          return false;
     }


    //set answer's text field as json data type

     var question_type = $("#question_type").val();
     if (question_type == 1) 
     {
		var answer_Json = JSON.stringify($('#answer_id_text').serializeObject());
		$("#answer_id_text").val(answer_Json);

     }else if (question_type == 0) 
     {

     	var answer_Json = JSON.stringify($('#ObjectiveAnswer_options :input').serializeObject());
		$("#answer_id_text").val(answer_Json);

     }
     

	 // submit form
     $.ajax({
          url: form.attr('action'),
          type: 'post',
          data: form.serialize(),
          success: function (response) {

          	Question_number++;   // increase question number on submit
              
              // clear all field
               $("#subjectiveForm").hide("fast");$("#question_text").val("");$("#answer_id_text").val("");
               $("#A").val("");$("#B").val("");$("#D").val("");$("#C").val("");
        

          }
     });
     return false;   // set false to prevent form to submit (prevent page refresh; submitted via ajax)
});
 

 
window.Question_number = 1;

$(document).ready(function(){  


	$('#questNo').val(Question_number); 
	$("#question_status").hide('slow');
	//$("#question_status").hide('slow');


});

// create New Contest button clicked!
function newContest() {
	Question_number = 0;
	$("#newContestForm").show('slow');
}

function closeQuestionDetailPane() {
	$("#addQuestionRow").slideUp('slow');
}

function showQuestionForm() {

	$("#addQuestionRow").show();
}

function showContestFullDetails() {

	getContest();

	$("#fullView_question_pane").show('slow');
}
function hideContestFullDetails() {

	$("#fullView_question_pane").slideUp('slow');
}

// add New Subjective question button clicked!
function newSubQuestion() {

 	$(this).removeClass('btn-warning');
    $(this).addClass('btn-success');

	$("#contest_details_form").show('slow');
	$("#subjectiveForm").show('slow');
		//Question_number++;
		$("#question_text").val('');
		$("#question_id").val(Question_number);
		$("#question_label").text('Question No. #'+Question_number);
		$("#question_type").val(1);
		$("#ObjectiveAnswer_options").hide('slow');
		$("#answer_id_text").show('slow'); 
		$("#answer_scheme").show('slow');
}

// add New Objective question button clicked!
function newObQuestion() {

	$(this).removeClass('btn-warning');
    $(this).addClass('btn-success');

	$("#contest_details_form").show('slow');
	$("#answer_scheme").hide('slow');

	$("#subjectiveForm").show('slow');
		//Question_number++;
		$("#question_text").val('');
		$("#question_id").val(Question_number);
		$("#question_label").text('Question No. #'+Question_number);
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
               $("#question_text").val("");$("#answer_id_text").val("");
               $("#A").val("");$("#B").val("");$("#D").val("");$("#C").val("");
        
               $("#contest_details_form").hide('slow');
          }
     });
     return false;   // set false to prevent form to submit (prevent page refresh; submitted via ajax)
});
 

// contest patcher script
function getContest(urlhost) {

	alert(urlhost);

	$('#fullView_question').html('');
	var currentContestID = $('#currentContestID').val();
	var linkTOdeleteContest = $('#linkTOdeleteContest').val();

           $.ajax({
                url: urlhost +'&contest_id='+currentContestID,
                dataType: 'json',
                crossDomain: true,
                json: true,

                success: function (d) { 
 
                    var i, k, l = d.items.length, newLi, newItem, contestAnswer,finalData, A, B, C, D;

                    $('<p id="well-place"></p>').appendTo('#fullView_question');

                    for (i = 0; i < l; i++) {
                    	k = i+1;
                        newDiv = $('<div class="well"></div>');
                        newItem = d.items[i];

                        	//if (l > 0) { 

		                        if (newItem.question_type == 0) 
		                        {
		                        	contestAnswer1 = newItem.answer;

		                        	var objAns = JSON.parse(contestAnswer1);

		           					A = objAns.answer1;
		           					B = objAns.answer2;
		           					C = objAns.answer3;
		           					D = objAns.answer4;

		           					//alert(contestAnswer1.toSource());
		           					$('<h3><b>'+k+'. '+newItem.question + '?</h3>'+ 
		           						'<a class="btn btn-danger pull-right" type="button" href="'+linkTOdeleteContest+'&id='+newItem.id+'&contest_id='+newItem.contest_id+'"> Delete</a>'+
									    '<p style="margin-left:21px">'+
										'<input id="qr" name="objAns" type="radio" value="A"> ' +A+
										'<br><input id="qr" name="objAns" type="radio" value="B"> ' +B+
										'<br><input id="qr" name="objAns" type="radio" value="C"> ' +C+
										'<br><input id="qr" name="objAns" type="radio" value="D"> ' +D+
									 '</p>').appendTo(newDiv);


		                        }else 
		                        {

		                        	contestAnswer = newItem.answer;

		                        	//finalData = contestAnswer.contestAnswer(/\\/g,"");

		                        	$('<h3><b>'+k+'. '+newItem.question + '?</h3>'+
		                        		'<a class="btn btn-danger pull-right" type="button" href="'+linkTOdeleteContest+'&id='+newItem.id+'&contest_id='+newItem.contest_id+'"> Delete</a>'+
		                        	 	'<p style="margin-left:21px"><textarea id="sd" name="df"></textarea> '+
									 	'</p>').appendTo(newDiv);
		                        }
							/*}else 
							{
								$('#yetTOhaveQuestion').text('Theres no question assigned yet for this contest.');
							}*/
                        


                        newDiv.appendTo('#well-place');

                    }
                }
            });
 } 
 

$(document).ready(function () {                

 	//getContest();	

});


// contest patcher script
function getContest() { 

           $.ajax({
                url: 'http://localhost/Hybrizy/core/frontend/web/index.php?r=contestmain/getjsoncontest',
                dataType: 'json',
                crossDomain: true,
                json: true,

                success: function (d) { 
 
                    var i, l = d.items.length, newLi, newItem, contestAnswer,finalData, A, B, C, D;

                    $('<ol id="List"></ol>').appendTo('#main');

                    for (i = 0; i < l; i++) {
                        newLi = $('<li></li>');
                        newItem = d.items[i];

                        if (newItem.question_type == 0) 
                        {
                        	contestAnswer1 = newItem.answer;

                        	var objAns = JSON.parse(contestAnswer1);

           					A = objAns.answer1;
           					B = objAns.answer2;
           					C = objAns.answer3;
           					D = objAns.answer4;

           					//alert(contestAnswer1.toSource());

							$('<p><b>'+newItem.question + '?</b></br>'+
								'<input id="er" name="objAns" type="radio" value="A"> ' +A+
								'<br><input id="er" name="objAns" type="radio" value="B"> ' +B+
								'<br><input id="er" name="objAns" type="radio" value="C"> ' +C+
								'<br><input id="er" name="objAns" type="radio" value="D"> ' +D+
							 '</p>').appendTo(newLi);


                        }else 
                        {

                        	contestAnswer = newItem.answer;

                        	//finalData = contestAnswer.contestAnswer(/\\/g,"");

                        	$('<p><b>'+newItem.question + '?</b><br><textarea id="sd" name="df"></textarea> '+
							 '</p>').appendTo(newLi);
                        }

                        


                        newLi.appendTo('#List');

                    }
                }
            });
 }
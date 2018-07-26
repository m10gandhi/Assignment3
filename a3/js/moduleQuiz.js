
topics = ['C', 'C++', 'Java', 'JavaScript', 'PHP', 'Go', 'Scala', 'Python', 'c#']
for (var i = 0; i < topics.length; i++) {
	$('#topicsColumn').append('<button type="button" class="btn btn-outline-dark btn-lg mr-3 mt-3">' + topics[i] + '</button>');
}


var quizConstants = {
	currentQuestionsArray: {},
	currentQuestion: 0,
	clear: function() {
		currentQuestion = 0;
	}
}


quizConstants.currentQuestionsArray = {
	"questions": [{
		"question_id": "q1",
		"question_type": "multiple_choice",
		"question": "Question 1",
		"options": ["Option 1", "Option 2", "Option 3", "Option 4"]
	}, {
		"question_id": "q2",
		"question_type": "multiple_choice",
		"question": "Question 2",
		"options": ["Option 1", "Option 2", "Option 3"]
	}, {
		"question_id": "q3",
		"question_type": "multiple_choice",
		"question": "Question 3",
		"options": ["Option 1", "Option 2", "Option 3", "Option 4", "Option 5"]
	}]
};
(function displayInitialQuestion() {
	formQuestionLayout(0);
})();


function formQuestionLayout(indexOfCurrentQuestion) {
	var x = quizConstants.currentQuestionsArray.questions[indexOfCurrentQuestion];
	var optionsHTMLString = "";
	$(".question").html("<p>" + x.question + "</p>");
	for (var i = 0; i < x.options.length; i++) { 
		optionsHTMLString += '<div class = "radio pl-2"><label><input type = "radio" name = "optradio"'
		if(x.checkedOption && x.checkedOption == i){
			optionsHTMLString += 'checked ';
		}
		optionsHTMLString += 'value="' + i +'"> ' + x.options[i] + '</label> </div>';
	}
	$(".options").html(optionsHTMLString);
	$(".indicator").html('<h4 class="mt-2"> Question ' + (indexOfCurrentQuestion + 1) +' of ' + quizConstants.currentQuestionsArray.questions.length +'</h4>');
}


function navigateQuestions(image) {
	// console.log(image);
	var checkedOption = $('input[name="optradio"]:checked').val();
	if(checkedOption){
		quizConstants.currentQuestionsArray.questions[quizConstants.currentQuestion].checkedOption = checkedOption;
	}
	if (image.id == "prevQuestion") {
		if (quizConstants.currentQuestion != 0) {
			formQuestionLayout(--quizConstants.currentQuestion);
		}
	} else if (image.id == "nextQuestion") {
		if (quizConstants.currentQuestion < quizConstants.currentQuestionsArray.questions.length - 1) {
			formQuestionLayout(++quizConstants.currentQuestion);
		}
	} else {}
}
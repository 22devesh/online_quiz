// Updating file
function updateQuestionAptitude(id) {
    console.log("Aptitude");
    $("#updateQuestionModal-aptitude").modal("show");

    let updateQuizID = $("#quizID-" + id).text();
    let updateQuestion = $("#quizQuestion-" + id).text();
    let updateOptionA = $("#optionA-" + id).text();
    let updateOptionB = $("#optionB-" + id).text();
    let updateOptionC = $("#optionC-" + id).text();
    let updateOptionD = $("#optionD-" + id).text();
    let updateCorrectAnswer = $("#correctAnswer-" + id).text();

    $("#updateQuizID").val(updateQuizID);
    $("#updateQuestion").val(updateQuestion);
    $("#updateOptionA").val(updateOptionA);
    $("#updateOptionB").val(updateOptionB);
    $("#updateOptionC").val(updateOptionC);
    $("#updateOptionD").val(updateOptionD);
    $("#updateCorrectAnswer").val(updateCorrectAnswer);
}

function updateQuestionProgramming(id) {
    console.log("Programming");
    $("#updateQuestionModal-programming").modal("show");

    let updateQuizID = $("#quizID-" + id).text();
    let updateQuestion = $("#quizQuestion-" + id).text();
    let updateOptionA = $("#optionA-" + id).text();
    let updateOptionB = $("#optionB-" + id).text();
    let updateOptionC = $("#optionC-" + id).text();
    let updateOptionD = $("#optionD-" + id).text();
    let updateCorrectAnswer = $("#correctAnswer-" + id).text();

    $("#updateQuizID").val(updateQuizID);
    $("#updateQuestion").val(updateQuestion);
    $("#updateOptionA").val(updateOptionA);
    $("#updateOptionB").val(updateOptionB);
    $("#updateOptionC").val(updateOptionC);
    $("#updateOptionD").val(updateOptionD);
    $("#updateCorrectAnswer").val(updateCorrectAnswer);
}
function updateQuestionGK(id) {
    console.log("GK Modal");
    $("#updateQuestionModal-gk").modal("show");

    let updateQuizID = $("#quizID-" + id).text();
    let updateQuestion = $("#quizQuestion-" + id).text();
    let updateOptionA = $("#optionA-" + id).text();
    let updateOptionB = $("#optionB-" + id).text();
    let updateOptionC = $("#optionC-" + id).text();
    let updateOptionD = $("#optionD-" + id).text();
    let updateCorrectAnswer = $("#correctAnswer-" + id).text();

    $("#updateQuizID").val(updateQuizID);
    $("#updateQuestion").val(updateQuestion);
    $("#updateOptionA").val(updateOptionA);
    $("#updateOptionB").val(updateOptionB);
    $("#updateOptionC").val(updateOptionC);
    $("#updateOptionD").val(updateOptionD);
    $("#updateCorrectAnswer").val(updateCorrectAnswer);
}
function updateQuestionEnglish(id) {
    console.log("English modal");
    $("#updateQuestionModal-english").modal("show");

    let updateQuizID = $("#quizID-" + id).text();
    let updateQuestion = $("#quizQuestion-" + id).text();
    let updateOptionA = $("#optionA-" + id).text();
    let updateOptionB = $("#optionB-" + id).text();
    let updateOptionC = $("#optionC-" + id).text();
    let updateOptionD = $("#optionD-" + id).text();
    let updateCorrectAnswer = $("#correctAnswer-" + id).text();

    $("#updateQuizID").val(updateQuizID);
    $("#updateQuestion").val(updateQuestion);
    $("#updateOptionA").val(updateOptionA);
    $("#updateOptionB").val(updateOptionB);
    $("#updateOptionC").val(updateOptionC);
    $("#updateOptionD").val(updateOptionD);
    $("#updateCorrectAnswer").val(updateCorrectAnswer);
}





// Deleting question
function deleteQuestionAptitude(id) {
    if (confirm("Do you want to delete this question?")) {
        window.location = "./endpoint/delete-question-aptitude.php?question=" + id;
    }
}
function deleteQuestionProgramming(id) {
    if (confirm("Do you want to delete this question?")) {
        window.location = "./endpoint/delete-question-programming.php?question=" + id;
    }
}
function deleteQuestionGK(id) {
    if (confirm("Do you want to delete this question?")) {
        window.location = "./endpoint/delete-question-gk.php?question=" + id;
    }
}
function deleteQuestionEnglish(id) {
    if (confirm("Do you want to delete this question?")) {
        window.location = "./endpoint/delete-question-english.php?question=" + id;
    }
}

// Deleting result
function deleteResult(id) {
    if (confirm("Do you want to delete this result?")) {
        window.location = "./endpoint/delete-result.php?result=" + id;
    }
}

// Disable copy


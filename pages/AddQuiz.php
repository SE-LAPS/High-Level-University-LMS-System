<!DOCTYPE html>
<html>

<head>
    <title>Dynamic Questionnaire</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/AddQuiz.scss" />
</head>

<body class="body">
    <div class="container">
        <h2 class="mb-4 text-center">Create a Quiz</h2>
        <div class="container">
            <form id="questionnaire-form">
                <div class="form-group">
                    <label for="quiz-name" class="font-weight-bold">Quiz Name:</label>
                    <input type="text" id="quiz-name" name="quiz-name" class="form-control mb-4"
                        placeholder="Enter the name of your quiz">
                </div>
                <div id="questions-container">
                    <!-- Initial question -->
                    <div class="question">
                        <label for="question1" class="font-weight-bold">Question 1:</label>
                        <input type="text" id="question1" name="questions[]" class="form-control mb-2"
                            placeholder="Enter your question">
                        <label class="font-weight-bold">Options:</label>
                        <div class="options">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="radio" id="option11" name="correct1" value="1"
                                        style="display: inline-block; width: auto;">
                                    <input type="text" id="options11" name="options1[]" class="form-control"
                                        placeholder="Option 1" style="display: inline-block; width: auto; margin: 8px;">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="radio" id="option12" name="correct1" value="2"
                                        style="display: inline-block; width: auto;">
                                    <input type="text" id="options12" name="options1[]" class="form-control"
                                        placeholder="Option 2" style="display: inline-block; width: auto; margin: 8px;">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="radio" id="option13" name="correct1" value="3"
                                        style="display: inline-block; width: auto;">
                                    <input type="text" id="options13" name="options1[]" class="form-control"
                                        placeholder="Option 3" style="display: inline-block; width: auto; margin: 8px;">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="radio" id="option14" name="correct1" value="4"
                                        style="display: inline-block; width: auto;">
                                    <input type="text" id="options14" name="options1[]" class="form-control"
                                        placeholder="Option 4" style="display: inline-block; width: auto; margin: 8px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <button type="button" class="btn btn-primary" id="add-question">Add Question</button>
                    </div>
                    <div class="col-6 text-right">
                        <button type="button" class="btn btn-success" id="submit-form">Submit</button>
                    </div>
                </div>
            </form>
            <div id="success-message" style="display: none" class="alert alert-success mt-4">
                The quiz has been added successfully!
            </div>
        </div>
    </div>
    <script>
        const questionsContainer = document.getElementById('questions-container');
        const addQuestionButton = document.getElementById('add-question');
        const submitFormButton = document.getElementById('submit-form');
        const successMessage = document.getElementById('success-message');
        const form = document.getElementById('questionnaire-form');

        let questionCount = 1; // Start with 1 question

        addQuestionButton.addEventListener('click', () => {
            questionCount++;
            const questionHTML = `
                <div class="question">
                    <label for="question${questionCount}" class="font-weight-bold">Question ${questionCount}:</label>
                    <input type="text" id="question${questionCount}" name="questions[]" class="form-control mb-2"
                        placeholder="Enter your question">
                    <label class="font-weight-bold">Options:</label>
                    <div class="options">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="radio" id="option${questionCount}1" name="correct${questionCount}" value="1"
                                    style="display: inline-block; width: auto;">
                                <input type="text" id="options${questionCount}1" name="options${questionCount}[]"
                                    class="form-control" placeholder="Option 1" style="display: inline-block; width: auto; margin: 8px;">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="radio" id="option${questionCount}2" name="correct${questionCount}" value="2"
                                    style="display: inline-block; width: auto;">
                                <input type="text" id="options${questionCount}2" name="options${questionCount}[]"
                                    class="form-control" placeholder="Option 2" style="display: inline-block; width: auto; margin: 8px;">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="radio" id="option${questionCount}3" name="correct${questionCount}" value="3"
                                    style="display: inline-block; width: auto;">
                                <input type="text" id="options${questionCount}3" name="options${questionCount}[]"
                                    class="form-control" placeholder="Option 3" style="display: inline-block; width: auto; margin: 8px;">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="radio" id="option${questionCount}4" name="correct${questionCount}" value="4"
                                    style="display: inline-block; width: auto;">
                                <input type="text" id="options${questionCount}4" name="options${questionCount}[]"
                                    class="form-control" placeholder="Option 4" style="display: inline-block; width: auto; margin: 8px;">
                            </div>
                        </div>
                    </div>
                </div>
            `;
            questionsContainer.insertAdjacentHTML('beforeend', questionHTML);
        });

        submitFormButton.addEventListener('click', () => {
            // Hide the form
            form.style.display = 'none';

            const formData = new FormData(form);

            for (const pair of formData.entries()) {
                console.log(pair[0] + ': ' + pair[1]);
            }

            // Show the success message
            successMessage.style.display = 'block';
        });
    </script>
</body>

</html>

<!DOCTYPE html>
<html>
    <head>
        <title>Dynamic Quiz</title>
        <link rel="stylesheet" href="../css/LearnerQuiz.scss"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body class="body">
        <div class="container mt-5 col-md-7">
            <h3 class="mb-4 text-center">Quiz Title</h3> <hr>
            <div id="quiz-container">
                <!-- Quiz questions and options will be added here dynamically -->
            </div>
            <div class="row">
                <div class="col-md-6 text-left">
                    <button id="prevButton" class="btn btn-primary previous" disabled>Previous</button>
                </div>
                <div class="col-md-6 text-right">
                    <button id="nextButton" class="btn btn-primary next">Next</button>
                    <button id="submitButton" class="btn btn-success submit" style="display: none;">Submit</button>
                </div>
            </div>

            <div id="result" class="mt-4"></div>
            <div id="successMsg" class="mt-4" style="display: none;">
                <h5>Submitted Successfully</h5>
                <span>You have now completed the quiz</span>
                <br>
                <button id="homeButton" class="btn btn-primary">Back to Home</button>
            </div>
        </div>

        <script>
            const quizData = [
                {
                    question: "What is 2 + 2?",
                    options: ["3", "4", "5"],
                    answer: "4",
                },
                {
                    question: "What is the capital of France?",
                    options: ["London", "Berlin", "Paris"],
                    answer: "Paris",
                },
                {
                    question: "Which planet is known as the Red Planet?",
                    options: ["Mars", "Venus", "Earth"],
                    answer: "Mars",
                },
            ];

            let currentQuestion = 0;
            let score = 0;

            const quizContainer = document.getElementById('quiz-container');
            const prevButton = document.getElementById('prevButton');
            const nextButton = document.getElementById('nextButton');
            const submitButton = document.getElementById('submitButton');
            const resultElement = document.getElementById('result');
            const successMsg = document.getElementById('successMsg');
            const homeButton = document.getElementById('homeButton');

            function showQuestion() {
                const question = quizData[currentQuestion];
                quizContainer.innerHTML = `
                    <h6 class="mb-3">${question.question}</h6>
                    ${question.options.map((option, index) => `
                        <div class="form-check">
                            <label>
                                <input class="form-check-input" type="radio" name="answer" value="${option}">
                                    ${option}
                            </label>
                        </div>

                    `).join('')}
                `;
                prevButton.disabled = currentQuestion === 0;
                nextButton.disabled = currentQuestion === quizData.length - 1;
                if (currentQuestion === quizData.length - 1) {
                    submitButton.style.display = 'block';
                    nextButton.style.display = 'none';
                } else {
                    submitButton.style.display = 'none';
                    nextButton.style.display = 'block';
                }
            }

            function showResult() {
                //            quizContainer.innerHTML = '';
                quizContainer.style.display = 'none';
                prevButton.style.display = 'none';
                nextButton.style.display = 'none';
                submitButton.style.display = 'none';
                resultElement.innerHTML = `<h4 class="score">Your score: ${score} out of ${quizData.length}</h4>`;
                successMsg.style.display = 'block';
            }

            function checkAnswer() {
                const selectedOption = document.querySelector('input[name="answer"]:checked');
                if (selectedOption) {
                    const selectedValue = selectedOption.value;
                    const correctAnswer = quizData[currentQuestion].answer;
                    if (selectedValue === correctAnswer) {
                        score++;
                    }
                    currentQuestion++;
                    showQuestion();
                }
            }

            nextButton.addEventListener('click', checkAnswer);
            prevButton.addEventListener('click', () => {
                currentQuestion--;
                showQuestion();
            });
            submitButton.addEventListener('click', showResult);
            homeButton.addEventListener('click', () => {
                window.location.reload(); // Reloads the page (simulating going back to the home page)
            });

            showQuestion();
        </script>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>

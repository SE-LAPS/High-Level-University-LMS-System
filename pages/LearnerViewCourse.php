<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selected Skills and Modules</title>
    <link rel="stylesheet" href="../css/LearnerViewCourse.scss" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="body">
    <div class="container mt-5 col-md-10">
        <h1 class="h1">Indian Cooking by <i>Tutor name</i></h1>
        <span>Cooking[skill name]</span>

        <div class="resource">
            <h3 class="h3">North Indian Cuisine</h3>
            <span>Module 1</span>
            <div class="resource" style="text-align: start;">
                <p class="moduleDesc">
                    Explore the rich and diverse flavors of North Indian cuisine. From aromatic curries to delectable tandoori dishes, this module will introduce you to the heart of Indian culinary traditions.
                </p>
                <a class="pdf" href="../img/progress new report 2.pdf" target="_blank">
                    <div class="material-symbols-outlined"> picture_as_pdf</div>
                    North Indian cuisine recipe.
                </a><br>
                <div class="d-flex justify-content-center align-items-center">
                    <iframe class="ytFrame" width="560" height="315" src="https://www.youtube.com/embed/axMMXIvpsDg?si=v4aXWjW59N8IeY_w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <p class="quiz-link">
                    <span class="material-symbols-outlined"> quiz </span>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#confirmationModal">Start Quiz</a>
                </p>
            </div>
        </div>
    </div>

    <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmationModalLabel">Confirmation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to start the quiz?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <a href="javascript:void(0);" onclick="openQuiz();" class="btn btn-primary">Start Quiz</a>
                </div>
            </div>
        </div>
    </div>
    <script>
        let quizOpened = false;

        function openQuiz() {
            if (!quizOpened) {
                window.open("../pages/LearnerQuiz.php", "_blank");
                quizOpened = true;
                $('#confirmationModal').modal('hide');
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>

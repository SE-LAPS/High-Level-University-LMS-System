<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tutor Dashboard</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="../css/TutorProfile.scss">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <div>
            <div id="nav-content"></div>

            <div class="content">
                <div class="container">
                    <div class="row tutorProfileRow" style="margin: 50px;">
                        <div class="col-md-3">
                            <div class="card border-0 position-relative">
                                <label for="profile" style="cursor: pointer;">
                                    <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" class="card-img-top rounded-circle" alt="Image" id="profileImage">
                                    <div class="position-absolute bottom-0 end-0" style="transform: translate(-80%, -80%);">
                                        <input type="file" id="TutorProfile" accept="image/*" style="display: none;" onchange="displayImage(this);">
                                        <i class="material-icons" style="color: #555; background-color: #fff; border-radius: 50%; padding: 4px; cursor: pointer;" onclick="document.getElementById('profile').click();">edit</i>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <div class="col-md-9">
                            <div class="card tutorProfileCard">
                                <div class="card-body">
                                    <h2 class="card-title">
                                        <span id="nameText">Milton</span>
                                        <span class="edit TutorProfileEdit" onclick="editField('nameText', this)">Edit</span>
                                    </h2>
                                    <h6 class="card-subtitle mb-2 text-muted">
                                        <span id="subtitleText">Martial Arts</span>
                                        <span class="edit TutorProfileEdit" onclick="editField('subtitleText', this)">Edit</span>
                                    </h6>
                                    <p class="card-text">
                                        <span id="descriptionText">I am a passionate martial arts instructor with over 10 years of experience. I specialize in various martial arts disciplines, including Karate, Taekwondo, and Judo. My goal is to help my students develop discipline, self-confidence, and physical fitness through martial arts training.</span>
                                        <span class="edit TutorProfileEdit" onclick="editField('descriptionText', this)">Edit</span>
                                    </p>
                                    <small class="text-muted">
                                        100 Tokens
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="container mt-5">
            <!-- Skill Section -->
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h2>Skills by <i>Tutor Name</i></h2>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addSkillModal">Add Skill</button>
            </div>

            <div class="modal fade" id="addSkillModal" tabindex="-1" aria-labelledby="addSkillModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addSkillModalLabel">Add Skill and modules</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-4" id="step1">
                                <h6>Select a Skill</h6>
                                <select class="form-select" id="skillSelect">
                                    <option value="" disabled selected>Choose an option</option>
                                    <option value="dance">Dance</option>
                                    <option value="karate">Karate</option>
                                    <option value="painting">Painting</option>
                                    <option value="singing">Singing</option>
                                    <option value="acting">Acting</option>
                                    <option value="guitar">Guitar</option>
                                    <option value="piano">Piano</option>
                                    <option value="cooking">Cooking</option>
                                    <option value="fashion_design">Fashion Design</option>
                                    <option value="interior_design">Interior Design</option>
                                    <option value="photography">Photography</option>
                                    <option value="magic_tricks">Magic Tricks</option>
                                    <option value="pottery">Pottery</option>
                                    <option value="astronomy">Astronomy</option>
                                    <option value="gardening">Gardening</option>
                                    <option value="handicrafts">Handicrafts</option>
                                    <option value="yoga">Yoga</option>
                                    <option value="meditation_mindfulness">Meditation and Mindfulness</option>
                                    <option value="creative_writing">Creative Writing</option>
                                    <option value="graphic_design">Graphic Design</option>
                                </select>
                                <br>
                                <h6>Enter the common Sub title</h6>
                                <input type="text" class="form-control mt-3" id="specialName" placeholder="Special Name (e.g., Karnatic)"> <br>
                                <button class="btn btn-primary" onclick="nextStep('step1', 'step2')">Next</button>
                            </div>

                            <!-- Module Addition -->
                            <div class="mb-4" id="step2" style="display: none;">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h2>Add Modules and Materials</h2>
                                    <button class="btn btn-secondary" onclick="nextStep('step2', 'step1')">Back</button>
                                </div>
                                <div id="modulesContainer">
                                    <!-- Modules will be dynamically added here -->
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <button class="btn btn-primary" onclick="addModule()">Add Module</button>
                                    <div>
                                        <button class="btn btn-primary ml-auto" id="addQuizFinishButton" style="display: none" onclick="nextStep('step2', 'step3')">Add Quiz and Finish</button>
                                    </div>
                                    <!-- Finish Button -->
                                    <div class="d-flex justify-content-end mt-4">
                                        <button class="btn btn-success" data-bs-dismiss="modal" onclick="finishSkillEntry()">Finish</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="row skill-container mb-3">
                <div class="d-flex justify-content-between align-items-center custom-container">
                    <div class="custom-title">
                        <h6>Indian Cooking</h6>
                    </div>
                    <div class="custom-button">
                        <a href="../pages/LearnerViewCourse.php" target="_blank" class="btn btn-primary">View</a>
                    </div>
                </div>
            </div>



            <!-- Review Section -->
            <div class="row reviewSectionRow my-4">
                <div class="col-md-11 tutorProfileReviewW">
                    <h3 class="mb-4">Reviews</h3>
                    <!-- Add Review Form -->
                    <form class="mb-4">
                        <div class="mb-3">
                            <label for="reviewText" class="form-label">Write a Review:</label>
                            <textarea class="form-control" id="reviewText" rows="3" style="position: sticky; top: 0;"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit Review</button>
                    </form>
                </div>
            </div>

            <!-- Separate Container for Displayed Reviews -->
            <div class="row reviewContainer">
                <div class="col-md-12">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <img src="https://via.placeholder.com/50" alt="Reviewer's Profile" class="rounded-circle me-3">
                                <h5 class="card-title">Learner's Name</h5>
                            </div>
                            <p class="card-text">This tutor is fantastic. I learned so much from them!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row reviewContainer">
                <div class="col-md-12">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <img src="https://via.placeholder.com/50" alt="Reviewer's Profile" class="rounded-circle me-3">
                                <h5 class="card-title">Another Learner</h5>
                            </div>
                            <p class="card-text">Great tutor, highly recommended!</p>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script>
                                            let moduleCount = 1;
                                            let moduleAdded = false;


                                            function nextStep(currentStepId, nextStepId) {
                                                document.getElementById(currentStepId).style.display = 'none';
                                                document.getElementById(nextStepId).style.display = 'block';
                                            }


                                            function addModule() {
                                            const moduleForm = `
                                                    <div class="module-form mb-4">
                                        <h3>Module ${moduleCount++}</h3>
                                        <input type="text" class="form-control" placeholder="Module Name (e.g., Module ${moduleCount})">
                                    <textarea class="form-control mt-2" placeholder="Module Description"></textarea>
                                        <!-- PDF Input -->
                                <div class="mt-2">
                            <label for="pdfInput">Upload PDF</label>
                    <input type="file" class="form-control" id="pdfInput" accept=".pdf" multiple>
        </div>
            <!-- Text Input -->
            <div class="mt-2">
            <label for="textInput">Enter Text</label>
                <textarea class="form-control" id="textInput" placeholder="Enter Text"></textarea>
                </div>
                <!-- YouTube Link Input -->
            <div class="mt-2">
            <label for="youtubeInput">YouTube Link</label>
            <input type="text" class="form-control" id="youtubeInput" placeholder="YouTube Link">
                                </div>
                            </div>
                            
                            `;
                            document.getElementById('modulesContainer').insertAdjacentHTML('beforeend', moduleForm);

                                       
                                    }
                                    function finishSkillEntry() {
                // You can add code to handle finishing the skill entry here
                // For example, submit the data to a server or perform other actions.
                // Then close the modal or do any other necessary actions.
            }


                                    // Reset modal content when hidden
                                    const addSkillModal = document.getElementById('addSkillModal');
                                    addSkillModal.addEventListener('hidden.bs.modal', function () {
                                        document.getElementById('step1').style.display = 'block';
                                        document.getElementById('step2').style.display = 'none';
                                        document.getElementById('step3').style.display = 'none';
                                        document.getElementById('skillSelect').value = '';
                                        document.getElementById('specialName').value = '';
                                        moduleCount = 1;
                                        document.getElementById('modulesContainer').innerHTML = '';
                                    });
        </script>
        <script src="../js/tutorProfile.js"></script>

    </body>
</html>

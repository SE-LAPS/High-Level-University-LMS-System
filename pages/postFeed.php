<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/StyleSheet.scss">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .post {
            margin-top: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 15px;
            transition: box-shadow 0.3s;
        }
        
        .post:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        
        .postProfileImg {
            max-width: 100px;
            border-radius: 50%;
        }
        
        .postText {
            margin-top: 10px;
            color: #333;
        }
        
        .postLikeCounter {
            margin-left: 5px;
        }
        
        .footerIcon {
            margin-right: 5px;
        }
        
        .postVertButton {
            color: #777;
        }
        
        /* Styling for the Create Post form */
        .container.create-post {
            margin-top: 20px;
        }
        
        .share-wrapper {
            padding: 10px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
        }
        
        .share-top {
            display: flex;
            align-items: center;
            justify-content: space-between;
            cursor: pointer;
        }
        
        .share-profile {
            display: flex;
            align-items: center;
        }
        
        .share-profile-image {
            width: 40px;
            height: 40px;
            object-fit: cover;
            border-radius: 50%;
            margin-right: 10px;
        }
        
        .share-input {
            border: none;
            flex: 1;
            outline-width: 0;
        }
        
        .share-hr {
            border-top: 1px solid #ccc;
            margin: 10px 0;
        }
        
        .share-options {
            display: flex;
            align-items: center;
            justify-content: flex-start;
        }
        
        .share-option {
            display: flex;
            align-items: center;
            margin-right: 20px;
            cursor: pointer;
        }
        
        .share-icon {
            font-size: 18px;
            margin-right: 5px;
        }
        
        .video-icon {
            color: #bb0000f2;
        }
        
        .photo-icon {
            color: #2e0196f1;
        }
        
        .share-post-button {
            background-color: #55c360;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 8px 15px;
            cursor: pointer;
        }
        
        .popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            width: 75%;
            z-index: 999;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
        
        .popup-content {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            margin-bottom: 10px;
        }
        
        .popup-profile-image {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }
        
        .popup-name {
            font-weight: 500;
            color: #333;
        }
        
        .popup-input {
            border: none;
            padding: 10px;
            border-radius: 5px;
            resize: none;
            height: 100px;
            width: 100%;
            outline: none;
            margin-bottom: 10px;
        }
        
        .popup-profile {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            width: 100%;
            margin-bottom: 10px;
        }
        
        .popup-options {
            display: flex;
            justify-content: flex-start;
            width: 100%;
            margin-bottom: 10px;
        }
        
        .popup-option {
            display: flex;
            align-items: center;
            margin-right: 20px;
            cursor: pointer;
        }
        
        .popup-close {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 20px;
            cursor: pointer;
        }
        
        .popup-post-button {
            background-color: #55c360;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 8px 15px;
            cursor: pointer;
            align-self: flex-end;
            align-items: flex-end;
            align-content: flex-end;
            width: auto;
        }
    </style>
</head>
<body>
    <div class="container create-post" style="margin-top: 20px; color: black; padding: 10px 0; width: 30%;">
        <div class="share-wrapper">
            <div class="share-top">
                <img src="https://images.unsplash.com/photo-1607346256330-dee7af15f7c5?auto=format&fit=crop&q=80&w=1000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8aW5kaWFuJTIwbWFufGVufDB8fDB8fHww" alt="Profile" class="share-profile-image rounded-circle">
                <input type="text" placeholder="What is on your mind, girl?.." class="share-input form-control border-0 " id="openPopup" data-bs-toggle="modal" data-bs-target="#popupModal"/>
                <div class="modal" id="popupModal" tabindex="-1" aria-labelledby="popupModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <img src="https://images.unsplash.com/photo-1607346256330-dee7af15f7c5?auto=format&fit=crop&q=80&w=1000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8aW5kaWFuJTIwbWFufGVufDB8fDB8fHww" alt="Profile" class="popup-profile-image rounded-circle">
                                <span class="popup-profile-name">Your Name</span>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body" style="color: black;">
                                <textarea placeholder="What's on your mind, girl?.." class="popup-input form-control"></textarea>
                                <div class="popup-options">
                                    <div class="popup-option">
                                        <i class="material-icons popup-icon video-icon">video_camera_front</i>
                                        <span class="popup-option-text">Video</span>
                                    </div>
                                    <div class="popup-option">
                                        <i class="material-icons popup-icon photo-icon">perm_media</i>
                                        <span class="popup-option-text">Photo</span>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary share-post-button">Post</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="share-hr">
            <div class="share-bottom">
                <div class="share-options">
                    <div class="share-option">
                        <i class="material-icons share-icon video-icon">video_camera_front</i>
                        <span class="share-option-text">Video</span>
                    </div>
                    <div class="share-option">
                        <i class="material-icons share-icon photo-icon">perm_media</i>
                        <span class="share-option-text">Photo</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container post">
        <div class="postWrapper">
            <div class="postTop">
                <div class="PostTopLeft">
                    <img src="https://images.unsplash.com/photo-1607346256330-dee7af15f7c5?auto=format&fit=crop&q=80&w=1000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8aW5kaWFuJTIwbWFufGVufDB8fDB8fHww" alt="ProfilePic" class="postProfileImg">
                    <span class="postUsername">Marcus</span>
                    <span class="postDate">53 mins ago</span>
                </div>
                <div class="PostTopRight">
                    <button class="btn">
                        <i class="fas fa-ellipsis-h postVertButton"></i>
                    </button>
                </div>
            </div>
            <div class="postCenter">
                <p class="postText">Project management is “the application of knowledge, skills, tools, and techniques to project activities in order to meet or exceed stakeholder needs and expectations from a project”</p>
                <img src="https://images.unsplash.com/photo-1607346256330-dee7af15f7c5?auto=format&fit=crop&q=80&w=1000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8aW5kaWFuJTIwbWFufGVufDB8fDB8fHww" alt="" class="postImg img-fluid">
            </div>
            <hr>
            <div class="postBottom">
                <div class="postBottomLeft">
                    <button class="btn btn-danger bottomLeftIcon">
                        <i class="fas fa-heart"></i>
                    </button>
                    <span class="postLikeCounter">90</span>
                </div>
            </div>
            <hr class="footerHr">
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

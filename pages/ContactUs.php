<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/ContactUs.scss"> 
</head>
<body>
    <div class="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <h2>Contact Us</h2>
                    <p>If you have any questions or inquiries, please feel free to get in touch with us. We'd love to hear from you!</p>
                </div>
                <div class="col-md-6">
                    <form>
                        <div class="mb-3">
                            <label for="formName" class="form-label">Your Name</label>
                            <input type="text" class="form-control" id="formName" placeholder="Enter your name">
                        </div>
                        <div class="mb-3">
                            <label for="formEmail" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="formEmail" placeholder="Enter your email">
                        </div>
                        <div class="mb-3">
                            <label for="formMessage" class="form-label">Message</label>
                            <textarea class="form-control" id="formMessage" rows="4" placeholder="Enter your message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

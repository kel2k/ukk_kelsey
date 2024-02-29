<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyJdO9Mr8JqG5HjwCyAuFkoWiGgFAW/dAi" crossorigin="anonymous">
    <title>Gallery Upload</title>
    <script>
        function redirectToDashboard() {
            // Assuming you want to redirect to /home/dashboard
            window.location.href = '/home/dashboard';
        }

        function resetForm() {
            // Add your logic for resetting the form here
        }
    </script>

    <style>
        body {
            background-color: #f8f9fa;
        }

        .form-wrapper {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-top: 50px;
        }

        .form-title {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
            color: #343a40;
        }

        .form-group {
            margin-bottom: 20px;
        }

        /* Ubah warna latar belakang dan warna teks textarea */
        textarea {
            background-color: #fff;
            color: #000;
        }

        /* Ubah warna latar belakang dan warna teks dropdown/select */
        select {
            background-color: #fff;
            color: #000;
        }

        .upload-btn-wrapper {
            position: relative;
            overflow: hidden;
            display: inline-block;
        }

        .btn-upload {
            border: 2px solid gray;
            color: gray;
            background-color: white;
            padding: 8px 20px;
            border-radius: 8px;
            font-size: 18px;
            font-weight: bold;
        }

        .upload-btn-wrapper input[type=file] {
            font-size: 100px;
            position: absolute;
            left: 0;
            top: 0;
            opacity: 0;
        }

        .btn-submit,
        .btn-cancel {
            font-size: 16px;
            border-radius: 8px;
            width: 100px;
        }

        .btn-submit {
            background-color: #007bff;
            color: #fff;
            margin-right: 10px;
        }

        .btn-cancel {
            background-color: #6c757d;
            color: #fff;
        }

        .note-text {
            font-size: 14px;
            color: #dc3545;
        }
    </style>

</head>

<body>
    <div class="form-wrapper">
        <div class="form">
            <form action="<?= base_url('Home/aksi_upload') ?>" method="post" enctype="multipart/form-data"
                id="uploadForm">
                <h4 class="form-title">Upload Photo</h4>
                <div class="form-group">
                    <label for="exampleTextarea1">Description</label>
                    <textarea class="form-control" id="exampleTextarea1" name="description" rows="4"
                        required></textarea>
                </div>
                <div class="form-group">
                    <label for="category">Choose Category:</label>
                    <select class="form-control" id="category" name="category" required>
                        <option value="Shortfilms">Pemandangan</option>
                        <option value="Professional">Foto Pribadi</option>
                        <option value="Commercial">Hobby</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="photo">Upload Photo:</label>
                    <div class="upload-btn-wrapper">
                        <button class="btn-upload">Choose a file</button>
                        <input type="file" name="image" id="image" required>
                    </div>
                </div>
                <div class="d-flex flex-wrap justify-content-between">
                    <p class="note-text text-danger mt-2">Please fill in all fields to enable submission.</p>
                    <div>
                        <button type="submit" class="btn btn-submit" id="submitBtn" disabled>Submit</button>
                        <button type="button" class="btn btn-cancel" onclick="redirectToDashboard()">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.getElementById("uploadForm").addEventListener("input", function () {
            var description = document.getElementById("exampleTextarea1").value;
            var image = document.getElementById("image").value;
            var submitBtn = document.getElementById("submitBtn");

            submitBtn.disabled = !description || !image;
        });

        function resetForm() {
            document.getElementById("uploadForm").reset();
            // Add any additional logic you may need after resetting the form
        }
    </script>

    <!-- Bootstrap JS (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"
        integrity="sha384-1aycJ/jT2ToMXY3T4lp3lJIWoNLM8EcWbY5qH8eslE24S9EZwY+te9Fxl0PJJGY"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyJdO9Mr8JqG5HjwCyAuFkoWiGgFAW/dAi"
        crossorigin="anonymous"></script>
</body>

</html>
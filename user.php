<?php
include 'config.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $course=$_POST['course'];
    $email=$_POST['email'];
    $phone=$_POST['mobile'];

    $sql="insert into users(Name,Course,email_id,Phone_no) values('$name','$course','$email','$phone')";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:display.php');
    }
    else{
        die(mysqli_error($con));
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    
    <style>
       
        .container {
            margin-top: 50px;
        }
        .card {
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            animation: fadeIn 1s ease-in-out;
            background-color: rgba(255, 255, 255, 0.9);
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .card-header {
            background: linear-gradient(45deg, #007bff, #00c6ff);
            color: #fff;
            border-radius: 10px 10px 0 0;
            text-align: center;
        }
        .card-title {
            margin-bottom: 0;
        }
        .form-group label {
            font-weight: bold;
            color: #495057;
        }
        .form-control {
            border-radius: 5px;
            transition: box-shadow 0.3s, border-color 0.3s;
        }
        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 10px rgba(0, 123, 255, 0.5);
        }
        .btn-primary {
            background: linear-gradient(45deg, #007bff, #00c6ff);
            border: none;
            transition: background 0.3s, transform 0.3s;
        }
        .btn-primary:hover {
            background: linear-gradient(45deg, #0056b3, #004085);
            transform: scale(1.05);
        }
        .modal-header {
            border-bottom: none;
        }
        .modal-footer {
            border-top: none;
        }
        footer {
            text-align: center;
            margin-top: 50px;
            padding: 10px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>

    <title>CRUD Operations</title>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Add New Student</h3>
            </div>
            <div class="card-body">
                <form method="post">
                    <div class="form-group">
                        <label>Student Name</label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Enter your Name" name="name" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Course</label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Enter Course" name="course" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Enter email" name="email" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Phone Number</label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Enter Phone no" name="mobile" autocomplete="off">
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#confirmModal">Submit</button>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="confirmModalLabel">Confirm Submission</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to submit this information?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary" name="submit">Confirm</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <footer>
            <p>&copy; 2024 CRUD Operations. All rights reserved.</p>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>

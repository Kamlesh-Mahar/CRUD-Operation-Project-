<?php
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operations Project</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background: linear-gradient(to right, #ece9e6, #ffffff);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh; 
        }

        .container {
            flex: 1; 
            margin-top: 50px;
        }

        .btn-custom {
            color: white;
            text-decoration: none;
        }

        .btn-custom:hover {
            color: white;
            text-decoration: none;
        }

        .table thead th {
            background-color: #343a40;
            color: white;
        }

        .table tbody tr:hover {
            background-color: #f1f1f1;
            transition: background-color 0.3s;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-primary:hover, .btn-danger:hover {
            opacity: 0.8;
        }

        .btn-primary:focus, .btn-danger:focus {
            box-shadow: none;
        }

        .card {
            border-radius: 15px;
            box-shadow: 0 6px 12px rgba(0,0,0,0.1);
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
            margin-bottom: 30px;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 24px rgba(0,0,0,0.2);
        }

        .card-header {
            background-color: #343a40;
            color: white;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            padding: 1rem 1.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .card-body {
            padding: 1.5rem;
        }

        .btn-group {
            display: flex;
            gap: 5px;
        }

        .btn-primary i, .btn-danger i {
            margin-right: 5px;
        }

        .text-center {
            color: #6c757d;
        }

        @media (max-width: 768px) {
            .card-header, .card-body {
                text-align: center;
            }

            .btn-group {
                flex-direction: column;
            }
        }

        h4 {
            font-weight: bold;
            margin: 0;
        }

        .table-container {
            overflow-x: auto;
        }

        .action-buttons {
            display: flex;
            justify-content: center;
        }

        .action-buttons .btn {
            margin: 0 5px;
        }

        .action-buttons .btn-sm {
            padding: 0.25rem 0.5rem;
            font-size: 0.875rem;
        }
        
        footer {
            margin-top: auto; 
            background-color: #f8f9fa;
            text-align: center;
            padding: 1rem 0;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">CRUD Operations Project</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
</nav>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>CRUD Operations Project</h4>
                <button class="btn btn-primary"><a href="user.php" class="btn-custom"><i class="fas fa-user-plus"></i> Add User</a></button>
            </div>
            <div class="card-body">
                <div class="table-container">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Sr No.</th>
                                <th scope="col">Name</th>
                                <th scope="col">Course</th>
                                <th scope="col">Email ID</th>
                                <th scope="col">Phone Number</th>
                                <th scope="col">Operations</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM users";
                            $result = mysqli_query($con, $sql);
                            if ($result) {
                                $count = 1;
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $id = $row['Id'];
                                    $name = $row['Name'];
                                    $course = $row['Course'];
                                    $email = $row['email_id'];
                                    $phone = $row['Phone_no'];
                                    echo '<tr>
                                        <td>'.$count.'</td>
                                        <td>'.$name.'</td>
                                        <td>'.$course.'</td>
                                        <td>'.$email.'</td>
                                        <td>'.$phone.'</td>
                                        <td class="action-buttons">
                                            <button class="btn btn-primary btn-sm"><a href="update.php?update_id='.$id.'" class="btn-custom"><i class="fas fa-edit"></i> Update</a></button>
                                            <button class="btn btn-danger btn-sm"><a href="delete.php?delete_id='.$id.'" class="btn-custom"><i class="fas fa-trash-alt"></i> Delete</a></button>
                                        </td>
                                    </tr>';
                                    $count++;
                                }
                            } else {
                                echo '<tr><td colspan="6" class="text-center">No records found</td></tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-body-tertiary text-center">
        <div class="container p-4">
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2023 Copyright: Kamlesh singh Mahar
        </div>
    </footer>

    
</body>
</html>

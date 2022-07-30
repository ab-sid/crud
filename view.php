<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
    <link rel="stylesheet" href=" 	https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <div class="btn btn-primary"><a href="user.php" class="text-white text-decoration-none">Add User</a></div>

        <!-- TABLE START -->
        <table class="table mt-5">
            <thead>
                <tr>
                <th scope="col">SL NO</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile</th>
                <th scope="col">Password</th>
                <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "select * from tbl_crud";
                $result = mysqli_query($con,$sql);
                if ($result) {
                    while($row = mysqli_fetch_assoc($result)){
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $mobile = $row['mobile'];
                        $password = $row['password'];
                        echo '<tr>
                        <th scope="row">'.$id.'</th>
                        <td>'.$name.'</td>
                        <td>'.$email.'</td>
                        <td>'.$mobile.'</td>
                        <td>'.$password.'</td>
                        <td>
                        <button class="btn btn-primary"><a class="text-white text-decoration-none" href="update.php?updateid='.$id.'">Update</a></button>
                        <button class="btn btn-danger"><a class="text-white text-decoration-none" href="delete.php?deleteid='.$id.'">Delete</a></button>
                        </td>
                        </tr>';
                    }
                }
                ?>
            </tbody>
        </table>
        <!-- TABLE END -->
    </div>
</body>
</html>
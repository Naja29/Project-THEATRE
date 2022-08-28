<?php 
    require_once('connection/db.php');
?>
<?php

$query1=mysqli_query($connection,"Select * from users");
$users=mysqli_num_rows($query1);

$query2=mysqli_query($connection,"Select * from posts");
$posts=mysqli_num_rows($query2);

$query3=mysqli_query($connection,"Select * from comment");
$comment=mysqli_num_rows($query3);

$query4=mysqli_query($connection,"Select * from contact");
$contact=mysqli_num_rows($query4);

$query5=mysqli_query($connection,"Select * from annoncement");
$annoncement=mysqli_num_rows($query5);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="css/dashboard.css">
        <title>Dashboard</title>
    </head>
    <body>
        <div class="container-fluid">
        <h3 class="h3-title">Welcome to Admin Panel </h3>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <div class="btn_back">
                <a class="btn-outline-info" href="index.php">Signout</a>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="card text-center">
                        <div class="title card-header">
                            Users
                        </div>
                        <div class="card-body">
                            <a href="users/index.php" class="btn btn-outline">Click Here</a>
                        </div>
                        <div class="card-footer text-muted">
                            <?php echo $users;?> Users
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card text-center">
                        <div class="title card-header">
                            Movies
                        </div>
                        <div class="card-body">
                            <a href="movies/index.php" class="btn btn-outline">Click Here</a>
                        </div>
                        <div class="card-footer text-muted">
                            <?php echo $posts;?> Movies
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card text-center">
                        <div class="title card-header">
                            Comments
                        </div>
                        <div class="card-body">
                            <a href="comments/index.php" class="btn btn-outline">Click Here</a>
                        </div>
                        <div class="card-footer text-muted">
                            <?php echo $comment;?> Comments
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card text-center">
                        <div class="title card-header">
                            Contact Us
                        </div>
                        <div class="card-body">
                            <a href="contactus/index.php" class="btn btn-outline">Click Here</a>
                        </div>
                        <div class="card-footer text-muted">
                            <?php echo $contact;?> Contacts
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card text-center">
                        <div class="title card-header">
                            Announcements
                        </div>
                        <div class="card-body">
                            <a href="annoncements/index.php" class="btn btn-outline">Click Here</a>
                        </div>
                        <div class="card-footer text-muted">
                            <?php echo $annoncement;?> Annoncements
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
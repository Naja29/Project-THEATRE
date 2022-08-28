<?php
    require_once('../connection/db.php');
?>
<?php 
    if(isset($_POST['update_movie']))
    {
        $name=$_POST['name'];
        $catergory=$_POST['catergory'];
        $cast=$_POST['cast'];
        $language=$_POST['language'];
        $duration=$_POST['duration'];
        $time=$_POST['time'];
        $price=$_POST['price'];
        $date=$_POST['date'];
        $status=$_POST['status'];

        //file
        $file = $_FILES['image'];
        $file_name = $file['name'];
        $file_type = $file['type'];
        $file_size = $file['size'];
        $file_temp_loc = $file['tmp_name'];
        $file_store = "images/".$file_name;

        move_uploaded_file($file_temp_loc,$file_store);
      
        $postid=$_GET['update'];
        $query = mysqli_query($connection,"update posts set Name = '$name', Catergory = '$catergory',Cast = '$cast',Language ='$language',Duration = '$duration',Time='$time',Price='$price', Image = '$file_name',Status='$status',Date='$date' where P_ID='$postid'");
      if ($query) {
        echo 
        "<script>
            alert('SucessFully updated');
            window.location.href='index.php';
        </script>";
        }
      else {
		echo 
        "<script>
            alert('Something went wrong');
            window.location.href='editposts.php';
        </script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/style.css">
        <title>Document</title>
    </head>
    <body>
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Movies</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Update Movies</li>
                </ol>
            </nav>
            <h3 class="title">Update Movies</h3>
            <div class="post_form">
                <form action="" method="post" enctype="multipart/form-data" >
                    <?php
                        $postid=$_GET['update'];
                        $result=mysqli_query($connection,"select * from posts where P_ID='$postid'");
                        while ($row=mysqli_fetch_array($result)) {
                    ?>
                    <div class="form-group">
                        <label class="frm-grp-post-label" for="name">Name <span class="required">*</span></label>
                        <input type="text" class="form-control" name="name" id="name" value="<?php echo $row['Name'];?>" required>
                    </div>
                    <div class="form-group">
                        <label class="frm-grp-post-label" for="catergory">Catergory <span class="required">*</span></label>
                            <select class="catergory" name="catergory" id="catergory" value="<?php echo $row['Catergory'];?>" required>
                                <option class ="Action" value="Action">Action</option>
                                <option class ="Commedy" value='Commedy'>Commedy</option>
                                <option class ="Romantic" value="Romantic">Romantic</option>
                                <option class ="Adventure" value='Adventure'>Adventure</option>
                                <option class ="Drama" value="Drama">Drama</option>
                            </select>
                    </div>     
                    <div class="form-group">
                        <label class="frm-grp-post-label" for="cast">Cast <span class="required">*</span></label>
                        <input type="text" class="form-control" name="cast" id="cast" value="<?php echo $row['Cast'];?>" required>
                    </div>
                    <div class="form-group">
                        <label class="frm-grp-post-label" for="language">Language <span class="required">*</span></label>
                        <input type="text" class="form-control" name="language" id="language" value="<?php echo $row['Language'];?>" required>
                    </div>
                    <div class="form-group">
                        <label class="frm-grp-post-label" for="duration">Duration <span class="required">*</span></label>
                        <input type="text" class="form-control" name="duration" id="duration" value="<?php echo $row['Duration'];?>" required>
                    </div>
                    <div class="form-group">
                        <label class="frm-grp-post-label" for="time">Time <span class="required">*</span></label>
                        <input type="text" class="form-control" name="time" value="<?php echo $row['Time'];?>" id="time" required>
                    </div>                            
                    <div class="form-group">
                        <label class="frm-grp-post-label" for="price">Price <span class="required">*</span></label>
                        <input type="text" class="form-control" name="price" id="price" value="<?php echo $row['Price'];?>" required>
                    </div>                       
                    <div class="form-group">
                        <label class="frm-grp-post-label1">Add Image <span class="required">*</span></label>
                        <input type="file" class="ai" name="image" accept="images/*" value="<?php echo $row['Image'];?>"id="image" required>
                    </div>                    
                    <div class="form-group">
                        <label class="frm-grp-post-label" for="status">Status <span class="required">*</span></label>
                            <select class="showing_status" name="status" id="status" value="<?php echo $row['Status'];?>" required>
                                <option class ="showing" value="showing">Now Showing</option>
                                <option class ="comingsoon" value='comingsoon'>Coming Soon</option>
                            </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="date" id="date" value="<?php echo date("d.m.Y");?>" hidden>
                    </div>
                    <div class="button_add_movie">
                        <button type="submit" value="submit" class="add_movie" name="update_movie">Update Movie </button>
                    </div>
                    <?php } ?>
                </form>
            </div>
        </div>
    </body>
</html>
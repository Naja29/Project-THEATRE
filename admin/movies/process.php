<?php 
    require_once('../connection/db.php');
?>
<?php 
    if(isset($_POST['add_movie']))
    {
        $name=$_POST['name'];
        $catergory=$_POST['catergory'];
        $cast=$_POST['cast'];
        $language=$_POST['language'];
        $duration=$_POST['duration'];
        $time=$_POST['time'];
        $price=$_POST['price'];
        $status=$_POST['status'];
        $date=$_POST['date'];
  
        //file
        $file = $_FILES['image'];
        $file_name = $file['name'];
        $file_type = $file['type'];
        $file_size = $file['size'];
        $file_temp_loc = $file['tmp_name'];
        $file_store = "images/".$file_name;

        move_uploaded_file($file_temp_loc,$file_store);

        $query = mysqli_query($connection,"insert into posts (Name,Catergory,Cast,Language,Duration,Time,Price,Image,Status,Date) 
        values('$name','$catergory','$cast','$language','$duration','$time','$price','$file_name','$status','$date')");
      if ($query) {
        echo 
        "<script>
            alert('SucessFully Added');
            window.location.href='index.php';
        </script>";
        }
      else {
		echo 
        "<script>
            alert('Something went wrong');
            window.location.href='addposts.php';
        </script>";
        }
    }
?>
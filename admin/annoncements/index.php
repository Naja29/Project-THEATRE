<?php
    require_once('../connection/db.php');
?>
<?php
    if(isset($_GET["Delete"])){
        $sql1="Delete from annoncement where Ann_id=".$_GET["Delete"];
        $result2 = mysqli_query($connection,$sql1);

        if($sql1){
            echo '<span style="color:#f6e6e6;">SuccessFully Deleted</span>';
        }
        else{
            echo '<span style="color:#f6e6e6;">Something went Wrong</span>';
        }
    }
    if(isset($_GET["Approve"])){
        $sql2="update annoncement set Status='1' where Ann_id=".$_GET["Approve"];
        $result2 = mysqli_query($connection,$sql2);

        if($sql2){
            echo '<span style="color:#f6e6e6;">SuccessFully Updated</span>';
        }
        else{
            echo '<span style="color:#f6e6e6;">Something went Wrong</span>';
        }
    }
    if(isset($_GET["Reject"])){
        $sql3="update annoncement set Status='2' where Ann_id=".$_GET["Reject"];
        $result3 = mysqli_query($connection,$sql3);

        if($sql3){
            echo '<span style="color:#f6e6e6;">SuccessFully Updated</span>';
        }
        else{
            echo '<span style="color:#f6e6e6;">Something went Wrong</span>';
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
        <div class="container-fluid">
            <h3 class="title">Announcements</h3>
            <div class="btn_back">
                <a class="btn-outline-info" href="../dashboard.php">Back</a>
            </div>
            <div class="btn_add">
                <a class="btn-out" href="add_annoncements.php">Add Announcements</a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Topic</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                    <th scope="col">Status</th>
                    <th scope="col">Operations</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $query=mysqli_query($connection,"select * from `annoncement`");
                        while($row=mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <th scope="row"><?php echo $row['Ann_id']; ?></th>
                        <td><?php echo $row['Topic']; ?></td>
                        <td><?php echo $row['Description']; ?></td>
                        <td><?php echo $row['Image']; ?></td>
                        <td>
                            <?php  
                                if($row['Status']=="1")
                                    {
                                        $approved='<div class="text-success">Showing</div>';
                                        echo $approved;
                                    };
                                if($row['Status']=="2")
                                    { 
                                        $rejected='<div class="text-danger">Not Showing</div>';
                                        echo $rejected;
                                    };

                                if($row['Status']=='')
                                    { 
                                        $pending_approval='<div class="text-warning">Pending </div>';
                                        echo $pending_approval;
                                    };
                                                                        
                            ?>
                        </td>
                        <td>
                            <a class="link" href="index.php?Approve=<?php echo $row["Ann_id"];?>">Show</a> &nbsp
                            <a class="link" href="index.php?Reject=<?php echo $row["Ann_id"];?>">Not Show</a> &nbsp
                            <a class="link" href="update_announcements.php?update=<?php echo $row["Ann_id"];?>">Update</a> &nbsp
                            <a class="link" href="index.php?Delete=<?php echo $row["Ann_id"];?>">Delete</a>
                            
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table> 
        </div>
    </body>
</html>
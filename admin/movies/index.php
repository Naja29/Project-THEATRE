<?php
    require_once('../connection/db.php');
?>
<?php
    if(isset($_GET["Delete"])){
        $sql1="Delete from posts where P_ID=".$_GET["Delete"];
        $result2 = mysqli_query($connection,$sql1);

        if($sql1){
            echo '<span style="color:#f6e6e6;">SuccessFully Deleted</span>';
        }
        else{
            echo  '<span style="color:#f6e6e6;">Something went Wrong</span>';
        }
    }
    if(isset($_GET["Approve"])){
        $sql2="update posts set Status='showing' where P_ID=".$_GET["Approve"];
        $result2 = mysqli_query($connection,$sql2);

        if($sql2){
            echo  '<span style="color:#f6e6e6;">SuccessFully Updated</span>';
        }
        else{
            echo  '<span style="color:#f6e6e6;">Something went Wrong</span>';
        }
    }
    if(isset($_GET["Reject"])){
        $sql3="update posts set Status='comingsoon' where P_ID=".$_GET["Reject"];
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
            <h3 class="title">Movies</h3>
            <div class="btn_back">
                <a class="btn-outline-info" href="../dashboard.php">Back</a>
            </div>
            <div class="btn_add">
                <a class="btn-out" href="add_movies.php">Add Movies</a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">ID </th>
                        <th scope="col">Name</th>
                        <th scope="col">Catergory</th>
                        <th scope="col">Cast</th>
                        <th scope="col">Language</th>
                        <th scope="col">Duration</th>
                        <th scope="col">Time</th>
                        <th scope="col">Price</th>
                        <th scope="col">Image</th>
                        <th scope="col">Status</th>
                        <th scope="col">Date</th>
                        <th scope="col">Operations</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $query=mysqli_query($connection,"select * from `posts`");
                        while($row=mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <th scope="row"><?php echo $row['P_ID']; ?></th>
                            <td><?php echo $row['P_ID']; ?></td>
                            <td><?php echo $row['Name']; ?></td>
                            <td><?php echo $row['Catergory']; ?></td>
                            <td><?php echo $row['Cast']; ?></td>
                            <td><?php echo $row['Language']; ?></td>
                            <td><?php echo $row['Duration']; ?></td>
                            <td><?php echo $row['Time']; ?></td>
                            <td><?php echo $row['Price']; ?></td>
                            <td><?php echo $row['Image']; ?></td>
                            <td>
                                <?php  
                                    if($row['Status']=="showing")
                                        {
                                            $approved='<div class="text-success">Showing</div>';
                                            echo $approved;
                                        };
                                    if($row['Status']=="comingsoon")
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
                            <td><?php echo $row['Date']; ?></td>
                            <td>
                                <a class="link" href="index.php?Approve=<?php echo $row["P_ID"];?>">Show</a> &nbsp
                                <a class="link" href="index.php?Reject=<?php echo $row["P_ID"];?>">Dont Show</a> &nbsp
                                <a class="link" href="update_movies.php?update=<?php echo $row["P_ID"];?>">Update</a> &nbsp
                                <a class="link" href="index.php?Delete=<?php echo $row["P_ID"];?>">Delete</a>
                            </td>
                        </th>
                    </tr>
                    <?php } ?>
                </tbody>
            </table> 
        </div>
    </body>
</html>
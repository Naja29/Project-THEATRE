<?php
    require_once('../connection/db.php');
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
                    <li class="breadcrumb-item active" aria-current="page">Add Movies</li>
                </ol>
            </nav>
            <h3 class="title">Add Movies</h3>
            <div class="post_form">
                <form action="process.php" method="post" enctype="multipart/form-data" >
                    <div class="form-group">
                        <label class="frm-grp-post-label" for="name">Name <span class="required">*</span></label>
                        <input type="text" class="form-control" name="name" id="name" required>
                    </div>
                    <div class="form-group">
                        <label class="frm-grp-post-label" for="catergory">Catergory <span class="required">*</span></label>
                            <select class="catergory" name="catergory" id="catergory" required>
                                <option class ="Action" value="Action">Action</option>
                                <option class ="Commedy" value='Commedy'>Commedy</option>
                                <option class ="Romantic" value="Romantic">Romantic</option>
                                <option class ="Adventure" value='Adventure'>Adventure</option>
                                <option class ="Adventure" value='Adventure'>Thriller</option>
                                <option class ="Drama" value="Drama">Drama</option>
                            </select>
                    </div>     
                    <div class="form-group">
                        <label class="frm-grp-post-label" for="cast">Cast <span class="required">*</span></label>
                        <input type="text" class="form-control" name="cast" id="cast" required>
                    </div>
                    <div class="form-group">
                        <label class="frm-grp-post-label" for="language">Language <span class="required">*</span></label>
                        <input type="text" class="form-control" name="language" id="language" required>
                    </div>
                    <div class="form-group">
                        <label class="frm-grp-post-label" for="duration">Duration <span class="required">*</span></label>
                        <input type="text" class="form-control" name="duration" id="duration" required>
                    </div>
                    <div class="form-group">
                        <label class="frm-grp-post-label" for="time">Time <span class="required">*</span></label>
                        <input type="time" class="form-control" name="time" id="time" required>
                    </div>                            
                    <div class="form-group">
                        <label class="frm-grp-post-label" for="price">Price <span class="required">*</span></label>
                        <input type="text" class="form-control" name="price" id="price" required>
                    </div>                       
                    <div class="form-group">
                        <label class="frm-grp-post-label">Add Image <span class="required">*</span></label>
                        <input type="file" class="ai" name="image" accept="images/*" id="image" required>
                    </div>                    
                    <div class="form-group">
                        <label class="frm-grp-post-label" for="status">Status <span class="required">*</span></label>
                            <select class="showing_status" name="status" id="status" required>
                                <option class ="showing" value="showing">Now Showing</option>
                                <option class ="comingsoon" value='comingsoon'>Coming Soon</option>
                            </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="date" id="date" value="<?php echo date("d.m.Y");?>" hidden>
                    </div>
                    <div class="button_add_movie">
                        <button type="submit" value="submit" class="add_movie" name="add_movie">Add Movie </button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
<?php
    session_start();

    if(isset($_POST['add'])){
        
        $_SESSION['bookmarks'][$_POST['bname']] = $_POST['urlinput'];
    }
    if (isset($_POST['clear'])) {
        $_SESSION['bookmarks'] = array();
    }
    if(isset($_POST['clearBookmark'])){
        unset($_SESSION['bookmarks'][$_POST['bookmark']]);
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bookmark</title>
    <style>
        body{
            background-image: url("https://i2.wp.com/www.justpinkaboutit.com/wp-content/uploads/2018/05/baby-pink-background-2.jpg?fit=1200%2C765&ssl=1");
            background-size:cover ;
            background-repeat: no-repeat;
        }
        .content{
            width: 60%;
            margin-left: 30%;
        }
        .h1{
            margin-top:50px;
        }
        .book{
            color: purple;
            margin-left: 5%;
            font-size: 24px;
            font-weight: bold;
            
        }
        .book .b1{
            /* box-sizing: border-box; */
            border-radius: 5px;
            height: 35px;
            width: 50%;
            padding: 1px;
            font-size: 20px;
            margin-left: 5%;
            border: 4px solid skyblue;
        }
        .url{
            color: rgb(128, 0, 0);
            margin-left: 5%;
            font-size: 24px;
            font-weight: bold;
            margin-top: 10px;
        }
        .b2{
            /* box-sizing: border-box; */
            border-radius: 5px;
            height: 35px;
            width: 50%;
            padding: 1px;
            font-size: 20px;
            margin-left: 5%;
            border: 4px solid skyblue;
            border-color: skyblue;
        }
        .b3{
            height: 30px;
            background-color: transparent;
            font-size: 20px;
            box-sizing: border-box;
            border-color: skyblue;
            border: 4px solid skyblue;
            background-color: skyblue;
            margin-left: 30%;
            border-radius: 5px;
        }
        .b4{
            height: 30px;
            background-color: transparent;
            font-size: 20px;
            box-sizing: border-box;
            border-color: skyblue;
            border: 4px solid skyblue;
            background-color: skyblue;
            margin-left: -30%;
            margin-top: -25%;
            border-radius: 5px;
        }
        table{
            width: 300px;
            margin-top: 50px;
            margin-left: 17%;
        }
        td{
            font-size: 24px;
        }
    </style>
</head>
<body>
    <center>
        <h1>Bookmark</h1>
    </center>
        <div class="content">
           
           
            <form action="" method="post">
                <div class="book">
                    <label for="bname">Bookmark Name:</label><br>
                    <input type="text" class="b1" name="bname" value="">
    
                </div>
                <div class="url">
                    <label for="lname">Bookmark URL:</label><br>
                    <input type="text" class="b2" name="urlinput" value=""><br><br>
                </div>
               
                <input type="submit" class="b3" name = "add" value="Add Bookmark">
                <input type="submit" class="b4" name = "clear" value="Clear">
        
            </form>
            <table>
                <tbody>
                <?php 
                if(isset($_SESSION['bookmarks'])){
                foreach($_SESSION['bookmarks'] as $bookmarkName =>  $bookmarkUrl ){ ?>
                    <tr>
                            <td><a href="<?php echo  $bookmarkUrl; ?>" target="_blank"> <?php echo $bookmarkName;?></a></td> 
                            <form action="" method="POST">
                            <td><input type="hidden" class = "output" name="bookmark" value="<?php echo $bookmarkName; ?>"></td>
                            <td><input type="submit" value="X" name="clearBookmark" ></td>
                            </form>
                    </tr>
                   
                <?php }}?>
                </tbody>
            </table>
           
    
        </div>

   
    
</body>
</html>
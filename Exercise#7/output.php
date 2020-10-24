 <?php

 include("connect.php");
     
if (isset($_POST['delete'])) { 

    $sql = "DELETE FROM data WHERE id = ".$_POST['id']."";
 
    if (mysqli_query($conn,$sql)) {
        echo "";
    }else{
        echo "Error: " .$sql . "<br>" . mysqli_error($conn);
    }

    // mysqli_close($conn);
 
 }
 ?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Database</title>
     <style>
         body{
             background-image: url("https://www.technocrazed.com/wp-content/uploads/2015/12/black-wallpaper-to-set-as-background-1.jpg");
         }
         h1{
             margin-top: 20px;
             text-align: center;
             color: white;
         }
        table{
            border-collapse: collapse;
            width: 90%;
            margin-left: 5%;
            color: pink;
            font-family: monospace;
            font-size: 25px;
            text-align: center;
         }
        th{
            color: white;
        }
        tr:nth-child(even){background-color: grey;}
        td{
            margin-top: 10px;
        }
        .updatebtn{
            border: 0;
            background: none ;
            display: block;
            margin: 8px auto;
            text-align: center;
            border: 2px solid rgb(0, 255, 115);
            padding: 8px 20px;
            outline: none;
            color: white;
            font-size: 15px;
            border-radius: 24px;
            transition: 0.25s;
            cursor: pointer
        }
        .updatebtn:hover{
            background-color: rgb(0, 255, 115);
        }
        .deletebtn{
            border: 0;
            background: none ;
            display: block;
            margin: 8px auto;
            text-align: center;
            border: 2px solid rgb(255, 0, 76);
            padding: 8px 20px;
            outline: none;
            color: white;
            font-size: 15px;
            border-radius: 24px;
            transition: 0.25s;
            cursor: pointer
        }
        .deletebtn:hover{
            background-color: rgb(255, 0, 76) ;
        }
        .backbtn{
            margin-left: 
            border: 0;
            background: violet ;
            display: block;
            margin: 8px auto;
            text-align: center;
            border: 2px solid violet;
            padding: 10px 30px;
            outline: none;
            color: white;
            font-size: 18px;
            border-radius: 24px;
            transition: 0.25s;
            cursor: pointer
        }
     </style>
 </head>
 <body>
     <h1>User Data</h1>
    <table>
        <tr>
            <th>Id</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
 
    <?php
       
        $sql = "SELECT id, firstname, lastname,email from data";
        $result = mysqli_query($conn,$sql);

    ?>

    <?php if($result->num_rows > 0):?>
        <?php while($row = $result->fetch_assoc()):?>
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['firstname'];?></td>
                <td><?php echo $row['lastname'];?></td>
                <td><?php echo $row['email'];?></td>
                <td> 
                    <form action = 'update.php' method = 'post'>
                        <input type = 'hidden' name = 'updateId' value ="<?php echo $row['id'];?>">
                        <input type = 'hidden' name = 'firstname' value ="<?php echo $row['firstname'];?>">
                        <input type = 'hidden' name = 'lastname' value ="<?php echo $row['lastname'];?>">
                        <input type = 'hidden' name = 'email' value ="<?php echo $row['email'];?>">
                        <input type='submit' class = 'updatebtn' name ='update' value = 'Update'>
                    </form>
                <td>
                    <form action='' method='post'>
                        <input type='hidden' name='id' value ="<?php echo $row['id'];?>">
                        <input type='submit' class='deletebtn' name ='delete' value = 'Delete'>
                    </form>
                </td>
            </tr>
        <?php endwhile;?>
    <?php else:?>
        <h1><?php echo "No Contents to display!"?></h1>    
    <?php endif;?>
        
    <?php $conn -> close();?>
    
    </table>
    <form action="index.php">
        <input type="submit" class = "backbtn" name = "back" value = "Register Again">
    </form>
    
     
 </body>
 </html>
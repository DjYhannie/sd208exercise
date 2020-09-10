<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Name</title>
</head>
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    .headerText {
        color: #EA205E
    }
    .black{
        background: #000;
    }
    .black:hover{
        background: palegreen;
    }
    .white{
        background: white;
    }
    .white:hover{
        background: palevioletred;
    }
    td{
        height: 50px;
        width: 50px;
    }
    table{
       border-spacing: 0;
       border: black solid 2px;
    }
</style>

<body>
    <center>
        <h1>
            <span class="headerText"> Chess Board</span>
        </h1>
        <table>
            <?php
                function render($color)
                {
                    echo "<td class='$color'></td>";
                }
                for($row=1; $row<= 8; ++$row){
                    echo'<tr>';
                        for($col=1; $col<= 8; ++$col){
                            if(($col+$row)%2 == 0){
                                render('black');
                            }else{
                                render('white');
                            }
                        }
                    echo '</tr>';
                }
    
        ?>
        </table>
  
    </center>
</body>

</html>
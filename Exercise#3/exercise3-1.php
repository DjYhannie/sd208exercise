<?php 
    // define("TITLE", "Honest Click Bait Headlines");
    if(isset($_POST["fixSubmit"])) {
        $clickBait = strtolower($_POST["clickBaitHeadline"]);
        $clickbait_words = array(
            "scientists", 
            "doctors", 
            "hate", 
            "stupid", 
            "weird", 
            "simple", 
            "trick", 
            "shocked me", 
            "you'll never believe", 
            "hack", 
            "epic", 
            "unbelievable"
        );

        $replacement_words = array(
            "so-called scientists", 
            "so-called doctors", 
            "aren't threatened by", 
             "average", 
            "completeky normal", 
            "ineffective", 
            "method", 
            "is no different than the others", 
            "you won't really be surprised by", 
            "slightly improve", 
            "boring", 
            "normal"
        );
        
        $honestHeadline = str_replace($clickbait_words, $replacement_words, $clickBait);
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> ClickBait</title>
    <style>
        body {
            background-image: url(https://thewallpaper.co//wp-content/uploads/2016/10/purple-hd-picture-desktop-wallpapers-high-definition-monitor-download-free-amazing-background-photos-artwork-1920x1080.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }

        .container {
            background-color: rgb(14, 13, 13);
            margin-top: 10%;
            height: 50%;
            width: 60%;
            padding-bottom: 10px;
        }

        .container h1 {
            color: rgb(9, 236, 252);
            text-shadow: 0 0 5px #f403b8, 0 0 25px#f403b8, 0 0 50px #f403b8,
                0 0 100px #f403b8;
            padding-top: 20px;
        }

        .container p {
            font-size: 20px;
            color: papayawhip;
        }
        .input {
            height: 50px;
            width: 70%;
            margin-top: 3%;
            font-size: 20px;
            border: 2px solid #f4035f ;
            border-radius: 4px;
            padding-left: 10px;
        }
        .submit{
            background-color: rgb(0, 140, 255);
            height: 50px;
            margin-top:3% ;
            border-radius: 5px;
            font-size: 20px;
        }
       
    </style>

</head>

<body>
    <center>
        <div class="container">
            <h1>Honest Click Bait Headlines</h1>
            <p>Hate click bait? Turn those annoying headlines into realistic and honest ones.</p>
            <form action ="" method="post">
                <div class="buttons">
                    <input type="text" class="input" name="clickBaitHeadline"
                        placeholder="Paste click bait headline here."><br>
                    <button type="submit" class="submit" name="fixSubmit"> Honest Button </button>
                </div>
            </form>
            <br>
                <?php
                if(isset($_POST["fixSubmit"])) {
                    echo'<span style ="color:red"><strong>Original Headline:</strong><h4>'.ucwords($clickBait).'</h4></span><hr>';   
                    echo '<span style="color: springgreen"><strong>Honest Headline:</strong><h4>'.ucwords($honestHeadline).'</h4></span>';   
                }
                ?>


        </div>
    </center>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
        integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
        crossorigin="anonymous"></script>
</body>

</html>
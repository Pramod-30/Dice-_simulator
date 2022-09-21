<!DOCTYPE html>
<html>
    <head>
        <title>Dice simlualtor</title>
<style> 
        body{
                background-image:url('backgroundDice.gif');
                background-size:cover;
                background-repeat: no-repeat;
                width:100%;
            }
            button{
                background-color:orange;
                border:none;
                color:white;
                padding:15px 32px;
                text-align:center;
                text-decoration:none;
                display: inline-block;
                font-size:16px;
            }
            .cs p{
                color:orange;
                font-family:courier;
                
            }
            h2{
                font-size:50px;
                font-family:courier;
            }
            .phstyl{
                font-size:30px;
                font-family:courier;
                font-weight:bold;
                color:red;
            }
        </style>
        </head>
<body style="text-align:center">
        <h2 id="heading" style="color:orange"> Roll the dice! <br></h2>
        <form action="" method="post">
            <div class="cs" id="test-container">
                <img src="dice.gif" alt="Moving dice" width="250" height="250">
                    <p style="font-size:50px" ><b>CLICK ON ROLL TO ROLL THE DICE: </b></p> 
            </div>
<button id="submit" type="submit" type="button" name="roll" class="btn btn-primary">Roll!</button>
<?php
if(isset($_POST['roll']))
{
$rand = rand(1,6);
echo "<p class='phstyl'>" . "RESULT: " . "The number rolled by the dice is " . $rand ;
}
?>
</form>
</body>
</html>

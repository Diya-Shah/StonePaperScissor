<html>
<head>
<style>
*{
    font-family: Gabriola;
    background :lightblue;
    color :#303e5c;
    font-size : 1.3em;
}
body input[type="submit"]{
     height : 50px;
     width : 150px;
     font-size : 1em;
    }
body input[type="submit"]:hover{
   
   background-color: #DC143C;
   color: #fff;
  
}
</style>
</head>
<body>
<?php
session_start();
echo '<center>';
$choice1 = $_SESSION['choice1'];
$choice2 = $_GET['choice2'];
if($_GET['id']==1)
{
$result = array(0 , 0);
}
else{
    $result=$_SESSION['array'];
}

    if($choice1 != $choice2)
    {
        switch($choice1)
        {
            case 'Stone':
                if($choice2 == 'Scissor')
                {
                    $result[0] += 1;
                }
                else{
                    $result[1] += 1;
                }
                break;
            
            case 'Paper':
                if($choice2 == 'Stone')
                {
                    $result[0]+=1;
                }
                else{
                    $result[1] += 1;
                }
                break;

            case 'Scissor':
                if($choice2 == 'Paper')
                {
                    $result[0] += 1;
                }
                else{
                    $result[1] += 1;
                }
                break;
        }
        
    }

$_SESSION['array']=$result;
if($result[0]>$result[1])
{
 echo '<br/><b>Winner : '.$_SESSION['player1'].'</b><br/><br/>';   
}
if($result[0]<$result[1])
{
 echo '<br/><b>Winner : '.$_SESSION['player2'].'</b><br/><br/>';   
}
if($result[0]==$result[1])
{
 echo '<br/><b>Its a Tie !! </b><br/><br/>';   
}
for($i = 0 ; $i < 2 ; $i++)
{
    if($i == 0)
    {
        echo $_SESSION['player1'] . "<br>";
    }
    else{
        echo $_SESSION['player2'] . "<br>";
    }
    echo $result[$i] . "<br>";
}

unset($_SESSION['choice1']);
if(!isset($_SESSION['final']))
{
    header('Location: play.php');
}
if(isset($_SESSION['final']))
{
    unset($_SESSION['i']);
    unset($_SESSION['final']);
    unset($_SESSION['array']);
}
echo '</center>';
?>
<center>
<br/><input onClick='window.location.href="./play.php"' type='submit' Value='Play Again'>&emsp;
<input onClick='window.location.href="./name.php"' type='submit' Value='New Game'>
<br/><br/><br/><br/>
</center>
</body>
</html>
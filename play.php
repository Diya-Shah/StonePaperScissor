<html>
<head>
<style>
*{
    font-family: Gabriola;
    background :lightblue;
    color :#303e5c;
    font-size : 1.1em;
}
    form input[type="submit"]{
     height : 50px;
     width : 130px;
     font-size : 1.5em;
    }
form input[type="submit"]:hover{
   
   background-color: #DC143C;
   color: #fff;
  
}
</style>
</head>
<body>
<?php
session_start();
echo '<center>';
if(isset($_SESSION['i'])){
    $i=$_SESSION['i'];
}
else{
 $i=1;
}

    if(isset($_POST['submit']))
    {
        $_SESSION['player1'] = $_POST['player1'];
        $_SESSION['player2'] = $_POST['player2'];
       
    
    }
    if(!isset($_GET['choice1']))
    {
       
        if($i==1)
        {  
            echo '<br/>';
            echo '<b>Round 1</b>'.'<br/><br/>';
           
        }
        if($i==2)
        {
            echo '<br/>';
            echo '<b>Round 2</b>'.'<br/><br/>';
           
        }
        if($i==3)
        {
            echo '<br/>';
            echo '<b>Round 3</b>'.'<br/><br/>';
           
        }
        echo "<form method='GET'>";
        echo "<b>Player1 : " . $_SESSION['player1'] . "</b><br><br>";
        echo '<img src="images/rock.jpg" width="200" height="200">';
        echo '<img src="images/paper.jpg" width="200" height="200">';
        echo '<img src="images/scissor.jpg" width="200" height="200"><br/><br/><br/>';
        echo "<input onClick='window.location.href='../result.php'' type='submit' Value='Stone' name='choice1'>";
        echo '&emsp;&emsp;&emsp;&emsp;&emsp;';
        echo "<input onClick='window.location.href='../result.php'' type='submit' Value='Paper' name='choice1'>";
        echo '&emsp;&emsp;&emsp;&emsp;&emsp;';
        echo "<input onClick='window.location.href='../result.php'' type='submit' Value='Scissor' name='choice1'>";
        echo '<input type="hidden" name="id" value="'.$i.'">';
        echo "</form>";
    }

    if(isset($_GET['choice1']))
    {
        if(isset($_GET['id']) && $_GET['id']==1)
        {
            echo '<br/>';
            echo '<b>Round 1</b>'.'<br/><br/>';
            $_SESSION['i']='2';
        }
        if(isset($_GET['id']) && $_GET['id']==2)
        {
            echo '<br/>';
            echo '<b>Round 2</b>'.'<br/><br/>';
            $_SESSION['i']='3';
        }
        if(isset($_GET['id']) && $_GET['id']==3)
        {
            echo '<br/>';
            echo '<b>Round 3</b>'.'<br/><br/>';
            $_SESSION['final']="yes";
        }
        $choice1 = $_GET['choice1'];
        $_SESSION['choice1'] = $choice1;
       
        echo "<form action = 'result.php' method='GET'>";
        echo "<b>Player2 : " . $_SESSION['player2'] . "</b><br><br>";
        echo '<img src="images/rock.jpg" width="200" height="200">';
        echo '<img src="images/paper.jpg" width="200" height="200">';
        echo '<img src="images/scissor.jpg" width="200" height="200"><br/><br/><br/>';
        echo "<input onClick='window.location.href='../result.php'' type='submit' Value='Stone' name='choice2'>";
        echo '&emsp;&emsp;&emsp;&emsp;&emsp;';
        echo "<input onClick='window.location.href='../result.php'' type='submit' Value='Paper' name='choice2'>";
        echo '&emsp;&emsp;&emsp;&emsp;&emsp;';
        echo "<input onClick='window.location.href='../result.php'' type='submit' Value='Scissor' name='choice2'>";
        echo '<input type="hidden" name="id" value="'.$i.'">';
        echo "</form>";
        
    }

echo '</center>';
?>
</body>
</html>

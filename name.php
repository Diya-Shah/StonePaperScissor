<html>
    <head>
    <style>
    *{
    font-family: Gabriola;
}
       body{
    background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(images/sps.jpg);
    -webkit-background-size: cover;
    background-size: 1300px 800px;
    background-position: center;
    background-repeat: no-repeat;
        }
        .name{
            position: relative;
            width:600px;
            height :600px;
        }
        .name form{
           
            margin-top:15%;
    width: 300px;
    height: 250px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    background-color: #ffffff30;
    backdrop-filter: blur(20px);
    border: 2px solid #ffffff30;
    border-radius: 10px;
    box-shadow: 0 10px;
    padding: 40px;
    overflow: hidden;
        }
        .name input{
    width: 100%;
    height: 50px;
    border-radius: 5px;
    border: 2px solid #ffffff30;
    background-color: #ffffff30;
    color: black;
    margin: 10px 0;
    padding: 0 15px;
    font-size: 1.5em;
    letter-spacing: 1px;
    cursor: pointer;
}
.name input:focus{
    border-color: #ffffff;
    transition: 0.4s;
}
.name input::placeholder{
    color:white;
    letter-spacing: 1.2px;
    font-size : 1.2em;
}
.name input:focus::placeholder{
    opacity: 0;
}
.name form input[type="submit"]:hover{
   
   background-color: #DC143C;
   color: #fff;
}
}
    </style>
    </head>
    <body>
    <center><br/><br/>
    <div class="box">
    <div class="name">
    <br/><br/><br/><br/>
        <form action = "play.php" method = "POST">
        <input type = "text" name = "player1" placeholder = "Player 1"><br>
        <input type = "text" name = "player2" placeholder = "Player 2"><br><br>
        <input type = "submit" name = "submit" value = "PLAY !!" style='color:white;
    letter-spacing: 1.2px; font-size : 2em;'>
        </form>
        </div>
        </div>
    </body>
    </center>
</html>

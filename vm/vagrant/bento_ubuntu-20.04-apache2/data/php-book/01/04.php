<html>
    <head>
    <title> example-04 </title>
    </head>

    <body>
        <?php 
            if(!empty($_POST['username']))
            {
                echo "username: {$_POST['username']}\n";
                echo "password: {$_POST['password']}";
            } 
            else
            {
                echo "Please enter username and password.";
            }
        ?>

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        username: <input type="text" name="username"/>
        </br>
        password: <input type="text" name="password"/>
        <input type="submit"/>
        </form>

        <?php
            if(!empty($_POST['username']) && !empty($_POST['password']))
            {
                $db = new mysqli("localhost",$_POST['username'],$_POST['password']);
                if($db->connect_error)
                {
                    echo "Error connecting to database: ", $db->connect_error;
                }
                else
                {
                    echo "Connected to database.";
                    $sql_statement = "show databases";
                    $result = $db->query($sql_statement);
                    echo "result:",$result;
                }
            }
        ?>
    </body> 
</html>
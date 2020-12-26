<html>
    <head>
    <title> example-03 </title>
    </head>

    <body>
        <?php 
            if(!empty($_POST['name']))
            {
                echo "Greetings, {$_POST['name']}, and welcome.";
            } 
        ?>

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        Enter name: <input type="text" name="name"/>
        </br>
        Enter age: <input type="text" name="age"/>
        <input type="submit"/>
        </form>

        <?php
            echo $_SERVER['PHP_SELF'];
            ECHO $_POST['age']
        ?>
    </body> 
</html>
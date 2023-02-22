<html>
    <body>
        <?php
            $_SESSION["user_id"]="";
            $_SESSION["email"]="";
            $_SESSION["password"]="";
            $_SESSION["is_admin"]="";
            header("Location: login.php");
        ?>
    </body>
</html>
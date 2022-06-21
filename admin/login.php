<div class="container">

    <?php

    if (isset($_POST['submit'])) {

        $username = $_POST["naam"];
        $password = $_POST["wachtwoord"];

        $sql = "SELECT * FROM inlog WHERE username = '$username'";

        $username_control = $conn->query($sql);

        $user = $username_control->fetch_assoc();

        if ( $username == $user && password_verify($password, $user['wachtwoord'])) {

            include("admin/de_pannel.php");
        } else {
            include("admin/loginForm.php");
            echo "username of password is fout";
        }
    } else {
        include("admin/loginForm.php");
    }
    ?>
</div>
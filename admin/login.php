<div class="container">

    <?php

    if (isset($_POST['submit'])) {

        $username = $_POST["naam"];
        $password = $_POST["wachtwoord"];

        $sql = "SELECT * FROM inlog WHERE username = '$username'";

        $username_control = $conn->query($sql);

        $user = $username_control->fetch_assoc();

        if (password_verify($password, $user['wachtwoord'])) {

            include("content/pages/de_pannel.php");
        } else {
            echo "username of password is fout";
        }
    } else {
        include("content/pages/loginForm.php");
    }
    ?>
</div>
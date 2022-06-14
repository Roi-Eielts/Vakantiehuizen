<div class="container">
    <form action="" method="post">
        <table>
            <tr>
                <th><label>
                        <h3>gebruikersnaam:</h3>
                    </label></th>
                <th><input type="text" name="naam" required></th>
            </tr>
            <tr>
                <th><label>
                        <h3>password:</h3>
                    </label></th>
                <th><input type="password" name="wachtwoord" required></th>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="submit" class="button_kleur"></td>
            </tr>

        </table>
    </form>

    <?php
    // $has = password_hash("nee", PASSWORD_DEFAULT);

    // echo $has;

    $username = "";
    $password = "";

    $sql = "SELECT username from inlog;";
    $sql2 = "SELECT wachtwoord FROM inlog;";

    $username_control = $conn->query($sql);
    $password_control = $conn->query($sql2);


    if (isset($_POST['submit'])) {


        if ($username_control->num_rows > 0 && $password_control->num_rows > 0) {



            $username = htmlspecialchars($_POST["naam"]);
            $password = htmlspecialchars($_POST["wachtwoord"]);

            if ($username == $username_control && password_verify($password, $password_control)) {
                echo '<h2 class="ingeloged">u bent ingeloged</h2>';
            }
            if ($username != $username_control || !password_verify($password, $password_control)) {

                echo "incorect username or password";
            }
        }
    }
    ?>
</div>
<div class="container boven">
    <?php include("content/pages/paginaTextOphalen.php"); ?>
    <div class="row">
        <div class="col-md-6">
            <img src="content/img/cross.jpg" alt="holy cross image" style="width: 90%;">
        </div>
        <div class="col-md-6">
            <form id="fcf-form-id" class="fcf-form-class" method="post">
                <div class="fcf-form-group">
                    <label for="Name" class="fcf-label">uw naam: </label>
                    <div class="fcf-input-group">
                        <input type="text" id="Name" name="Name" class="fcf-form-control" required>
                    </div>
                </div>
                <div class="fcf-form-group">
                    <label for="betreft" class="fcf-label">de reden dat u dit stuurt</label>
                    <div class="fcf-input-group">
                        <input type="text" id="betreft" name="betreft" class="fcf-form-control" required>
                    </div>
                </div>
                <div class="fcf-form-group">
                    <label for="Email" class="fcf-label">uw Email adres</label>
                    <div class="fcf-input-group">
                        <input type="email" id="Email" name="Email" class="fcf-form-control" required>
                    </div>
                </div>
                <div class="fcf-form-group">
                    <label for="Message" class="fcf-label">uw bericht</label>
                    <div class="fcf-input-group">
                        <textarea id="Message" name="Message" class="fcf-form-control" rows="6" maxlength="3000" required></textarea>
                    </div>
                </div>
                <div class="fcf-form-group">
                    <button type="submit" id="fcf-button" class="fcf-btn fcf-btn-primary fcf-btn-lg fcf-btn-block" name="submit">verstuur</button>
                </div>
            </form>
        </div>
        <?php

        if (isset($_POST['submit'])) {
        
            $error_message = "";

            $name = htmlspecialchars($_POST['Name']);
            $betreft = htmlspecialchars($_POST['betreft']);
            $email = htmlspecialchars($_POST['Email']);
            $vraag = htmlspecialchars($_POST['Message']);

            $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

            if (!preg_match($email_exp, $email)) {
                $error_message .= 'Email adress niet geldig.<br>';
            }
                      
            $string_exp = "/^[A-Za-z0-9.-]+$/";         

            if (!preg_match($string_exp, $name)) {
                $error_message .= 'De naam dat je hebt ingevoerd is niet geldig.<br>';
            }

            if (strlen($vraag) < 1) {
                $error_message .= 'Het bericht is niet geldig.<br>';
            }
            if (strlen($error_message) > 1) {
                echo "<h3>$error_message</h3>";
                die();
            } else {
                require("config/config_db.php");
                $sql = "INSERT INTO contact (naam, betreft, email, bericht) VALUES ('$name', '$betreft', '$email', '$vraag')";

                if ($conn->query($sql) == TRUE) {
                    // echo "New record created successfully";
                    echo "<h5>u heeft verzonden: <br> naam: $name <br> betreft: $betreft <br> email adres: $email <br> uw bericht: $vraag </h5>";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }

            }
        }
        ?>
    </div>
</div>
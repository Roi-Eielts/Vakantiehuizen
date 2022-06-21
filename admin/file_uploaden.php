<div class="container" style="margin-top:10px;">
    <a href="admin_panel" class="tag">ga terug naar admin</a>
    <form action="" method="POST" enctype="multipart/form-data">
        <table style="width: 50%;">
            <tr>
                <th><input type="text" name="huis_naam" id="huis_naam" placeholder="naam van het huis" style="width: 100%; height:38px; border-radius: 5px;" required></th>
            </tr>
            <tr>
                <th><input type="text" name="prijs" id="prijs" placeholder="prijs van het huis" style="width: 100%; height:38px; border-radius: 5px;" required></th>
            </tr>
            <tr>
                <th><textarea type="text" name="beschrijving" id="beschrijving" placeholder="beschrijving" style="width: 100%; height:38px; border-radius: 5px;" required></textarea></th>
            </tr>
            <tr>
                <th><textarea type="text" name="ap" id="ap" placeholder="aantal personen" style="width: 100%; height:38px; border-radius: 5px;" required></textarea></th>
            </tr>
            <tr>
                <th><input type="file" required name="img" accept=".xml, .jpg, .png, .jpeg"></th>
            </tr>
            <tr>
                <th><button type="submit" name="ver" id="ver" class="button noselect">aanmaken</button></th>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST["ver"])) {
        require("content/pages/huis.php");
        $id = random_int(0, 10000);
        $huis_naam = htmlspecialchars($_POST["huis_naam"]);
        $personen = htmlspecialchars($_POST["ap"]);
        $prijs = htmlspecialchars($_POST["prijs"]);
        $beschrijving = htmlspecialchars($_POST["beschrijving"]);

        $vakantiehuis = new Vakantiehuizen($huis_naam, $prijs, $beschrijving, $personen);

        echo "$huis_naam / $prijs / $beschrijving / $prijs | uploaden....";
        $sql = "INSERT INTO `vakantiehuizen`.`huizen` (`id`, `huis`, `personen`, `omschrijving`, `prijs`) VALUES ($vakantiehuis->id, '$huis_naam', '$personen', '$beschrijving', $prijs);";

        $file = $vakantiehuis->id . ".png";
        if ($conn->query($sql) == TRUE) {
            if (move_uploaded_file($_FILES["img"]["tmp_name"] , "./img/" . $file)) {
                $theImgName = $vakantiehuis->id . ".png";
                $addImageSql = "insert into afbeeldingen (huis_id, afbeelding) values ('$vakantiehuis->id', '$theImgName')";
                $result2 = $conn -> query($addImageSql);
            }
        } else {
            echo "oops iets ging er mis";
        }
    }

    ?>
</div>
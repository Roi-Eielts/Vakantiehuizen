<a href="admin_panel">ga terug naar admin</a>
<form action="" method="POST">
    <table style="width: 50%;">
        <tr>
            <th><input type="text" name="huis_naam" id="huis_naam" placeholder="naam van het huis" style="width: 100%; height:38px; border-radius: 5px;"></th>
        </tr>
        <tr>
            <th><input type="text" name="prijs" id="prijs" placeholder="prijs van het huis" style="width: 100%; height:38px; border-radius: 5px;"></th>
        </tr>
        <tr>
            <th><textarea type="text" name="beschrijving" id="beschrijving" placeholder="beschrijving" style="width: 100%; height:38px; border-radius: 5px;"></textarea></th>
        </tr>
        <tr>
            <th><textarea type="text" name="ap" id="ap" placeholder="aantal personen" style="width: 100%; height:38px; border-radius: 5px;"></textarea></th>
        </tr>
        <tr>
            <th><input type="file" name="fileToUpload" id="fileToUpload" style="margin-bottom: 5px; height:38px; border-radius: 5px;"></th>
            </th>
        <tr>
            <th><button type="submit" name="ver" id="ver" class="button noselect">verstuur</button></th>
        </tr>
    </table>
</form>

<?php
if (isset($_POST["ver"])) {
    $huis_naam = htmlspecialchars($_POST["huis_naam"]);
    $personen = htmlspecialchars($_POST["ap"]);
    $prijs = htmlspecialchars($_POST["prijs"]);
    $beschrijving = htmlspecialchars($_POST["beschrijving"]);

    $sql = "INSERT INTO `vakantiehuizen`.`huizen` (`id`, `huis`, `personen`, `omschrijving`, `prijs`) VALUES (NULL, '$huis_naam', '$personen', '$beschrijving', $prijs);";

    echo "$huis_naam / $prijs / $beschrijving / $prijs uploaden....";
    if ($conn->query($sql) == TRUE) {
        echo "gelukt!";
    }   
}

?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form action="" method="POST">
                <table style="width: 100%;">
                    <tr>
                        <th><select name="id_huis">
                                <option value="" disabled selected>select id</option>
                                <?php
                                $sql = "SELECT * FROM huizen";
                                $output = $conn->query($sql);
                                if ($output->num_rows > 0) {
                                    while ($row = $output->fetch_assoc()) {
                                        echo "<option value='$row[id]'>$row[id]</option>";
                                    }
                                } ?>
                            </select>
                        </th>
                    </tr>
                    <!-- <tr>
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
                    </tr> -->
                    <tr>
                        <th><button type="submit" name="up" id="veupr" class="button noselect">verander/update</button></th>
                </table>
            </form>
            <?php 
            if (isset($_POST["up"])) {
                if(!empty($_POST['id_huis'])) {
                $id = htmlspecialchars($_POST['id_huis']);
                echo $id;
                } else {
                    echo "select id";
                }
            }

        
                $querydb = "UPDATE `vakantiehuizen`.`huizen` SET `omschrijving` = 'dit is een mooi huisje.' WHERE (`id` = '1');"
            ?>
        </div>
        <div class="col-md-6">
            <table style="width:100%">
                <tr>
                    <th>id</th>
                    <th>huis</th>
                    <th>omschrijving</th>
                    <th>personen</th>
                    <th>prijs</th>
                </tr>
                <?php
                $sql = "SELECT * FROM huizen";
                $output = $conn->query($sql);
                if ($output->num_rows > 0) {
                    while ($row = $output->fetch_assoc()) {
                        echo "
            <tr>
                <td>$row[id]</td>
                <td>$row[huis]</td>
                <td>$row[omschrijving]</td>
                <td>$row[personen]</td>
                <td>$row[prijs]</td>
            </tr>
            ";
                    }
                }
                ?>
        </div>
    </div>
</div>
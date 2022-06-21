<div class="container">
    <a href="toevoegen" class="tag">huis toevoegen</a>
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
                <td><a href='edit?id=$row[id]&huis=$row[huis]&oms=$row[omschrijving]&pers=$row[personen]&prijs=$row[prijs]'><i class='fas fa-edit'></i></a></td>
            </tr>
            ";
            
            }
        }
        ?>

    </table>
</div>
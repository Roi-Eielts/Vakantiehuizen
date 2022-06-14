<?php
        if (isset($_GET["pagina"])) {
            $page = $_GET["pagina"];
        } else {
            $page = "home";
        }
        $sql = "SELECT titel, tekst from teksten where pagina = '$page';";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<h3>" . $row['titel'] . " </h3><br><p>" . $row['tekst'] . "</p>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
?>
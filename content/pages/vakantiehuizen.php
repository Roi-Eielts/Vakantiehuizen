
<div class="container boven">
    <?php include("content/pages/paginaTextOphalen.php"); ?>
<div class="row">
    <?php
    
        require("config/config_db.php");
        
        $pageData = "select * from huizen";
        $result = $conn -> query($pageData);
        if ($result -> num_rows > 0) {
            while ($row = $result -> fetch_assoc()) {
                echo "<div class='col-lg-3' >";
                echo "<div style='float:left; width: auto; height: 200px;'>";
                echo "<h1>".$row["huis"]."</h1>";
                echo "<p>".$row["omschrijving"]."</p>";
                echo "<hr>";
                echo "<b style='float:right'>€ ".$row["prijs"]."</b>";
                
                echo "<p> klik de foto`s of ze groter te zien. </p>";
                echo "<hr>";
            $resultaat = $conn -> query("SELECT a.* FROM afbeeldingen a where huis_id = '$row[id]'");
            while($rijtje = $resultaat -> fetch_assoc()) {
               ?>
               <a href="content/img/<?php echo "$rijtje[afbeelding]"?>" class="group" rel="group<?php echo "$rijtje[huis_id]"?>" >
                <img src="content/img/<?php echo "$rijtje[afbeelding]"?>" alt="<?php echo "$rijtje[afbeelding]"?>" style="width: 33%; height: 33%;float: left;"/>
            </a>
               <?php
           }
           echo "</div>"; 
           echo "</div>"; 
           
        }
    }?>

</div>
</div>
<script>
$(document).ready(function() {

/* This is basic - uses default settings */

$("a#single_image").fancybox();

/* Using custom settings */

$("a#inline").fancybox({
    'hideOnContentClick': true
});

/* Apply fancybox to multiple items */

$("a.group").fancybox({
    'transitionIn'	:	'elastic',
    'transitionOut'	:	'elastic',
    'speedIn'		:	600, 
    'speedOut'		:	200, 
    'width'  : 600,          
    'height' : 600,
    'overlayShow'	:	false
});

});
    </script>
</body>
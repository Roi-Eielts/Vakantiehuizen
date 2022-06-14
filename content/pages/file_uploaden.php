
<br>
<br>
<form action="">
    <h3>Vakantiehuis toevoegen</h3>
    <input type="file" name="fileToUpload" id="fileToUpload" style="margin-bottom: 5px;">
    <br>
    <button type="submit" class="button noselect">verstuur</button>
</form>

<?php
$locatie = "content/img";

if(isset($_POST['submit'])) {
    $file = $_POST("fileToUpload");
}
?>
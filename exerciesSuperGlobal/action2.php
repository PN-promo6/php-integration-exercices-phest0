
<?php
if (isset($_POST['name'])) {
    var_dump($_POST['name']);
    echo ("Hello" . htmlentities($_POST['name']) . " !");
}
?>
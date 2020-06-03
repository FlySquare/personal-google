<?php
if (isset($_POST['searchword'])) {
header("Location: https://www.google.com/search?q=".$_POST['searchword']);
}
 ?>

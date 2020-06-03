<?php
if (isset($_POST['searchword'])) {
  ?>
<script type="text/javascript" language="Javascript">window.open('<?php echo "https://www.google.com/search?q=".$_POST['searchword']; ?>');</script>
<?php

}
 ?>

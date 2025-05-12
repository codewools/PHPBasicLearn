<!DOCTYPE html>
<html>
<body>

<a href="get.php?subject=PHP&web=W3schools.com">Test $GET</a>

<?php
if(isset($_GET['web']))
echo "Subject : " . $_GET['web'];
?>
</body>
</html>

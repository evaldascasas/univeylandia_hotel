<html>
<body>
  <div>

<?php
include_once $_SERVER['DOCUMENT_ROOT']."/php/classes/class_habitacio.php";

$habitacio = new Habitacio();

$habitacio->llistarHabitacio();

 ?>

</div>
</body>
</html>

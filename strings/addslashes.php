<?php

$name = "<script>alert('olá, mundo')</script>";

?>

<input type="text" name="<?php echo htmlentities($name); ?>">
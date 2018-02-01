Nombre: <?php echo htmlspecialchars($_POST['nombre']); ?>
<br>
Edad: <?php echo (int)$_POST['edad']." años";?>
<br>
<?php
if (isset($_POST['nombre'])) {
    echo "declara";
}
if ( is_null($_POST['nombre2'])) {
    echo "null";
}
if (empty($_POST['nombre'])) {
    echo "vacia";
}
?>

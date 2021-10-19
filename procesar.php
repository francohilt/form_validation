<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dni = $_POST['dni'];
$estado_civil = $_POST['estado_civil'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];


echo "-- DATOS RECIBIDOS -- <br>";
echo "Nombre: ".$nombre."<br>";
echo "Apellido: ".$apellido."<br>";
echo "DNI: ".$dni."<br>";
echo "Estado civil: ".$estado_civil."<br>";
echo "Correo electronico: ".$email."<br>";
echo "Telefono: ".$telefono."<br>";
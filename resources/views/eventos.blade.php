@php
    
header('Content-Type: aplication/json');
$pdo = new PDO('mysql:host=127.0.0.1;dbname=reserva_canchas;charset=UTF8','root','');

$sentenciaSQL = $pdo -> prepare("SELECT * FROM reserva_canchas");
$sentenciaSQL-> execute();

$resultado=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($resultado);


@endphp
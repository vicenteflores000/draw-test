@php
    
header('Content-Type: aplication/json');
$pdo=new PDO("mysql:dbname=reserva_canchas;host:127.0.0.1","root","");

$sentenciaSQL = $pdo->prepare("SELECT * FROM reserva_canchas");
$sentenciaSQL->execute;

$resultado=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($resultado);


@endphp
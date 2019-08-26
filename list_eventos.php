<?php


include 'conexao.php';

$query_events = "SELECT * FROM agenda";
$resultado_events = $conn->prepare($query_events);
$resultado_events->execute();

$eventos = [];

while($row_events = $resultado_events->fetch(PDO::FETCH_ASSOC)){
    
    $title = $row_events['title'];
    $color = $row_events['color'];
    $start = $row_events['start_event'];
        
    $eventos[] = [ 
        'title' => $title, 
        'color' => $color, 
        'start' => $start, 
        
        ];
}

echo json_encode($eventos);
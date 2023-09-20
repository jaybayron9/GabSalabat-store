<?php 

function dd($v) {
    echo '<pre>';
    print_r($v);
    echo '</pre>';
}

function view($viewName, $compactData = []) { 
    extract($compactData);
    return include 'resources/views/' . $viewName . '.php';
}


function json($data, $code = 200) {
    http_response_code($code);
    header('Content-Type: application/json');
    echo json_encode($data);
} 

function msgTime($datetime) { 
    $dateTime = new DateTime($datetime);
    $currentDate = new DateTime();  
    $dateString = $currentDate->diff($dateTime) === 0 ? "Today" : ($currentDate->diff($dateTime) === 1 ? "Yesterday" : $dateTime->format('d/m/y'));
    return $dateTime->format('h:i A') . " | $dateString"; 
}
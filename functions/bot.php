<?php
header('Content-Type: application/json');

$request = json_decode(file_get_contents('php://input'), true);

$response = '';
$options = [];

if (isset($request['message'])) {
    $message = strtolower(trim($request['message']));

    // Aquí puedes añadir más lógica para responder a diferentes consultas
    if ($message == 'Hola' || $message == 'hola' || $message == 'hello') {
        $response = 'Hola! Como puedo ayudarte?';
        $options = ['Buscar productos', 'Comprobar estado de mi pedido', 'Contactar soporte'];
    } else if ($message == 'Buscar productos') {
        $response = 'Tenemos una variedad de productos disponibles. Porfavor seleccione una categoría:';
        $options = ['Electronics', 'Clothing', 'Home and Kitchen'];
    } else if ($message == 'check order status') {
        $response = 'Please provide your order ID:';
    } else if ($message == 'contact support') {
        $response = 'You can contact our support team at support@example.com or call 123-456-7890.';
    } else if ($message == 'electronics') {
        $response = 'We have the latest electronics including smartphones, laptops, and more.';
    } else if ($message == 'clothing') {
        $response = 'Check out our clothing section for the latest fashion trends.';
    } else if ($message == 'home and kitchen') {
        $response = 'Explore our home and kitchen section for great deals on appliances and more.';
    } else {
        $response = 'Sorry, I do not understand that yet. Please choose one of the options.';
        $options = ['Browse products', 'Check order status', 'Contact support'];
    }
}

echo json_encode(['response' => $response, 'options' => $options]);

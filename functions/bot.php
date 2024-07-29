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
    } else if ($message == 'Buscar productos' || $message == 'buscar productos') {
        $response = 'Tenemos una variedad de productos disponibles. Porfavor seleccione una categoría:';
        $options = ['Plantulas', 'Tierras', 'Terrenos', 'Frutas', 'Otros'];
    } else if ($message == 'Comprobar estado de mi pedido' || $message == 'comprobar estado de mi pedido') {
        $response = 'Please provide your order ID:';
    } else if ($message == 'Contactar soporte' || $message == 'contactar soporte') {
        $response = 'Puedes contactar con el soporte con el correo yecm@gmail.com o llamar al lider jhony.';
        $options = ['Buscar productos', 'Comprobar estado de mi pedido'];
    } else if ($message == 'Plantulas' || $message == 'plantulas') {
        $response = 'tenemos muchas variedades de plantulas para ti.';
        $options = ['Plantulas de tomate', 'Plantulas de pimiento', 'Plantulas de lechuga', 'Plantulas de cebolla'];
    }elseif ($message == 'Plantulas de tomate' || $message == 'plantulas de tomate') {
            $options = ['Plantulas de tomate cherry', 'Plantulas de tomate pera', 'Plantulas de tomate de arbol', 'Plantulas de tomate de mesa'];
    }elseif ($message == 'Plantulas de pimiento' || $message == 'plantulas de pimiento') {
            $options = ['Plantulas de pimiento dulce', 'Plantulas de pimiento picante', 'Plantulas de pimiento morron', 'Plantulas de pimiento italiano'];
    }elseif ($message == 'Plantulas de lechuga' || $message == 'plantulas de lechuga') {
            $options = ['Plantulas de lechuga crespa', 'Plantulas de lechuga orejona', 'Plantulas de lechuga romana', 'Plantulas de lechuga iceberg'];
    }elseif ($message == 'Plantulas de cebolla' || $message == 'plantulas de cebolla') {
            $options = ['Plantulas de cebolla cabezona', 'Plantulas de cebolla junca', 'Plantulas de cebolla larga', 'Plantulas de cebolla morada'];
                    
    } else if ($message == 'Tierras' || $message == 'tierras') {
        $response = 'Buscas tierras para tus productos elige lo que necesites.';
        $options = ['Tierra negra', 'Tierra fertil', 'Tierra para macetas', 'Tierra para jardines'];
    } else if ($message == 'Terrenos' || $message == 'terrenos') {
        $response = 'que tipo de terreno buscas?';
        $options = ['Terreno para siembra', 'Terreno para construccion', 'Terreno para cultivo', 'Terreno para ganado'];
    } else {
        $response = 'perdon,no entiendo lo que quieres. por favor elige una opción para continuar.';
        $options = ['Buscar productos', 'Comprobar estado de mi pedido', 'contactar soporte'];
    }
}

echo json_encode(['response' => $response, 'options' => $options]);

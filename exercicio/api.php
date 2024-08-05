<?php
    header('Content-Type:application/json');
    include 'conexao.php';

    $metodo = $_SERVER['REQUEST_METHOD'];
    //echo json_encode($metodo);

    $url = $_SERVER['REQUEST_URI'];

    //echo json_encode($url);

    $path = parse_url($url, PHP_URL_PATH);
    $path = trim($path,'/');
    $pathparts = explode('/',$path);

    // creando as variaves para cada parte da url
     $primeira = isset ($pathaparts[0]) ? $pathparts[0] : '';
     $segunda = isset ($pathaparts[1]) ? $pathparts[1] : '';
     $terceira = isset ($pathaparts[2]) ? $pathparts[2] : '';
     $quarta = isset ($pathaparts[3]) ? $pathparts[3] : '';

   //montando a resposta da api em json
    $response = [
        'metodo' => $metodo,
        'primeiraparte'=> $primeira,
        'segundaparte'=> $segunda,
        'terceiraparte'=> $terceira,
        'quartaparte'=> $quarta,
    ];
     // mostrando a resposta 
     //echo json_encode($response)

     //seleçao do metodo 
     switch ($metodo){
        case 'GET';
        //logica para GET
        break;
        case 'POST';
        //logica para POST
        break;
        case 'PUT';
        //logica para PUT
        break;
        case 'DELETE';
        //logica para DELETE
        break;
        default:
        echo json_encode(
            [
                'mensagem' => 'metodo nao permitido'
            ]
            );
            break;
     }
     
?>
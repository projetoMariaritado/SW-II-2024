<?php
class Response {
    public static function resposta($status = 200,$menssage = 'sucess',$data = null) {
    //Aqui vai o corpo da resposta
    header('Content-Type: application/json');


    if(!API_IS_ACTIVE){
        return json_encode([
        'status'=> 400,
        'mensagem'=> ' A api nao esta rodando',
        'api_version'=> API_VERSION,
        'Time_response'=> time(),
        'data_atual'=> date('Y-m-d H:i:s'),
        'dados'=> null
        ]);
    }

    return json_encode([
        'status' => $status,
        'mensagem' => $menssage,
        'api_version'=> API_VERSION,
        'Time_response'=> time(),
        'data_atual'=> date('Y-m-d H:i:s'),
        'dados'=> $data
    ]);
}}
?>
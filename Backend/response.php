<?php 

$method = $_SERVER['REQUEST_METHOD'];

if ($method == 'GET'){
$clientes = [[
    "Cedula"=>1143256789,
    "Nombre"=>"Antonio Meza",
    "Dirrecion"=>"kra 41 # 120 -96",
    "Telefono"=>"3642903",
    "Edad"=>38
],[
    "Cedula"=>1143256788,
    "Nombre"=>"Uriel Meza",
    "Dirrecion"=>"kra 31 # 80 -96",
    "Telefono"=>"3642902",
    "Edad"=>25
],[
    "Cedula"=>1143256787,
    "Nombre"=>"Ana Mercado",
    "Dirrecion"=>"kra 21 # 70 -96",
    "Telefono"=>"3642901",
    "Edad"=>35
],[
    "Cedula"=>1143256786,
    "Nombre"=>"Jhann Meza",
    "Dirrecion"=>"kra 11 # 50 -96",
    "Telefono"=>"3642900",
    "Edad"=>29
]

];
$json= json_encode($clientes);

header('content-type: application/json; charset=utf-8');
echo $json;
}else{

    $clientes = ["messge"=>"Metodo $method no permitido" ];
    $json= json_encode($clientes);

header('content-type: application/json; charset=utf-8');
echo $json;
}
?>
<?php
//Funções para manipular arrays


//Serve para unir 1 ou mais arrays
/*
$array1 = array("chave1" => "valor1", "chave2" => "valor2");
$array2 = array("chave3" => "valor3", "chave4" => "valor4");
$array3 = array("chave5" => "valor5");
$resultado = array_merge($array1, $array2, $array3);
print_r ( $resultado);
*/


//array_intersect_key serve para retornar valorescom a mesma cahve em 1 ou mais arrays.
/*
$array1 = array("chave1" => "valor1", "chave2" => "valor2");
$array2 = array("chave1" => "outro valor" , "chave3" => "valor3", "chave4" => "valor4");

print_r(array_intersect_key($array1, $array2));
*/


//array map serve para aplicar uma funação em todos os valores de uma array
$arr = ['<p>guilherme<p>', 'joao', '<h1>davi</h1>'];
print_r(array_map('strip_tags' , $arr));




?>
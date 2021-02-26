<?php
// Iniciando a biblioteca cURL
$ch = curl_init();//ch "curl head"

// Indicando o endereço que será requisitado
curl_setopt($ch, CURLOPT_URL, "https://google.com"); //Primeiro passamos nossa biblioteca, Aqui setamos as optções 

// Setamos qual será o método de envio e recebimento dos dados
curl_setopt($ch, CURLOPT_POST, 1); //Nesse exemplo setamos post como metodo

// (opcional o envio de dados)
curl_setopt($ch, CURLOPT_POSTFIELDS, "nome=Brayann&idade=90&sexo=masculino");

// Agora precisamos definir se queremos receber o retorno. Caso sim:
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//Após setar todas as opções e se vc quiser receber os dados:
$resposta = curl_exec($ch);
curl_close($ch);

var_dump($resposta);

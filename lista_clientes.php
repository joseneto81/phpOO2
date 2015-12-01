<?php
include_once("interfaces/ClienteGrauImportancia.php");
include_once("interfaces/ClienteEnderecoCobranca.php");
require_once("classes/Cliente.php");
require_once("classes/ClientePF.php");
require_once("classes/ClientePJ.php");

    $clientes[1]  = new ClientePF("1" ,"João Carlos Fernandes", "Rua Cinco de Maio, 987","(21) 99876-5432","joao.calos@gmail.com","PF","123.123.123-12", "5", "Rua de Cobrança, 123");
    $clientes[2]  = new ClientePJ("2" ,"Marta Valéria LTDA","Rua Cinco de Maio, 87","(21) 98589-4578","marcaval23@terra.com.br","PJ", "33.333.333.0001-11","4", "Endereço de Cobraça, 444");
    $clientes[3]  = new ClientePF("3" ,"Homer Simpson","Rua 3 de Março, 7","(21) 96541-7412","homersimpson@burnes.com","PF", "555.555.555-52","4", "");
    $clientes[4]  = new ClientePJ("4" ,"Seu Madruga","Av Dom Pedro, 97","(21) 97452-0012","madruguinha@hotmail.com","PJ", "99.999.999/0001-92","3", "Rua Rio Branco, 102 Sala 203");
    $clientes[5]  = new ClientePF("5" ,"Dona Florinda","Rua 1 de Janeiro, 963","(21) 99876-5432","donaflorinda@yahoo.com.br","PF", "887.887.887-54","1", "Rua treze de Maio, 445" );
    $clientes[6]  = new ClientePJ("6" ,"Zeca Urubu","Rua Sete de Setembro, 777","(21) 99801-5427","zeca.urubu@ig.com.br","PJ", "22.211.222/0001-33", "5", "Endereço de Cobranca 2");
    $clientes[7]  = new ClientePF("7" ,"Simone dos Santos","Av 15 de Novembro, 141","(22) 99876-4100","simonedossantos42@globo.com","PF", "444.555.777-55", "3", "");
    $clientes[8]  = new ClientePJ("8" ,"Ronaldo Nazário de Lima","Alameda Lacerda, 859","(21) 32165-9845","ronaldor9@@r9.com","PJ", "44.144.124/0001-44", "1", "Rua novo Endereço de Cobranca, 665");
    $clientes[9]  = new ClientePF("9" ,"Roberto Carlos Coelho","Av Sete de Setembro, 414","(21) 99876-5432","robertocoelho@uol.com.br","PF", "987.987.987-54","1", "");
    $clientes[10] = new ClientePJ("10","Albertina Bonfim","Rua Dois, 44","(22) 2745-5478","albertina.bonfim@gmail.com","PJ", "45.456.456/0001-45", "2", "Endereço do Trabalho");

//print '<pre>';print_r($clientes);print "</pre>";
if(isset($_GET['id']))
{
    $id = $_GET['id'];

    print "<fieldset>
            <legend>Dados do Cliente:</legend>
           <table>";
    print "<tr><td>Nome:</td><td>".$clientes[$id]->getNome()."</td></tr>";
    print "<tr><td>Tipo:</td><td>".$clientes[$id]->getTipo()."</td></tr>";
    if($clientes[$id] instanceof ClientePF )
        print "<tr><td>CPF: </td><td>".$clientes[$id]->getCpf()."</td></tr>";
    elseif($clientes[$id] instanceof ClientePJ)
        print "<tr><td>CPF: </td><td>".$clientes[$id]->getCnpj()."</td></tr>";
    print "<tr><td>Endereço: </td><td>".$clientes[$id]->getEndereco()."</td></tr>";
    print "<tr><td>End.Cobrança: </td><td>".$clientes[$id]->getEnderecoCobranca()."</td></tr>";
    print "<tr><td>Telefone: </td><td>".$clientes[$id]->getTelefone()."</td></tr>";
    print "<tr><td>E-mail: </td><td>".$clientes[$id]->getEmail()."</td></tr>";
    print "<tr><td>Importância: </td><td>".$clientes[$id]->getGrauImportancia()." <span class='icon-star'></span></td></tr>";
    print "</fieldset>";

}
?>
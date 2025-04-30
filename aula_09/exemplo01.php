<?php
    include_once 'Pessoa.class.php';

    //Instância um objeto da classe pessoa
    $fulano = new Pessoa();
    $ciclano = new Pessoa();

    var_dump($fulano);
    echo '<hr>';
    var_dump($ciclano);
    echo '<hr>';

    //Atribuindo valores aos atributos do objeto criado
    $fulano->Nome = 'Arthur da Silva';
    $fulano->Peso = 85;
    $fulano->Altura = 1.83;

    $ciclano->Nome = 'Vinicius da Silva';
    $ciclano->Peso = 80;
    $ciclano->Altura = 1.85;

    //Chamando um método da classe pessoa
    $fulano->MostrarDados();
    $ciclano->Apresentar();
?>
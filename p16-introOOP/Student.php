<?php
class Student
{
    // public e private sao access modifiers, controlando quais variaveis podem ser acessadas externamente
    // estao disponiveis fora da classe (ou seja, no resto do codigo)
    public $id;
    public $name;
    public $birthdate;

    // construct function, é executado automaticamente quando uma nova instancia da classe é criada
    function __construct($id, $name, $birthdate)
    {
        $this->id = $id;
        $this->name = $name;
        $this->birthdate = $birthdate;
    }

    // metodos ou funçoes de instancia, são funcoes que podem ser chamadas dentro da classe
    function greeting()
    {
        echo "Ola eu sou o " . $this->name;
    }
}

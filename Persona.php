<?php

class Persona
{

    //datos = variables
    public $nombre;
    public $edad;
    public $estatura;
    public $sexo;
    //metodo especial que permite que yo use mi clase
    public function _construct()
    {
    }
    //acciones = funciones = metodos

    function saludar()
    {
        echo ("buenas noches");
    }
}

<?php

require_once 'model/SomaModel.php';

class SomaController {
    public function index() {
        require 'view/formulario_soma';
    }

    public function calcularSoma() {
        $num1 = isset($_POST['num1']) ? $_POST['num1'] : 0;
        $num2 = isset($_POST['num2']) ? $_POST['num2'] : 0;

        $model = new SomaModel();
        $soma = $model->calcularSoma($num1, $num2);

        require 'view/resultado.php';
    }
}

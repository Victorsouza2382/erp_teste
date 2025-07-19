<?php
require_once '../app/models/Produto.php';

class ProdutoController {
    public function index() {
        include '../app/views/produto.php';
    }
}
?>
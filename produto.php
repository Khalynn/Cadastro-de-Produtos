<?php
    class Produto {
        // Variáveis da classe produto
        public $nome;
        public $desc;
        public $valor;
        public $url;

        public function __construct($nome, $desc, $valor, $url) {
            $this->nome = $nome;
            $this->desc = $desc;
            $this->valor = $valor;
            $this->url = $url;
        }
    
        // Card do produto
        public function exibirInformacoes() {
            echo '
            <div class="card" style="width: 18rem; margin-bottom: 20px;">
                <img src="' . htmlspecialchars($this->url) . '" class="card-img-top" alt="' . htmlspecialchars($this->nome) . '" style="height: 200px;">
                <div class="card-body">
                    <h5 class="card-title">' . htmlspecialchars($this->nome) . '</h5>
                    <p class="card-text">' . htmlspecialchars($this->desc) . '</p>
                    <p class="card-text"><strong>R$' . number_format($this->valor, 2, ',', '.') . '</strong></p>
                </div>
            </div>';
        }
    }
?>
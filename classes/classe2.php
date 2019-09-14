<?php
require_once 'classe1.php';
    class classe2 extends classe1 {
        //FUNCAO CONSTRUTORA -- ANONIMA E OBRIGATORIA NA CHAMADA DA CLASSE CASO HAJA ALGUM ATRIBUTO REQUERIDO
        public function __construct($roda){
            $roda == true ? true : die();
        }

        //FUNCAO PUBLICA QUE CHAMA UMA FUNCAO PROTEGIDA -- ENCAPSULAMENTO -- VISIBILIDADE
        public function json($texto){
            return $this->converte($texto);
        }

        //FUNCAO PROTEGIDA SO PODE SER CHAMADA DE DENTRO DA CLASSE.
        protected function converte($texto){
            $data = json_encode($texto);
            return $data;
        }
    }
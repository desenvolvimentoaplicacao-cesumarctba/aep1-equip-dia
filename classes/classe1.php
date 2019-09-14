<?php
//CLASSE ABSTRATA -- PODE TER FUNCOES ABSTRATAS OBRIGATORIAS QUANDO EXTENDE.
    abstract class classe1{
        public $array = []; //ATRIBUTO
        //OBJETOS FUNCOES
        function virgulaArray($dados){
            $this->array = explode(',', $dados);
            return $this->array;
        }
    }
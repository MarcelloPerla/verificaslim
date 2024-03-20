<?php
require_once("./Negozio.php");
class Articolo implements JsonSerializable{
    private $id;
    private $nome;
    private $descrizione;
    private $prezzo_di_listino;

    function __construct($id, $nome, $descrizione, $prezzo_di_listino){
        $this->id = $id;
        $this->nome = $nome;
        $this->descrizione = $descrizione;
        $this->prezzo_di_listino = $prezzo_di_listino;
    }

    function get_id(){
        return $this->id;
    }

    function set_id($id){
        $this->id = $id;
    }

    function get_nome(){
        return $this->nome;
    }

    function set_nome($nome){
        $this->nome = $nome;
    }

    function get_descrizione(){
        return $descrizione;
    }

    function set_descrizione(){
        $this->descrizione = $descrizione;
    }

    function get_prezzo_di_listino(){
        return $_prezzo_di_listino;
    }

    function set_prezzo_di_listino(){
        $this->prezzo_di_listino = $prezzo;
    }

    function toString(){
        return "Id: " . $this->id . ", Nome: " . $this->nome . ", Descrizione: " . $this->descrizione . ", Prezzo: " . $this->prezzo_di_listino;
    }

    public function jsonSerialize(){
        $a = [
            "id"=>$this->id,
            "nome"=>$this->nome,
            "descrizione"=>$this->descrizione,
            "prezzo_di_listino"=>$this->prezzo_di_listino
        ];
        return $a;
    }
}

class Articolo_venduto extends Articolo{

    private $prezzo_di_vendita;
    private $quantita_acquistata;
    function __construct($id, $prezzo_di_vendita, $quantita_acquistata){
        $this->id = $id;
        $this->prezzo_di_vendita = $id;
        $this->quantita_acquistata = $quantita_acquistata;
    }

    function get_id(){
        return $this->id;
    }

    function set_id($id){
        $this->id = $id;
    }

    function get_prezzo_di_vendita(){
        return $this->prezzo_di_vendita;
    }

    function set_prezzo_di_vendita($prezzo_di_vendita){
        $this->prezzo_di_vendita = $prezzo_di_vendita;
    }

    function get_quantita_acquistata(){
        return $this->quantita_acquistata;
    }

    function set_quantita_acquistata(){
        return $this->quantita_acquistata;
    }

    public function toString(){
        return "Id: " . $this->id . ", Prezzo: " . $this->prezzo_di_vendita . ", Quantita: " . $this->quantita_acquistata;
    }

    public function jsonSerialize(){
        $a = [
            "id"=>$this->id,
            "prezzo_di_vendita"=>$this->prezzo_di_vendita,
            "quantita_acquistata"=>$this->quantita_acquistata
        ];
        return $a;
    }
}
?>
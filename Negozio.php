<?php
require_once("./Articolo.php");
class Negozio implements JsonSerializable{
    private $nome;
    private $telefono;
    private $url;
    private $p_iva;
    private $articoli = array();
    private $ordini = array();

    function __construct($nome, $telefono, $url, $p_iva){
        $this->nome = $nome;
        $this->telefono = $telefono;
        $this->url = $url;
        $this->p_iva = $p_iva;
        $a1 = new Articolo("1", "Xie", "Cinese", "50");
        $a2 = new Articolo("2", "Pan", "Giapponese", "25");
        $this->articoli = array($a1, $a2);
        $o1 = new Ordine("69", "Oggi", "500", "CartaCredito", "5521", "2");
        $o2 = new Ordine("23", "Ieri", "1500", "COntanti", "1252", "3");
        $this->ordini = array($o1, $o2);
    }

    function get_nome(){
        return $this->nome;
    }

    function set_nome(){
        $this->nome = $nome;
    }

    function get_telefono(){
        return $this->telefono;
    }

    function set_telefono($telefono){
        $this->telefono = $telefono;
    }
    function get_url(){
        return $this->url;
    }

    function set_url(){
        $this->url = $url;
    }

    function get_p_iva(){
        return $this->p_iva;
    }

    function set_p_iva($p_iva){
        $this->p_iva = $p_iva;
    }

    function getApiArticolo($id){
        $string = $id;
        $articolo = null;
        foreach($this->articoli as $a){
            if($a->get_id() == $id){
                $articolo = $a;
                break;
            }
        }
        return $articolo;
    }


    function getApiOrdine($n){
        $string = $n;
        $ordine = null;
        foreach($this->ordini as $o){
            if($o->get_id() == $n){
                $ordine = $o;
                break;
            }
        }
        return $ordine;
    }
    function getArticoli(){
        $text = "";
        foreach($this->articoli as $a){
            $text += $a->toString();
        }
        return $text;
    }

    function getOrdini(){
        $text = "";
        foreach($this->ordini as $o){
            $text += $o->toString();
        }
        return $text;
    }



    function toString(){
        return "Nome: " . $this->nome . ", Telefono: " . $this->telefono . ", url: " . $this->url . " ,P.IVA: " . $this->p_iva;
    }
    
    public function jsonSerialize(){
        $a = [
            "nome"=>$this->nome,
            "telefono"=>$this->telefono,
            "url"=>$this->url,
            "p_iva"=>$this->p_iva,
            "articoli_venduti"=>$this->articoli_venduti
        ];
        return $a;
    }
}
?>
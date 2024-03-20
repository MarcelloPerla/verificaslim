<?php
class Ordine implements JsonSerializable{
    private $numero_ordine;
    private $data;
    private $importo_totale;
    private $metodo_pagamento;
    private $indirizzo_ip;
    private $codice_di_autorizzazione;

    function __construct($numero_ordine, $data, $importo_totale){
        $this->numero_ordine = $numero_ordine;
        $this->data = $data;
        $this->importo_totale = $importo_totale;
    }

    function __construct($numero_ordine, $data, $importo_totale, $metodo_pagamento, $indirizzo_ip, $codice_di_autorizzazione){
        $this->numero_ordine = $numero_ordine;
        $this->data = $data;
        $this->importo_totale = $importo_totale;
        $this->metodo_pagamento = $metodo_pagamento;
        $this->indirizzo_ip = $indirizzo_ip;
    }

    function get_numero_ordine(){
        return $numero_ordine;
    }

    function set_numero_ordine($numero_ordine){
        $this->numero_ordine = $numero_ordine;
    }

    function get_data(){
        return $data;
    }

    function set_data($data){
        $this->data = $data;
    }

    function get_importo_totale(){
        return $importo_totale;
    }

    function set_importo_totale(){
        $this->importo_totale = $importo_totale;
    }

    function get_metodo_pagamento(){
        return $this->metodo_pagamento;
    }

    function set_metodo_pagamento($metodo_pagamento){
        $this->metodo_pagamento = $metodo_pagamento;
    }

    function get_indirizzo_ip(){
        return $this->indirizzo_ip;
    }

    function set_indirizzo_ip(){
        $this->get_indirizzo_ip = $indirizzo_ip;
    }

    function get_codice_di_autorizzazione(){
        return $this->codice_di_autorizzazione;
    }

    function toString(){
        return $this->numero_ordine . $data . $this->importo_totale . $this->metodo_pagamento . $this->indirizzo_ip . $this->codice_di_autorizzazione;
    }
    public function jsonSerialize(){
        $a = [
            "numero_ordine"=>$this->numero_ordine,
            "data"=>$this->data,
            "importo_totale"=>$this->importo_totale,
            "articoli_venduti"=>$this->$articoli_venduti,
            "metodo_pagamento"=>$this->metodo_pagamento,
            "indirizzo_ip"=>$this->indirizzo_ip,
            "codice_di_autorizzazione"=>$this->codice_di_autorizzazione
        ];
        return $a;
    }
}
?>


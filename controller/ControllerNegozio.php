<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
require_once("./Negozio.php");

class ControllerNegozio{
    function index(Request $request, Response $response, $args) {
        $negozio = new Negozio("Napoli", "3755216723", "www.napolimilano.com", "NO ALLA PARTITA IVA");
        $response->getBody()->write(json_encode($negozio->JsonSerialize()));
        return $response->withHeader('Content-Type', 'application/json');
    }

    function getArticoli(Request $request, Response $response, $args){
        $negozio = new Negozio("Napoli", "3755216723", "www.napolimilano.com", "NO ALLA PARTITA IVA");
        $response->getBody()->write(json_encode($negozio->getArticoli));
        return $response->withHeader("Content-Type", "application/json")->withStatus(200);
    }

    function getApiArticoli(Request $request, Response $response, $args){
        $negozio = new Negozio("Napoli", "3755216723", "www.napolimilano.com", "NO ALLA PARTITA IVA");
        if ($negozio->getApiArticolo($args["id"]) == null) {
            $response->getBody()->write("Articolo non trovato");
            return $response->withHeader("Content-Type", "application/json")->withStatus(404);
        }else{
            $response->getBody()->write(json_encode($negozio->getApiArticolo($args["id"])));
            return $response->withHeader("Content-Type", "application/json")->withStatus(200);
        }
    }

    function getOrdini(Request $request, Response $response, $args){
        $negozio = new Negozio("Napoli", "3755216723", "www.napolimilano.com", "NO ALLA PARTITA IVA");
        $response->getBody()->write(json_encode($negozio->getArticoli));
        return $response->withHeader("Content-Type", "application/json")->withStatus(200);
    }

    function getApiOrdini(Request $request, Response $response, $args){
        $negozio = new Negozio("Napoli", "3755216723", "www.napolimilano.com", "NO ALLA PARTITA IVA");
        if ($negozio->getApiOrdini($args["n"]) == null) {
            $response->getBody()->write("Ordine non trovato");
            return $response->withHeader("Content-Type", "application/json")->withStatus(404);
        }else{
            $response->getBody()->write(json_encode($negozio->getApiOrdini($args["id"])));
            return $response->withHeader("Content-Type", "application/json")->withStatus(200);
        }
    }
}

?>
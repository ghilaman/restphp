<?php
//-----------------------------------------Functions to define method behavior---------------------------------//

function get($uri){
    $headers = apache_request_headers();
    switch ($uri) {
        case '/':
        index();
        break;
        case '/qualcosa':
            getQualcosa($headers);
            break;
        case '/ListaEsercenti':
            getVisualizzaEsercente($headers);
            break;
        case'/ListaUtenti':
            getListaUtenti($headers);
            break;
        case'/AggiungiUtente':
            getAggiungiUtente($headers);
            break;
        case'/Questionari':
            getQuestionario($headers);
            break;
        case '/aggiungiEsercente':
            getAggiungiEsercente($headers);
            break;
        break;
//        case'/AggiungiEsercente':
//            postAggiungiEsercente();
//            break;

        default:
        notFound();
        break;
    }
}
function post($uri){
    $headers = apache_request_headers();
    switch ($uri) {
        case '/aggiungiEsercente':
            postAggiungiEsercente();
            break;

        default:
            notFound();
            break;
    }
}

function notFound(){
    http_response_code(404);
    echo "404 Classico Not Found";
}

function badRequest(){
    http_response_code(400);
    echo "Method not implemented";
}

//-----------------------------------------Functions to get the work done---------------------------------//

function getQualcosa($headers){
    //risultato della query
    // require /model/object.php

    //$r = getQualcosa();
    $r = "ekkelo"; //Risultato della query
    if(strpos($headers["Accept"], 'html') !== false){
        require __DIR__ . '/../view/qualcosa.php';
        visualizza($r);
    }else{
        echo $r;
    }

}

function postQualcosa(){
    var_dump($_POST);
    //Qui faccio qualcosa con il coso del post
    echo "<br/>ho fatto la post\n";
}

function getVisualizzaEsercente($headers){
    require "../model/object.php";
    $r = getListaEsercenti();
    if(strpos($headers["Accept"], 'html') !== false){
        require __DIR__ . '/../view/VisualizzazionePagine.php';
        visualizza($r);
    }else{
        echo $r;
    }
//    visualizzaTabella($r);

}

function postAggiungiEsercente($POST){
    require ('../model/object.php');
    aggiungiEsrcente($_POST);

}

function getListaUtenti($headers){
    require "../model/object.php";
    $r=ListaUtenti();
    if(strpos($headers["Accept"], 'html') !== false){
        require __DIR__ . '/../view/VisualizzazionePagine.php';
        visListaUtenti($r);
    }else{
        echo $r;
    }

}

function getAggiungiUtente($headers){
    if(strpos($headers["Accept"], 'html') !== false){
        require __DIR__ . '/../view/VisualizzazionePagine.php';
        AggiungiUtente();
    }else{
         exit ;
    }
}


function getQuestionario($headers){
    require "../model/object.php";
    $r=Questionari();
    if(strpos($headers["Accept"], 'html') !== false){
        require __DIR__ . '/../view/VisualizzazionePagine.php';
        visualizzaQuestionari($r);
    }else{
        echo $r;
    }
}

function getAggiungiEsercente($headers){
    if(strpos($headers["Accept"], 'html') !== false){
        require __DIR__ . '/../view/VisualizzazionePagine.php';
        aggiungiEsrcente();
    }else{
        exit;
    }
}

?>
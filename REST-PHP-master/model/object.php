<?php
//require della connessione
//require db.php  ;


function getListaEsercenti(){


    $db=require "../database/db.php";
    $q="Select * from Amministratore;";
    //query
    $r=mysqli_query($db,$q);

    //return del risultato
    return $r;
}

function ListaUtenti(){
    $db=require "../database/db.php";
    $q="Select * from Utente";
    //query
    $r=mysqli_query($db,$q);

    //return del risultato
    return $r;

}

function aggiungiUtente(){
    $db=require "../database/db.php";
    $q="Insert into Utente ";
    //query
    $r=mysqli_query($db,$q);

    //return del risultato
    return $r;

}

function Questionari(){
    $db=require "../database/db.php";
    $q="Select * from  questionario ";
    //query
    $r=mysqli_query($db,$q);

    //return del risultato
    return $r;
}

function aggiungiEsercente($POST){
    $db=require "../database/db.php";

    $q="INSERT INTO amministratore (email, password, nome, percorso_logo) values (".$POST['id_admin'].",".$POST['email'].",".$POST['password'].",".$POST['nome'].",".$POST['percorso_logo'].",1,1,NULL,NULL,2015-01-01)";
    //query
    $r=mysqli_query($db,$q);

    //return del risultato
    return $r;
}
?>
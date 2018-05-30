<?php
include("parcials/header.php");
?>

    <style>
        .demo-card-wide.mdl-card {
            width: 670px;
            margin: 10% auto;
        }

        .bottone {
            background-color: #5C6BC0;
        }

        .bottone:hover {
            background-color: #2196F3;
        }

        .bottone_non_pubblicato {
            background-color: #F44336;
        }

        .bottone_non_pubblicato:hover {
            background-color: #4CAF50;
        }

        .bottone_pubblicato {
            background-color: #4CAF50;
        }

        .material-icons.md1::before {
            content: "add";
        }

        .croce:hover::before .material-icons {
            content: "clear";
            background-color: #F44336;
        }

        .croce:hover::after .material-icons {
            content: "done";
            background-color: #4CAF50;
        }

        .mdl-button {
            color: white;
            font-family: "Roboto", "Helvetica", "Arial", sans-serif;
            font-size: 18px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0;
            cursor: pointer;
            text-align: center;
            line-height: 36px;
        }

        .mdl-data-table {
            margin: auto;
            width: 100%;
            position: relative;
            border: 1px solid rgba(0, 0, 0, .12);
            border-collapse: collapse;
            white-space: nowrap;
            font-size: 13px;
            background-color: #fff;
        }

        .demo-list-icon {
            width: auto;
            margin-top: 0px;
            margin-bottom: 0px;
        }

        #percorso_logo {
            border-radius: 50%;
            width: 200px;
        }

        .demo-list-icon {
            width: 500px;
        }

        #casellaricerca {
            width: auto;
            padding: 20px 0 0 0;
        }

        .mdl-card__title {
            justify-content: space-between;
        }

        #casellaricerca {
            padding: 20px 0 0 0;
        }

        #cerca {
            font-size: 18px;
            border-bottom: 1px solid rgba(255, 255, 255, .7);
        }

        #labcerca {
            color: white;
        }

        #labcerca::after {
            bottom: 0;
            background-color: white;
        }

        #noes {
            font-size: 16px;
            line-height: 24px;
        }

        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0, 0, 0); /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto; /* 15% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 80%; /* Could be more or less, depending on screen size */
        }

    </style>

<?php
function Visualizza($r)
{
    echo'<br><br><br><br>';
    echo'                             ';
    echo'<table><thead>
                    <tr><th>id_amministratore</th>
                    <th>email</th>
                    <th>password</th>
                    <th>nome</th>
                    <th>id_questionario_qrcode</th>
                    <th>data</th></tr></thead>'.
        '<tbody>';
    while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
        echo '<tr><td>'.$row['id_amministratore'].'</td>
                         <td>'.$row['email'].'</td>
                         <td>'.$row['password'].'</td>
                         <td>'.$row['nome'].'</td>
                         <td>NULL'.$row['id_questionario_qrcode'].'</td>
                         <td>'.$row['data'].'</td>
                           


</tr>';
    }
    echo'</tbody></table>';
}


function visListaUtenti($r){?>
    <body>
    <style>

    a {
        color: rgba(0, 0, 0, 0);
        font-weight: 500;
            display: inline-block;
        }

        .demo-card-image.mdl-card {
        width: 256px;
            height: 256px;
            margin: 16px 0 16px 16px;
        }

        .demo-card-image > .mdl-card__actions {
        height: 40px;
            padding: 16px;
            background: rgba(0, 0, 0, 0.2);
        }

        .demo-card-image__filename {
        color: #fff;
        font-size: 14px;
            font-weight: 500;
        }
    </style>

    <?php while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {

        echo '
        <div class="demo-card-image mdl-card mdl-shadow--2dp" style="background: #cab8b3; float: left; margin-left: 60px">
                    <div class="mdl-card__title mdl-card--expand">
</div>
            <div class="mdl-card__actions">
                <span class="demo-card-image__filename"><strong>' . $row['id_utente'] . '.</strong></span>
                <span class="demo-card-image__filename"><strong>' . $row['email'] . '</strong></span>
                <span class="demo-card-image__filename">' . $row['punti_accumulati'] . '</span>
            </div>
        </div>
';
    }}

//    function AggiungiUtente(){
//    echo.
//
//    }
    ?></body>

    <?php function visualizzaQuestionari($r){?>
    <body>
    <style>

        a {
            color: rgba(0, 0, 0, 0);
            font-weight: 500;
            display: inline-block;
        }

        .demo-card-image.mdl-card {
            width: 256px;
            height: 256px;
            margin: 16px 0 16px 16px;
        }

        .demo-card-image > .mdl-card__actions {
            height: 40px;
            padding: 16px;
            background: rgba(0, 0, 0, 0.2);
        }

        .demo-card-image__filename {
            color: #fff;
            font-size: 14px;
            font-weight: 500;
        }
    </style>
    <?php while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {

        echo '
        <div class="demo-card-image mdl-card mdl-shadow--2dp" style="background: #cab8b3; float: left; margin-left: 60px">
                    <div class="mdl-card__title mdl-card--expand">
</div>
            <div class="mdl-card__actions">
                <span class="demo-card-image__filename"><strong>' . $row['id_questionario'] . '.</strong></span>
                <span class="demo-card-image__filename"><strong>' . $row['nome'] . '</strong></span>
                <span class="demo-card-image__filename">' . $row['punti'] . '</span>
                <span class="demo-card-image__filename">' . $row['metodo_invio'] . '</span>
            </div>
        </div>
';
    } ?>

    </body>
    </html>


    <?php } ?>


<?php
    function aggiungiEsrcente(){
        echo'<form method="post" action="../public/index.php">
              <p>id_admin </p><input type="number" name="id_admin">  
              <p>email </p><input type="email" name="email">
              <p>password </p><input type="password" name="password">
              <p>nome </p><input type="text" name="nome">
              <p>percorso logo </p><input type="text" name="percorso_logo">
              <p>data </p> <input type="date" name="date">
              <br>
              <input type="submit">
                
    
             </form>';
    }






?>








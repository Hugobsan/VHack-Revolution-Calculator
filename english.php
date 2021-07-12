<!doctype html>
<html lang="pt-br">
  <head>
    <title>VHack Revolution Calculator</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
  <style type="text/css">
      .titulo{
        margin: 10px 0px 30px 10px;
      }
      .formulario{
        margin: 10px;
        display: inline-block;
        padding: 15px 10px;
      }
      label{
        font-weight: bold;
        margin-top: 10px;
      }
      .resultado{
        margin: 10px;
        padding: 15px 10px;
      }
      a{
          margin-left: 10px;
      }
      
  </style> 
  </head>
  <body>
    <h3 class="titulo">Calculator for <span class="text-warning">V</span>Hack Revolution</h3>
    <a href="index.php"> <button class="btn btn-info">Clique para Versão Portuguesa</button> </a><br>
    <form class="formulario border border-secondary rounded" action="english.php" method="POST">
        <fieldset>
        <legend>Enter your attributes (Only Numbers):</legend>
        <label for=fw>FIREWALL:</label><br>
        <input type=number name="fw" id="fw"><br>
        <label for=sdk>SDK:</label><br>
        <input type=number name="sdk" id="sdk"><br>
        <label for=mwk>MALWARE KIT:</label><br>
        <input type=number name="mwk" id="mwk"><br>
        <label for=ipsp>IP-SPOOFING:</label><br>
        <input type=number name="ipsp" id="ipsp"><br>
        <label for=scan>SCAN:</label><br>
        <input type=number name="scan" id="scan"><br><br>
        <input type=submit value="Calculate" name="Calcular" class="btn btn-warning">
        </fieldset>
    </form>
    <hr>
    <div class="resultado">
    <h2 class="titulo ">Result:</h2>
    <?php
      if(isset($_POST['Calcular'])){
        if(!empty($_POST['fw'])){
            $fw_digitado=$_POST['fw'];
          }
          else{
            $ipsp_digitado=0;
          }
        if(!empty($_POST['ipsp'])){
          $ipsp_digitado=$_POST['ipsp'];
        }
        else{
          $ipsp_digitado=0;
        }
        if(!empty($_POST['sdk'])){
          $sdk_digitado=$_POST['sdk'];
        }
        else{
          $sdk_digitado=0;
        }
        if(!empty($_POST['mwk'])){
          $mwk=$_POST['mwk'];
        }
        else{
          $mwk=0;
        }
        if(!empty($_POST['scan'])){
          $scan_digitado=$_POST['scan'];
        }
        else{
          $scan_digitado=0;
        }

        $ipsp_real=($ipsp_digitado/6.7)*10;
        $ipsp_real=number_format($ipsp_real, 2, ',', '.');
        $sdk_real=($sdk_digitado/7)*10;
        $sdk_real=number_format($sdk_real, 2, ',', '.');
        if($sdk_digitado>0 && $mwk>0){
            $tr_transfer=($sdk_digitado+$mwk)/2;
            $tr_transfer=number_format($tr_transfer, 2, ',', '.');
            $logs=$sdk_digitado+$mwk;
            $logs=number_format($logs, 2, ',', '.');
        }
        else{
            $tr_transfer=0;
            $logs=0;
        }
        $scan=$scan_digitado*5;
        $scan=number_format($scan, 2, ',', '.');
        $fw_real=($fw_digitado/10)*7;
        $fw_real=number_format($fw_real, 2, ',', '.');

        echo "IP-Spoofing: ".$ipsp_real;
        echo "<br>";
        echo "IP-Spoofing hide your IP. The IP-Spoofing Calculation, shows how much enemy Firewall you will be UNKNOWN in the logs.";
        echo "<br>";
        echo "<br>";
        echo "SDK: ".$sdk_real;
        echo "<br>";
        echo "SDK Calculation shows how much Firewall you can exploit.";
        echo "<br>";
        echo "<br>";
        echo "Firewall: ".$fw_real;
        echo "<br>";
        echo "Firewall Calculation shows how much the enemy needs SDK to exploit you.";
        echo "<br>";
        echo "<br>";
        echo "TR. Transfer: ".$tr_transfer;
        echo "<br>";
        echo "TR. Transfer shows up to how much enemy Antivirus you can make a TR. Transfer.";
        echo "<br>";
        echo "<br>";
        echo "Edit Logs: ".$logs;
        echo "<br>";
        echo "Edit Logs shows how much enemy Antivirus you can edit the enemy log.";
        echo "<br>";
        echo "<br>";
        echo "Scan: ".$scan;
        echo "<br>";
        echo "Scan Calculation shows how much enemy Firewall you can scan.";
        echo "<br>";
        echo "<br>";

      }
    ?>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
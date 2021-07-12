<!doctype html>
<html lang="pt-br">
  <head>
    <title>Calculadora VHack Revolution</title>
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
        margin: 10px 20px;
        padding: 15px 10px;
      }
      a{
          margin-left: 10px;
      }
      .cartao{
        padding:0px !important;
        margin-bottom: 15px;
      }
      .ataque{
        margin-right:15px;
        margin-bottom: 15px;
      }
      
  </style> 
  </head>
  <body>
    <h3 class="titulo">Calculadora para <span class="text-warning">V</span>Hack Revolution</h3>
    <a href="../en/"> <button class="btn btn-info">Tap to English Version</button> </a><br>

    <!-- Formulário para receber os dados da conta -->

    <form class="formulario border border-secondary rounded" action="index.php" method="POST">
        <fieldset>
        <legend>Digite seus dados (Apenas Números):</legend>
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
        <input type=submit value="Calcular" name="Calcular" class="btn btn-warning">
        </fieldset>
    </form>

    <!-- Fim do Formulário -->

    <hr>

    <div class="resultado">
      <h2 class="titulo">Resultado:</h2>

      <?php
      /* Processamento dos dados recebidos pelo Form */
        if(isset($_POST['Calcular'])){
          if(!empty($_POST['fw'])){
            $fw_digitado=$_POST['fw'];
          }
          else{
            $fw_digitado=0;
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
          $ipsp_defesa=($fw_digitado/10)*6.7;
          $ipsp_defesa=number_format($ipsp_defesa, 2, ',', '.');
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
          $scan_def=$fw_digitado/5;
          $scan_def=number_format($scan_def, 2, ',', '.');
          $fw_real=($fw_digitado/10)*7;
          $fw_real=number_format($fw_real, 2, ',', '.');
          /* deixei a chave do primeiro IF aberta, fechar ao fim do Front-End dos resultados. */ 
        ?>

        <div class="row">
          <div class="col-sm-12 col-lg-5 resultados ataque border border-danger rounded">
            <h3 class="text-danger">Ataque</h3>
            <!-- Cards para exibição dos dados -->
              <div class="card cartao col-12">
                <div class="card-body">
                  <h5 class="card-title">Exploit</h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?php echo $sdk_real; ?></h6>
                  <p class="card-text">O Cálculo de Exploid mostra até quanto de Firewall você pode exploitar com seu SDK atual.</p>
                </div>
              </div>
              <div class="card cartao col-12">
                <div class="card-body">
                  <h5 class="card-title">Ocultação de IP</h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?php echo $ipsp_real; ?></h6>
                  <p class="card-text">O Cálculo de Ocultação de IP mostra até quanto de Firewall inimigo você ficará UNKNOWN nos logs com seu nível atual de IP-Spoofing.</p>
                </div>
              </div>
              <div class="card cartao col-12">
                <div class="card-body">
                  <h5 class="card-title">Scan</h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?php echo $scan; ?></h6>
                  <p class="card-text">O Cálculo de Scan mostra até quanto de Firewall inimigo você pode escanear com base no seu nível de Scan atual.</p>
                </div>
              </div>
              <div class="card cartao col-12">
                <div class="card-body">
                  <h5 class="card-title">Tr. Transfer</h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?php echo $tr_transfer; ?></h6>
                  <p class="card-text">O Cálculo de Tr. Transfer mostra até quanto de Antivirus inimigo você pode fazer uma TR. Transfer com seu nível atual de SDK e Malware Kit atual.</p>
                </div>
              </div>
              <div class="card cartao col-12">
                <div class="card-body">
                  <h5 class="card-title">Editar Logs</h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?php echo $logs; ?></h6>
                  <p class="card-text">O Cálculo de Editar Logs mostra até quanto de Antivirus do inimigo você será capaz de editar o log dele. Baseado no seu SDK e seu Malware Kit atual.</p>
                </div>
              </div>
          </div>
          <div class="col-sm-12 col-lg-5 resultados defesa border border-success rounded">
            <h3 class="text-success">Defesa</h3>
            <!-- Cards para exibição dos dados -->
            <div class="card cartao col-12">
              <div class="card-body">
                <h5 class="card-title">Proteção contra Exploit:</h5>
                <h6 class="card-subtitle mb-2 text-muted"><?php echo $fw_real;?></h6>
                <p class="card-text">O Cálculo de Proteção contra exploit mostra quanto o inimigo precisa ter de SDK para exploitar você com base no seu Firewall atual.</p>
              </div>
            </div>
            <div class="card cartao col-12">
              <div class="card-body">
                <h5 class="card-title">Proteção contra IP-Spoofing:</h5>
                <h6 class="card-subtitle mb-2 text-muted"><?php echo $ipsp_defesa;?></h6>
                <p class="card-text">O Calculo Proteção contra IP-Spoofing mostra o nível de IP-Spoofing que um inimigo precisa ter para esconder o IP nos seus Logs baseado no seu Firewall atual.</p>
              </div>
            </div>
            <div class="card cartao col-12">
              <div class="card-body">
                <h5 class="card-title">Proteção contra Scan:</h5>
                <h6 class="card-subtitle mb-2 text-muted"><?php echo $scan_def;?></h6>
                <p class="card-text">O Calculo de Proteção contra Scan mostra o nível de Scan que um inimigo precisa ter para escanear você baseado no seu Firewall atual.</p>
              </div>
            </div>
          </div>
        </div>
        <?php }?>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
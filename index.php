<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>PROJ_PADILHA</title>
  <link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body>

<?php 
    $ip_user = gethostbyname(gethostname());
    $nomepc = gethostbyaddr($_SERVER['REMOTE_ADDR']);


    if (strpos($nomepc, 'TI') !== false) {
        $setor = "TI";
    }
    else if (strpos($nomepc, 'FATU') !== false){
        $setor = "Faturamento";
    }
    else if (strpos($nomepc, 'ADM') !== false){
        $setor = "Administrativo";
    }
    else {
        $setor = "N.I";
    }

    
    include_once('config.php'); 

    $result = mysqli_query($conexao, "INSERT INTO usuarios(ip_usuario, nome_pc, setor) VALUES ('$ip_user', '$nomepc', '$setor')"); 
    

?>

<div id="overlay"></div>

  <div id="popup" class="popup">
    <h2>ATENÇÃO</h2>
    <p>Por favor, tome medidas imediatas para proteger sua privacidade e a segurança de suas informações pessoais !</p>
    <button id="closeBtn">Fechar</button>
   </div>

<div class="board">
  <img src="./image/alertAmarelo.png" class="alertAmarelo"> 
  <div class="titulo">
    <h1>AMEAÇA DETECTADA!</h1>
    <h2>Seus dados foram comprometidos!</h2>
    <h3>Foi identificado que suas informações foram acessadas de maneira não autorizada. Diante dessa situação,solicitamos que entre em contato urgente com o Departamento de Tecnologia e Informação (T.I.) para que possamos iniciar uma investigação detalhada e implementar medidas de segurança adicionais para proteger nossos bancos de dados.
    </h3>
  </div>

  <script src="script.js" defer></script>

</body>
</html>

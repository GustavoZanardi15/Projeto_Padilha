<?php 
    session_start();

    if ((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true)) {
        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }

    $logado = $_SESSION['usuario'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAINEL DE CONTROLE</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
</head>
<body>
    <header style="background-color: black; color: white; text-align: center; padding: 25px;">
        <h1>PAINEL DE CONTROLE</h1>
    </header>
        <a href="sair.php" class="btn btn-danger mt-2">Sair</a>
        <a href="?page=listar" class="btn btn-primary mt-2">Listar</a>

    
    
    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <?php 
                    include('config.php');
                    switch (@$_REQUEST['page']){
                        case 'listar':
                            include('listar.php');
                            break;
                        
                        default:
                        echo "<h1>Seja bem vindo $logado</h1>";
                    }
                ?>
            </div>
        </div>
    </div>
    
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>TELA_LOGIN</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" type="text/css" href="./style_login.css">
</head>

<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="valida.php" method="POST">
                    <h2>Login</h2>
                    <div class="inputbox">
                        <ion-icon name="person-outline"></ion-icon>
                        <input type="text" name="usuario" required>
                        <label for="usuario">Usuário</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="senha" required>
                        <label for="senha">Senha</label>
                    </div>
                    <button type="submit" name="submit" value="Enviar">Login</button>
                </form>
            </div>
        </div>
    </section>
</body>

</html>

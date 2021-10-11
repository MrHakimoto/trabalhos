<?php
include("../function/especials.php");

$amadeus = false;

$confirmadorCPF = isset($_GET['hc']) ? $_GET['hc'] : "nada";

$confirmadorSenha = isset($_GET['hs']) ? $_GET['hs'] : "nada";

$error = isset($_GET['error']) ? $_GET['error'] : "nada";


$errado = false;

if ($error == "danger") {
    $errado = true;
}

if ($confirmadorCPF != "nada" && $confirmadorSenha != "nada") {
    $amadeus = true;
}

echo $maccabeus;
?>
<link rel="stylesheet" href="../css/style.css">
<title> Cadastro </title>



<body class="body-cadastro">

    <div class="container-cadastro container">
        <div class="row">
            <div class="col-12">
                <form action="../function/resposta.php" method="POST">
                    <div class="espacing">
                        <?php
                            if ($errado) {
                                echo "<h5> Prencha todos os campos! </h5>";
                            }

                        ?>

                        <label for="user">Nome:</label> <br>
                        <input type="text" id="User" name="user">
                    </div>
                    <div class="espacing">
                        <label for="mail">Email:</label> <br>
                        <input type="email" id="mail" id="mail" name="mail">
                    </div>
                    <div class="espacing">
                        <label for="cpf">CPF:</label> <br>
                        <input type="number" id="cpf" id="cpf" name="cpf">

                        <?php
                        if ($amadeus) {
                            if ($confirmadorCPF == "e") {
                                echo "<p style='color:red;' class='tw-b'> CPF informado inválido!</p>";
                            } else {
                                "<p> </p>";
                            }
                        }
                        ?>

                    </div>
                    <div class="espacing">
                        <label for="pass1">Senha:</label> <br>
                        <input type="password" id="pass1"  name="pass1">
                    </div>
                    <div class="espacing">
                        <div class="pass2">
                            <label for="user">Repita a senha:</label> <br>
                            <input type="password" id="pass2" name="pass2">
                            <?php
                            if ($amadeus) {
                                if ($confirmadorSenha == "e") {
                                    echo "<p style='color:red;' class='tw-b'> As senhas são diferentes!</p>";
                                } else {
                                    "<p> </p>";
                                }
                            }
                            ?>
                        </div>
                        <div class="espacing">
                            <button class="btn btn-primary text-center">Enviar</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>



    <p>oi</p>
    <?php
    echo $scripts;
    ?>
</body>

</html>
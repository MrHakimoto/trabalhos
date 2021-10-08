<?php

include('index.php');
echo $principal;
?>

<title>Login</title>

<body>

    <form action="resposta.php">
        <div>
            <p>
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome">
            </p>
            <p>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email">
            </p>
            <p>
                <label for="cpf">Digite seu CPF:</label>
                <input type="number" max="11" id="cpf" name="cpf">
            </p>
            <p>
                <label for="senha1">Digite uma senha:</label>
                <input type="text" id="senha1" name="senha1">
            </p>
            <p>
                <label for="senha2">Repita a Senha:</label>
                <input type="text" id="senha2" name="senha2">
            </p>
        </div>

    </form>
</body>

</html>
<?php
include("function/especials.php");

echo $maccabeus;

date_default_timezone_set('Asia/Ho_Chi_Minh');

$hora = intval(date("H"));
switch ($hora) {
    case $hora >= 12 && $hora < 18:
        $moment = "Boa Tarde";
        break;
    case $hora >= 00 && $hora < 12:
        $moment = "Bom Dia";
        break;
    case $hora >= 18 && $hora <= 23:
        $moment = "Boa Noite";
        break;
}
echo $hora;
?>
<title> Página Principal </title>

<body>

    <h1 class="display-5"><?php echo $moment. " "; ?>monsieur</h1>
    <h1>Hello, world!</h1>
    <a href="arquivos/cadastro.php">asd</a>
    aaaaaaaaaaaaaaaaaaaaaaaaaa
    America/Sao_Paulo

    <?php
    echo $scripts;
    ?>
</body>

</html>
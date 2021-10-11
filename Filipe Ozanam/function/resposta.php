<?php


$user = $_POST['user'];
$email = $_POST['mail'];
$cpf = $_POST['cpf'];
$senha1 = $_POST['pass1'];
$senha2 = $_POST['pass2'];
if ($user == null || !isset($email) || !isset($cpf) || !isset($senha1) || !isset($senha2)) {
    header('Location: ../arquivos/cadastro.php?error=danger');
}

function validaCPF($cpf = null) {

	// Verifica se um número foi informado
	if(empty($cpf)) {
		return false;
	}

	// Elimina possivel mascara
	$cpf = preg_replace("/[^0-9]/", "", $cpf);
	$cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
	
	// Verifica se o numero de digitos informados é igual a 11 
	if (strlen($cpf) != 11) {
		return false;
	}
	// Verifica se nenhuma das sequências invalidas abaixo 
	// foi digitada. Caso afirmativo, retorna falso
	else if ($cpf == '00000000000' || 
		$cpf == '11111111111' || 
		$cpf == '22222222222' || 
		$cpf == '33333333333' || 
		$cpf == '44444444444' || 
		$cpf == '55555555555' || 
		$cpf == '66666666666' || 
		$cpf == '77777777777' || 
		$cpf == '88888888888' || 
		$cpf == '99999999999') {
		return false;
	 // Calcula os digitos verificadores para verificar se o
	 // CPF é válido
	 } else {   
		
		for ($t = 9; $t < 11; $t++) {
			
			for ($d = 0, $c = 0; $c < $t; $c++) {
				$d += $cpf[$c] * (($t + 1) - $c);
			}
			$d = ((10 * $d) % 11) % 10;
			if ($cpf[$c] != $d) {
				return false;
			}
		}

		return true;
	}
}

if (validaCPF($cpf)) {
    $hc = "o";
} else {
    $hc = "e";
}

if ($senha1 != $senha2 || $senha==null) {
    $hs = "e"; 
} else {
    $hs = "o";
}

header('Location: ../arquivos/cadastro.php?hc='.$hc.'&'.'hs='.$hs);


?>
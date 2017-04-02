<?php

	mysqli_report(MYSQLI_REPORT_STRICT);


	function open_database() {
		try {
			$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
			return $conn;
		} catch (Exception $e) {
			echo $e->getMessage();
			return null;
		}
	}

	function close_database($conn) {
		try {
			mysqli_close($conn);
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}

	function insert($nome, $email, $fone){

		$conn = open_database();

		$sql = "insert into usuarios (nome, email, fone) VALUES ('".$nome."', '".$email."', '".$fone."')";

		$flag = $conn->query($sql); 

		if ($flag){

			 echo "<script type='text/javascript'>
                    alert('Cadastro realizado com sucesso!');
                    </script>";
		} else {

			        echo "<script type='text/javascript'>
                    alert('Opa, houve algum problema! Por favor, tente novamente.');
                    </script>";

		}


		close_database($conn);

	}

?>
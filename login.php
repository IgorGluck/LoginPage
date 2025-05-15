    <?php 
    //conexao com o database
            $servername = "localhost"; 
            $username = "root"; 
            $password = ""; 
            $db = "acess"; 
            $conexão = new mysqli($servername, $username, $password, $db); 
            if ($conexão->connect_error) { 
                die("Connection failed: " . $conexão->connect_error); 
            } 


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $usuario = $_POST['usuario'];
                $senha = $_POST['Password'];
            
            
    $sql = "SELECT * FROM usuario WHERE name ='$usuario'";
            $resultado = $conexão->query($sql);

        

    if($resultado->num_rows > 0)
    { $linha = $resultado->fetch_assoc();
        if ($linha['senha']== $senha){
        echo "<h1 style='color: green;'>Seja bem-vindo, $usuario!</h1>";
    } else {
        echo "<h1 style='color: red;'>Senha incorreta!</h1>";
    }
} else {
    echo "<h1 style='color: red;'>Usuário não encontrado!</h1>";
}

    }
            ?>
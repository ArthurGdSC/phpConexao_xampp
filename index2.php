<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>

<style>

        body{
            font-family: Arial, Helvetica, sans-serif;
            background: rgb(61, 61, 61);
        }
       
        .header,
        .navigation_header{
            display: flex;
            flex-direction: row;
            align-items: center;
        }
        .header{
            color: white;
            background:rgb(0,0,0,5);
            justify-content: space-between;
            padding: 0 10%;
            height: 6.5em;
            box-shadow: 1px 1px 4px var(--color-dark4);
        }
        .navigation_header{
            gap: 3em;
            z-index: 2;
        }
     
        .navigation_header a{
            text-decoration: none;
            color: var(--color-purple);
            transition: 1s;
            font-weight: bold;
        }
        .navigation_header a:hover{
            color: var(--color-white);
        }
        .active{
            background: var(--color-dark3);
            padding: 10px;
            border-radius: 10px;
        }




        
  

:root {
    --color-neutral-0: #0e0c0c;
    --color-neutral-10: #171717;
    --color-neutral-30: #a8a29e;
    --color-neutral-40: #f5f5f5;

}

* {
    font-family: 'Inter', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    letter-spacing: 1px;
}

main {
    height: 80vh;
}

footer {
    width: 100%;
    color: var(--color-neutral-40);
    position: fixed; bottom: 0;
}




#input_group button {
    background-color: #7f37c9;
    border: none;
    color: var(--color-neutral-40);
    padding: 0px 1.25rem;
    font-size: 1.125rem;
    height: 100%;
    border-radius: 0px 4px 4px 0px;
    cursor: pointer;
    transition: all 0.4s;
}

#input_group button:hover {
    opacity: 0.8;
}

#footer_copyright {
    display: flex;
    justify-content: center;
    background-color: var(--color-neutral-0);
    font-size: 0.9rem;
    padding: 1.5rem;
    font-weight: 100;
}




#input{
    width: 100px;
    display: block;
    margin-top: 13%;
}



body{
    background: rgb(61, 61, 61);
}
#input{
    width: 100px;
    display: block;
    margin-top: 4%;
    margin-left:40%;
}

label{
    color:white;
}
#botao{
    width: 70px;
    height: 20px;
    margin-top:20px;
    margin-left:180px;
}

h1{
    color:white;
    text-align: center;
    margin-top:60px;
}
input{
    width: 400px;
    height: 35px;
    border-radius: 50px;
    margin:8px;
}


body {
            color: white;
        }

        .data {
            color: white;
        }
</style>

 </style>
</head>
<body>


<div class="header" id="header">
        <div class="navigation_header" id="navigation_header">
            <a href="index3.php" class="active">Cadastrar</a>
            <a href="index2.php">intervenientes</a>
        </div>
</div>
    

    <footer>
        <div id="footer_content">
                
        </div>
    </footer>



    <?php
    //Definit as informações de conexão do banco de dados 
    $servidor = "localhost";
    $usuario  = "root";
    $senha    = "";
    $dbname   = "bancodadosphp";

    //Criar a conexão
    $conn = mysqli_connect($servidor,$usuario,$senha,$dbname);

    //Definir a consulta para selecionar todos os registros da tabela "Alunos"
    $result_tabela = "SELECT * FROM aluno";

    //Executar a consulta SQL e armazenar o resultado em uma variavel
    $resultado_tabela = mysqli_query($conn,$result_tabela);

    //Imprimir os valores na pagina 
    while($row_usuario = mysqli_fetch_assoc($resultado_tabela)){
        echo "ID - ". $row_usuario['id'] . "<br>";
        echo "Nome - ". $row_usuario['nome'] . "<br>";
        echo "Sobrenome - ". $row_usuario['sobrenome'] . "<br>";
        echo "Idade - " . $row_usuario['idade'] . "<br><hr>";
    }
    ?>
</body>
</html>
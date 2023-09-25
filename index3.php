<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BDD III</title>


<style>
    <style>
     
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: rgb(61, 61, 61);
        }
        .img_logo_header{
            width: 90px;
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

.footer-link {
    text-decoration: none;
}

#footer_content {
    background-color: var(--color-neutral-10);
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    padding: 3rem 3.5rem;
}

#footer_contacts h1 {
    margin-bottom: 0.75rem;
}

#footer_social_media {
    display: flex;
    gap: 2rem;
    margin-top: 1.5rem;
} 

#footer_social_media .footer-link {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 2.5rem;
    width: 2.5rem;
    color: var(--color-neutral-40);
    border-radius: 50%;
    transition: all 0.4s;
}

#footer_social_media .footer-link i {
    font-size: 1.25rem;    
}

#footer_social_media .footer-link:hover {
    opacity: 0.8;
}

#instagram {
    background: linear-gradient(#7f37c9, #ff2992, #ff9807);
}

#facebook {
    background-color: #4267b3;
}

#whatsapp {
    background-color: #25d366;
}

.footer-list {
    display: flex;
    flex-direction: column;
    gap: 0.75rem;
    list-style: none;
}

.footer-list .footer-link {
    color: var(--color-neutral-30);
    transition: all 0.4s;
}

.footer-list .footer-link:hover {
    color: #7f37c9;
}

#footer_subscribe {
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
}

#footer_subscribe p {
    color: var(--color-neutral-30);
}

#input_group {
    display: flex;
    align-items: center;
    background-color: var(--color-neutral-0);
    border-radius: 4px;
}

#input_group input {
    all: unset;
    padding: 0.75rem;
    width: 100%;
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

#zoro{
    position:absolute;
    width:350px;
    margin-top:-20%;
    margin-left:120px;
}




</style>

</head>
<body>

<div class="header" id="header">

        <div class="navigation_header" id="navigation_header">
            <a href="index3.php" class="active">Cadastrar</a>
            <a href="index2.php">intervenientes</a>
        </div>
</div>
    

<h1>Cadastrar sua inscrição no AnimeFest</h1>


    <form method="post" action=" " id="input";>
        <label for="">Nome</label>
        <input type="text" name="campo1">
        <label for="">Sobrenome</label>
        <input type="text" name="campo2">
        <label for="">Idade</label>
        <input type="number" name="campo3">
        
        <input type="submit" value="Cadastrar" id="botao">
    </form>
<img src="../img/zoro.png" alt="" id="zoro">



    <footer>
        <div id="footer_content">
            
            
         

    </footer>
  
    
    <?php
    $conn = mysqli_connect("localhost", "root", "", "bancodadosphp");
  
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $campo1 = $_POST['campo1'];
        $campo2 = $_POST['campo2'];
        $campo3 = $_POST['campo3'];
    
        $sql = "INSERT INTO aluno (nome, sobrenome, idade) VALUES ('$campo1', '$campo2', '$campo3')";

        if(mysqli_query($conn, $sql)) {
            echo "Registro inserido com sucesso";
        } else {
            echo "Erro ao inserir registro";
        }
    }
    
  ?>

</body>
</html>
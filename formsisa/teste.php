<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário</title>
    <style type="text/css">
    header {
        background-color:rebeccapurple;
        color:rgb(47, 58, 1);
        padding: 10px;
        font-family: Arial, Helvetica, sans-serif;
    }
    
    body {
         font-family: Arial, sans-serif;
         background-color: black;
         margin: 0;
         padding: 0;
         text-align: center;
    }

    div.body-content{
  /** Essa margem vai evitar que o conteudo fique por baixo do rodapé **/
         margin-bottom: 40px;
         }

    form {
    /* Apenas para centralizar o form na página */
    margin: 0 auto;
    width: 400px;
    /* Para ver as bordas do formulário */
    padding: 1em;
    border: 3px solid rebeccapurple;
    border-radius:1em;
    color: rgb(233, 199, 8);
}
    
form div + div {
    margin-top: 1em;
}

label {
    /*Para ter certeza que todas as labels tem o mesmo tamanho e estão propriamente alinhadas */
    display: inline-block;
    width: 90px;
    text-align: right;
}

    h1 {
        margin: 0;
        text-align: center;
        color: honeydew;
    }
   
    h2{
        font-family: 'Times New Roman', Times, serif;
        color:honeydew;
        text-align: center;
    }
    
    p {
        font-family: 'Times New Roman', Times, serif;
        color:honeydew;
        text-align: center;
    }

    footer {
        background-color:rebeccapurple;
        color: rgb(206, 255, 206);
        padding:10px;
        text-align: center;
        bottom: 0;
        left: 0;
        height: 40px;
        position: fixed;
        width: 100%;
}
    </style>
</head>
<body>
    <img src="LakerShow.gif" width="1432" height="150"> <br>
    <header>
         <?php 
         include "menu.php"; 
         
         ?>
       
          </header>

             
              <h2>Digite suas informações abaixo:</h2>
              <p>Seja bem vindo ao nosso site!</p>

    <form action="/pagina-processa-dados-do-form" method="post">
        <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" placeholder="Digite seu Nome" />
        </div>
        <div>
            <label for="login">Login:</label>
            <input type="login" id="login" placeholder="Digite seu Login" />
        </div>
        <div>
        <label for="senha">Senha:</label>
         <input type="password" id="senha" placeholder="Digite sua Senha" />
        </div>
        <div class="button">
            <button type="submit">Enviar </button>
        </div>
    </form>
<br>
    <footer>
        <p>&copy; 2023 LakerShow Todos os direitos reservados.</p>
      </footer>

</body>
</html>
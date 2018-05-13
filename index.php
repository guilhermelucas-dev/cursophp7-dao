<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
          require_once("config.php");
          
          //Carrega um usuário  
          //$root = new Usuario();
          //$root->loadById(4);
          //echo $root;
          
          // Carrega uma lista de usuário 
          // $lista = Usuario::getList();  
          //echo json_encode($lista);
          
          //Carrega uma lista de usuários buscando pelo login
          //$search = Usuario::search("jo");
          //echo json_encode($search);
          
          //carrega um usuário usando o login e a senha
          //$usuario = new Usuario();
          //$usuario->login("Joao", "sfwr");
          //echo $usuario;
          
          //Criando um novo usuário
          //$aluno = new Usuario("lucas","654");
          //$aluno->insert();
          //echo $aluno;
          
          $usuario = new Usuario();
          
          $usuario->loadById(5);
          
          $usuario->update("professor", "473d");
          
          echo $usuario;
        ?>
    </body>
</html>

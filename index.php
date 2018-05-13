<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
          require_once("config.php");
          
          $root = new Usuario();
          $root->loadById(4);
          
          echo $root;
        ?>
    </body>
</html>

<?php
include_once("define.php");
require_once("pdo.php");
 ?>
 <!DOCTYPE html>
<html>
 <head>
   <meta charset="UTF-8">
   <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
   <script type="text/javascript" src="verification.js"></script>
   <link rel="stylesheet" href="/css/css.css" />
   <title> formulaire </title>
 </head>
 <body>
    <div>
       <p> inscription </p>
       <form name="form1" action="" method="POST">
         <input type="text" name="nom" id="nom" placeholder="Nom"><br/>
         <input type="text" name="prenom" id="prenom" placeholder="Prénom"><br/>
         <input type="text" name="pseudo" id="pseudo" placeholder="Pseudo (20max)"><br/>
         <input type="submit" name="submit1" value="s'inscrire">
       </form><br/>

       <p> entrer le pseudo après inscription</p>
       <form name="form2" action="message.php" method="POST">
         <input type="text" name="pseudo" id="pseudo" placeholder="Pseudo"><br/>

         <input type="submit" name="submit2" value="connexion">
       </form>
     </div>
 </body>
</html>

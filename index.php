<html>
   <head lang="n">
   <?php
echo "";

?>
    <meta charset="UTF-8">
    <meta http-equiv="x_UA_compatible" content="IE=edge">
    <meta name=viewport" content="width=device_width, initial-scal=1.0">
      <title>lander lan </title>
      <link rel="stylesheet" href="styl.css">
    </head>
  <body>
  
    <section>
      <h1>inscription</h1>

  <form action="config.php" methode="poste">
  <img src="web.png"alt="poto web"></img>
  <p style="color:green">
    non<br><input type="texte" name=nom><p>
    <p style="color:green">
      prenon<br><input type="texte" name="prenom"><p>
      <p style="color:green"> 
    mot de passe<br><input type="password" name="mdp"><p>
      <input type="submit" value="connection"><input type="reset" value="annuler"><br>
      <input type="radio"name="sexe"/>M
 <input type="radio"name="sexe"/>F<br>
 <select name="AGE">
 <option>10ans</option>
 <option>15ans</option>
   <option>20ans</option>
 <option>25ans</option>
   <option>30ans</option>
 <option>35ans</option>
 <option>40ans</option>

  <p style="color:orange">
 <input type="checkbox"name="koki"id="koki"/>
 <label for="koki">je n aime pas</label>
  <input type="checkbox"name="riz"id="riz"/>
 <label for="riz">j aime</label>
 </form>
 </body>
</html>  



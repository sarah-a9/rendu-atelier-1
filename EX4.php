cd..<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>document</title>
  </head>
 
  <body>
  <?phP
$nom=HajYahia;
$Pre=Sarah;
$info=$nom." ".$pre;
?>
    <table><tr>
        <td>nom</td>
        <td>prenom</td>
    </tr>
    <tr>
        <td><?=$nom?></td>
        <td><?=$Pre?></td>
    </tr>

    </table>
    
  </body>
  <script>
    var info = "<?php echo $info ?>";
    alert(info);
  </script>
</html>


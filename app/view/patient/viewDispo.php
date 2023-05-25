<?php 
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
  <div class="container">
    <?php
      include $root . '/app/view/fragment/fragmentCaveMenu.html';
      include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
    ?> 

      <form action="router2.php" role="form" method="get">
            <div class="form-group">
                <input type="hidden" name="action" value="insertRendezvous">
                <label for="listePraticien">selection d'un rendez-vous</label>
                <select name="listePraticien" id="listePraticien" class="form-control" style="width: 100px">
                    <?php
                    foreach($results as $rendezvous){
                        printf("<option value='%s'>%s</option>", $rendezvous, $rendezvous);
                    }
                    ?>
                    
            </select>
            </div>
            <button class="btn btn-primary" type="submit">envoyer</button>
        </form>
    
  </div>
  <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>
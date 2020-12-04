<?php
  include("../views/entete.php"); 
  include("../model/message.php");
?>
<div class="a">
<h1>Contact</h1>
<i>Pour tout information sur le projet ou pour une collaboration, veillez remplir ci-dessus </i>
</div>
<?php
if(isset($msg))
{
	echo $msg;
}

?>

<form class="form-horizontal" method="POST">
    
  <div class="form-group">   
    <div class="col-sm-12">
    	<label for="name"></label>
      <input type="text" class="form-control" name="name" placeholder="Nom et Prénom" required autofocus>
    </div>
  </div>
    
  <div class="form-group">
    <div class="col-sm-12">
    	<label for="email"></label>
      <input type="text" class="form-control" name="email" id="inputPassword3" placeholder="Email">
    </div>
  </div>
  
    <div class="form-group">
    <div class="col-sm-12">
    	<label for="sujet"></label>
      <input type="text" class="form-control" name="sujet" id="inputPassword3" placeholder="Sujet">
    </div>
  </div>
    
    <div class="form-group">
    <div class="col-sm-12">
    	<label for="message"></label>
      <textarea class="form-control" name="message" id="exampleFormControlTextarea1" placeholder="Message" rows="3"></textarea>
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10 text-center">
      <button type="submit" class="btn btn-primary" name="mailform" id="o">Envoyer</button>
    </div>
  </div>
</form>

<script type='text/javascript' src='/Historia/js/collapse.js'></script>

<?php
  include("../views/footer.php"); 
?>

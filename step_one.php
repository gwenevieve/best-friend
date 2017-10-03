<?php

        require_once 'includes/header.php';

        ?>
<body>

<div class="container">
<div class="row">
	<div class="col-lg-6 offset-lg-3">
<h1 class="text-center">Your New Best Friend!</h1>


<h2 class="text-center">Feeling a little lonely lately? A little down? Fear no more...</h2>


<?php
//initialise $error_req
$error = '';
if ( isset( $_GET[ 'error' ] ) ) {
	$error = $_GET[ 'error' ];
};


if ( $error == "name_missing" ) {

		echo "<div class='red text-center' id=\"error_name\">Please enter a name for your pet!</div>";

}

if ( $error == "species_missing" ) {
	echo "<div class='red text-center' id=\"error_species\">Choose a species!</div>";

}
?>


<h2 class="text-center">Step One: Pet Name &amp; Species</h2>

<form class="text-center" method="POST" action="step_two.php">


	<label for="name">Pet Name:</label>
	<input type="text" name="name" id="name">


<fieldset class="text-center">
	<legend>Choose your pet species:</legend>
		<input type="radio" name="species_type" name="cat" id="cat" value="cat">
		<label for="cat">Cat</label>

		<input type="radio" name="species_type" name="dog" id="dog" value="dog">
		<label for="dog">Dog</label>
</fieldset>

	<button type="submit" class="btn btn-primary">Next</button>


</form>


</div>
</div>

<?php

        require_once 'includes/footer.php';

        ?>

</div><!-- end container -->


<script
  src="http://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
<script src="js/jquery.uniform.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script>
jQuery("select, input:checkbox, input:radio, input:file, input:text, input:submit, textarea").uniform();
</script>
</body>
</html>

<?php

   if (empty($_POST['name'])) {
       header("Location: step_one.php?error=name_missing");
    }

    else if (empty($_POST['species_type'])) {
         header("Location: step_one.php?error=species_missing");
    }

?>

<?php

        require_once 'includes/header.php';

        ?>

<body>

<div class="container">

<?php

$cat_descriptions = array("is an adorable cat with a sweet personality. Loves children and playing with toys.",
 "is a quiet, older cat. Enjoys sleeping on your bed and being pet.",
  "is a young, spry cat with a penchant for tugging on curtains. Lots of energy and perfect for a family with young kids.",
   "is a middle-aged cat that prefers being left alone. Would work well with a single or older couple.");

$cat_fur = array("Fluffy fur", "Short fur", "Medium fur", "Silky fur");
$cat_food = array("Frisky treats"," Cat milk", "People food", "Chicken");
$cat_toy = array("Mouse toy", "Fluffy ball", "Curtains...", "Bells");
$pic_cat = array("cat1.jpg", "cat2.jpg", "cat3.jpg", "cat4.jpg");

$dog_descriptions = array("is an older dog with plenty of energy left. Loves children and fetching sticks.", "is a younger pup that loves going to the parks, chasing frisbees, and destroying your vegetable garden.", "is a rescue from a nearby establishment. Timid and shy, but loves to play tug-of-war.", "is an adult dog that enjoys long hikes and swimming.");

$dog_fur = array("Long fur", "Short fur", "Short hair", "Medium Fur");
$dog_food = array("Chicken", "Milk bone", "Cat food...", "Beef treats");
$dog_toy = array("Bouncy ball", "Stick", "Your shoes", "Frisbee");
$pic_dog = array("dog1.jpg", "dog2.jpg", "dog3.jpg", "dog4.jpg");


// Finds what species was selected and outputs from an array

if ($_POST['species_type'] == 'cat') {
	$descriptions = $cat_descriptions;
  $fur_type = $cat_fur;
  $pic_animal = $pic_cat;
  $fav_food = $cat_food;
  $fav_toy = $cat_toy;
} else {
	$descriptions = $dog_descriptions;
  $fur_type = $dog_fur;
  $pic_animal = $pic_dog;
  $fav_food = $dog_food;
  $fav_toy = $dog_toy;
}

$random = rand(0,3); // randoms between the different options
$description = $descriptions[$random];
$fur_type = $fur_type[$random];
$pic_animal = $pic_animal[$random];
$fav_food = $fav_food[$random];
$fav_toy = $fav_toy[$random];
?>

    <div class="container">

        <h1 class="text-center">Meet <?php echo $name = ucwords(strtolower($_POST['name'])); ?>!</h1>
         <div class="text-center" id="pet">When you are ready to see your pet... <br><button class="btn btn-primary">click here</button><br>


         <div class="text-center" id="photo">
             <p><img src="images/<?php echo $pic_animal ?>"></p>
           </div>
             <p class="text-center">Your new pet is named <?php echo ucwords(strtolower($name)) . " and " . $description;?>
<p class="text-center">Some facts about your new pet...</p>
<ul class="text-center">
  <img src="images/paw-print.svg" alt="paw print" width="30" height="30">
<li class="text-center">Fur type: <?php echo $fur_type;?></li>
  <img src="images/dog-bone.svg" alt="dog bone" width="30" height="30">
<li>Favourite food: <?php echo $fav_food;?></li>
<img src="images/dog-collar.svg" alt="dog collar" width="30" height="30">
<li>Favourite toy: <?php echo $fav_toy;?></li>
</ul>
</div><!-- end pet div -->
    </div><!-- container end -->

<?php

        require_once 'includes/footer.php';

        ?>

<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

<script>
window.onload = function() {
   $("p, ul, li").hide();
     $(".btn-primary").click(function(){
        $("p, ul, li").fadeIn(1000);
    });
};

</script>

<!-- references

maine coon cat image by Daan Wijngaard @ flickr.com
tabby cat image by Jeffrey Rolinc @ flickr.com
siamese cat image by kristina.havlovic @ flickr.com
tortoiseshell cat image by ambodavenz @flickr.com

paw icon by freepik @flaticon.com
collar icon by freepik @flaticon.com
dog bone icon by freepik @flaticon.com

chihuahua image by Jeffrey Pott @ flickr.com
sheltie image by Erica vanRavenhorst @ flickr.com
german shepard image by Nicolas Franasovic @ flickr.com
pug image by dogqueen101 @ flickr.com

-->


</body>
</html>

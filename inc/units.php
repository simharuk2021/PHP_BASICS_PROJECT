<?php
// Initialize variables to store conversion results
$weightResult = "";
$distanceResult = "";

// check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // check which button is clicked
  if (isset($_POST["weight_submit"])) {
    // weight conversion button is clicked
    $pounds = $_POST["weight"];
    
    // Validate input
    if (!is_numeric($pounds)) {
      $weightResult = "<p>Please enter a valid weight in pounds.</p>";
    } else {
      $lb_to_kg = 0.453592;
      $kilograms = $pounds * $lb_to_kg;
      $weightResult = "<p>Weight: $pounds lb = $kilograms kg</p>";
    }
  } elseif (isset($_POST["distance_submit"])) {
    // distance conversion button is clicked
    $miles = $_POST["distance"];
    
    // Validate input
    if (!is_numeric($miles)) {
      $distanceResult = "<p>Please enter a valid distance in miles.</p>";
    } else {
      $mile_to_km = 1.60934;
      $kilometers = $miles * $mile_to_km;
      $distanceResult = "<p>Distance: $miles miles = $kilometers km</p>";
    }
  }
}
?>

<!-- HTML form to get user input -->
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <label for="weight">Weight (in pounds):</label>
  <input type="text" id="weight" name="weight">

  <input class="btn-submit" type="submit" name="weight_submit" value="Convert Weight">
</form>


<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="distance">Distance (in miles):</label>
    <input type="text" id="distance" name="distance">
    
    <input class="btn-submit" type="submit" name="distance_submit" value="Convert Distance">
</form>

<!-- Display distance conversion result -->
<?php echo $distanceResult; ?>

<!-- Display weight conversion result -->
<?php echo $weightResult; ?>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<?php
// Path to the text file that will store the counter value
$counterFile = "counter.txt";

// Check if the counter file exists, if not, create it with an initial count of 0
if (!file_exists($counterFile)) {
    file_put_contents($counterFile, "0");
}

// Read the current count from the file
$counter = file_get_contents($counterFile);

// Increment the counter
$counter++;

// Save the new counter value back to the file
file_put_contents($counterFile, $counter);

// You can also display the counter on the page (optional)
echo "Page Hits: " . $counter;

// Serve the 1x1 pixel image (this will be loaded when the page is accessed)
header('Content-Type: image/png');
$image = imagecreate(1, 1); // Create a 1x1 pixel image
$bgColor = imagecolorallocate($image, 0, 0, 0); // Black background color
imagepng($image); // Output the image
imagedestroy($image); // Clean up
?>

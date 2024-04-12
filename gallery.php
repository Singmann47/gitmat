<?php 
include 'includes/header.php';
include 'function.php';

$files = glob('gallery/*');
$file = str_replace("gallery/", "", $files);
echo "<ul class=\"files-css\">";
foreach ($file as $value) {
    $selected = (isset($_GET['part']) && $_GET['part'] == $value) ? 'selected' : '';
    echo "<li class=\"$selected\"><a href=\"?part=$value\">$value</a></li>";
}
echo "</ul>";

if(isset($_GET['part'])) {
    $x = $_GET['part'];

    $images = glob("gallery/$x/*");
    echo "<ul class=\"image-css\">";
    foreach ($images as $value) {
        echo "<li><img src=\"$value\" width=300></li>";
    }
    echo "</ul>";
    echo "<p>Počet obrázkov v galérii: " . pocet_obrazkov("gallery/$x") . "</p>";
}
?>

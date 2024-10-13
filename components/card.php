<?php
function renderCard($title, $description, $image)
{
    echo "
    <div class='card'>
        <img src='$image' alt='$title'>

        
        <div class='card-location'>
        <div class='card-header'>
        <img src='src/icon/location-white.svg'></img>
        <p>$description</p>
        </div>
        </div>

        <h3>$title</h3>
    </div>
    ";
}
?>
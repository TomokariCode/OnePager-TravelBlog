<?php
function renderButton($title)
{
    echo "
    <div class='button button-header'>
        <div class='button-content'>
        <h4>$title</h4>
             <img src='src/icon/arrow-top-right.svg' alt='Pijl' class='button-arrow-icon'>
        </div>
    </div>
    ";
}
?>
<?php
// function to 'generate' a paragraph in html
function p($paragraph) {
    return '<p>' . $paragraph . '</p>';

}
echo p('Paragraph text');
echo p('Paragraph text 2' );
?>
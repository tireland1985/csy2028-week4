<?php
// generate html tags and relevant content
function html($tag, $content) {
    return '<' . $tag . '>' . $content . '</' . $tag . '>';
}

echo html('h1', 'Heading h1');
echo html('p', 'Paragraph text');
echo html('li', 'list item 1');
echo html('li', 'list item 2');
?>
<?php
//generate html tags, encapsulate <li>'s within a <ul>
function html($tag, $content) {
    return '<' . $tag . '>' . $content . '</' . $tag . '>';
}

echo html('h1', 'Heading');
echo html('p', 'Paragraph');

$list = html('li', 'List item 1') . html('li', 'List item 2');

echo html('ul', $list);
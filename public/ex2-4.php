<style>
.red { color:red;}
</style>
<?php
//generate html tags with an optional class element
function html($tag, $content, $class){
    if ($class != ''){
        return '<' . $tag . ' class="' . $class . '">' . $content . '</' . $tag . '>';
    }
    else {
        return '<' . $tag . '>' . $content . '</' . $tag . '>';
    }
}

echo html('p', 'Paragraph text', 'red');
echo html('p', 'Paragraph 2', '');
?>
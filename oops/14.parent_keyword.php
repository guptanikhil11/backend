<?php
class foo {
     function foofoo()
    {
        echo "parent ketword";
    }
}
class bar extends foo {
    function barbar()
    {
        parent::foofoo();
    }
}
$b = new bar;
$b->barbar();
?>

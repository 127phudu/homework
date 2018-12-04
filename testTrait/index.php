<?php
require_once "trait1.php";
require_once "trait2.php";


class useTrait {
    public function __construct()
    {
    }

    use trai1;
    use trai2;


}

$trait = new useTrait();
echo $trait->hello();
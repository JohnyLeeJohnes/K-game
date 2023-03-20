<?php

class Prdel
{
    private $kamarad;

    /**
     * @param $kamarad
     */
    public function __construct($kamarad)
    {
        $this->kamarad = $kamarad;
    }

    public function neco()
    {
        echo "prdel";
    }
}


$asd = new Prdel("asd");
$asd->neco();

try{
    var_dump($asd['kamarad']);
} catch (Exception $e){
    var_dump($e->getMessage());
}

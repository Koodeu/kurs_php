<?php



class someClass{


    const BAR = "BAR";
    private const FOO = "FOO";
    public const ZAZ = "ZAZ";
    public $bycz = "bycz";

    public function printConst(){
        echo self::FOO;
    }


}


$object = new someClass();

$object->printConst();


echo $object->bycz;
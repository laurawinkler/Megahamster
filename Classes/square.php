<?php
require_once 'AbstractRoom.php';

class Square extends AbstractRoom
{
    protected $length;
    protected $width;
    protected $height;

    /**
     * square constructor.
     * @param string $name
     * @param string $price
     * @param array $equipment
     * @param $length
     * @param $width
     * @param $height
     */
    public function __construct(string $name, string $price, array $equipment, $length, $width, $height)
    {
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;
        parent::__construct($name, $price,$equipment);
    }

    /**
     * @return mixed
     */
    public function getSizes()
    {
        return $this->length . 'cm x ' . $this->width . 'cm x ' . $this->height . 'cm';
    }
    public function getEquipmentAsString():string
    {
        $ar = $this->getEquipment();
        $text = "";
        foreach ($ar as $item){
            $text.= $item.'<br>';
        }
        return $text;
    }

    public function getArea(){

return $this->width * $this->length;
    }



    public function toHTML()
    { $name = $this->getName();
        $price = $this->getPrice();
        $equipment = $this->getEquipmentAsString();
        $sizes = $this->getSizes();
        $area = $this->getArea();
        $text = <<<ENDE
             <div class = "products">
            <h1>$name</h1>
            <p> Price: EUR $price</p>
            <p>Special Equipment:<br>
             $equipment
            <p>Sizes: $sizes</p>
            <p>Area: $area cm^2</p>
            </div>
ENDE;
        return $text;
    }
}
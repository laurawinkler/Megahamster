<?php
require_once 'AbstractRoom.php';

class Oktagon extends AbstractRoom
{

    protected $sidelength;

    /**
     * hexagon constructor.
     * @param string $name
     * @param float $price
     * @param array $equipment
     * @param float $sidelength
     */
    public function __construct(string $name, float $price, array $equipment, float $sidelength)
    {
        $this->sidelength = $sidelength;
        $this->name = $name;
        $this->price = $price;
        $this->equipment = $equipment;
        parent::__construct($name, $price, $equipment);
    }

    /**
     * @return float
     */
    public function getSizes()
    {
        return $this->sidelength . ' cm';
    }

    public function getArea(): float
    {
        return ($this->sidelength ** 2) * (2 * sqrt(2));
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
    public function toHTML()
    {
        $name = $this->getName();
        $price = $this->getPrice();
        $equipment = $this->getEquipmentAsString();
       $sidelength = $this->getSizes();
       $area = $this->getArea();
        $text = <<<ENDE
             <div class = "products">
            <h1>$name</h1>
            <p> Price: EUR $price</p>
            <p>Special Equipment:<br>
                $equipment</p>
            <p>Sidelength: $sidelength</p>
            <p>Area: $area cm^2</p>
            </div>
ENDE;
        return $text;
    }
}

<?php
require_once 'room.php';

class oktagon extends room
{

    protected $sidelength;

    /**
     * hexagon constructor.
     * @param $sidelength
     *
     */
    public function __construct(string $name, float $price, string $equipment, float $sidelength)
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


}

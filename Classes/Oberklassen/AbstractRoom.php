<?php
namespace WEBT1920\Megahamster\Oberklassen;
abstract class AbstractRoom
{
    protected $name;
    protected $price;
    protected $equipment;
    public function __construct(string $name, float $price, array $equipment)
    {
        $this->name = $name;
        $this->price = $price;
        $this->equipment = $equipment;
    }
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return array
     */
    public function getEquipment(): array
    {
        return $this->equipment;
    }

    /**
     * @return float
     */
    public function getPrice():float
    {
        return $this->price;
    }

    public function __toString()
    {
        return $this->getName() . ' ' . $this->getPrice();
    }

    abstract public function toHTML();
    abstract public function getArea();
    abstract public function getSizes();

}
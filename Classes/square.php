<?php
require_once 'room.php';

class square extends room
{
    protected $length;
    protected $width;
    protected $height;

    /**
     * square constructor.
     * @param $length
     * @param $width
     * @param $height
     */
    public function __construct(string $name, string $price, string $equipment, $length, $width, $height)
    {
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;
        $this->name = $name;
        $this->price = $price;
        $this->equipment = $equipment;
        parent::__construct($name, $price, $equipment);
    }

    /**
     * @return mixed
     */
    public function getSizes()
    {
        return $this->length . 'cm x ' . $this->width . 'cm x ' . $this->height . 'cm';
    }


    public function getArea()
    {
        return $this->width * $this->length;
    }

}
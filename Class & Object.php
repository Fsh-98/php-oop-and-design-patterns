<?php 
    
    class Color
    {
        public $color;

        public function display() : void
        {
            echo "Hello PHP \n";
        }

        public function setColor($color) : void
        {
            $this->color = $color;
        }

        public function getColor()
        {
            return $this->color; 
        }
    }

    $obj = new Color;

    $obj->display();

    $obj->setColor("Green");

    $color = $obj->getColor();

    echo $color;

?>
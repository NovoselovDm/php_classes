<?php


class GeoFigure
{
    protected string $name='';

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    public function getArea():float
    {
        return 0.0;

    }

    public function getPerimeters():float
    {
        return 0.0;

    }

    public function __toString():string
    {
        return  'Имя фигуры:'.$this->getName(). '<br/>' .
                'Площадь:'.$this->getArea(). '<br/>' .
                'Периметр:'.$this->getPerimeters(). '<br/>';
    }

}




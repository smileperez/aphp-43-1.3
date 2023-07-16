<?php

namespace Objects\Techs\Transport;

class Vehicle {
    private $type;
    private $vendor;
    private $model;
    private $release;
    private $color;
    private $mileage;
    
    //  Vehicle constructor
    //  @param string $type
    //  @param string $vendor
    //  @param string $model
    //  @param int $release
    //  @param string $color
    //  @param int $mileage
    public function __construct(string $type, string $vendor, string $model, int $release, string $color) {
        $this->type = $type;
        $this->vendor = $vendor;
        $this->model = $model;
        $this->release = $release;
        $this->color = $color;
        $this->mileage = 0;
    }

    // @param int $mileage
    public function setMileage(int $mileage): void {
        if ($mileage > 0) {
            $this->mileage = $mileage;
        }
    }

    // @return data
    private function getPassport() {
        return [
            $this->type,
            $this->vendor,
            $this->model,
            $this->release,
            $this->color,
            $this->mileage
        ];
    }

    // @echo data
    public function printPassport() {
        
        $type;
        $vendor;
        $model;
        $release;
        $color;
        $mileage;

        [$type,  $vendor, $model, $release, $color, $mileage] = self::getPassport();

        echo 
            'Тип ТС: ' . $type . PHP_EOL . 
            'Производитель ТС: ' . $vendor . PHP_EOL . 
            'Модель ТС: ' . $model . PHP_EOL . 
            'Год производства ТС: ' . $release . PHP_EOL . 
            'Цвет ТС: ' . $color . PHP_EOL . 
            'Пробег ТС: ' . $mileage . PHP_EOL;
    }

}
?>
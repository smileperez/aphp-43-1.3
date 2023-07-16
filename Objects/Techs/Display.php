<?php

namespace Objects\Techs;

class Display {
    private $type;
    private $vendor;
    private $model;
    private $resolution;
    private $inUse;
    
    //  Display constructor
    //  @param string $type
    //  @param string $vendor
    //  @param string $model
    //  @param string $resolution
    public function __construct(string $type, string $vendor, string $model, string $resolution){
        $this->type = $type;
        $this->vendor = $vendor;
        $this->model = $model;
        $this->resolution = $resolution;
        $this->inUse = false;
    }

    // @param bool $inUse
    public function useDisplay() {
        if ($this->inUse == false) {
            $this->inUse = true;
        } else {
            $this->inUse = false;
        }
    }

    // @return data
    public function statusDisplay() {
        if ($this->inUse == false) {
            return $this->vendor . ' ' . $this->model . ' не занят';
        } else {
            return $this->vendor . ' ' . $this->model . ' используется';
        }
    }

}
?>
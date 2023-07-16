<?php

namespace Objects\Humans;

class Student {
    private $name;
    private $surname;
    private $age;
    private $gpa;
    
    //  Student constructor
    //  @param string $name
    //  @param string $surname
    //  @param int $age
    //  @param float $gpa
    public function __construct(string $name, string $surname, int $age) {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
        $this->gpa = 0;
    }

    //  @param float $gpa
    public function setGPA(float $gpa): void {
        if (($gpa > 0) and ($gpa <= 5)) {
            $this->gpa = $gpa;
        } else {
            echo PHP_EOL;
            echo 'Ошибка: средняя оценка может быть от 0 до 5.';
        }
    }

    //  @return float
    public function getGPA(): float {
        return $this->gpa;
    }

    // @return string
    public function getName(): string {
        return $this->name;
    }
}
?>
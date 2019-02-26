<?php

class Teacher extends ModelAbstract
{
    public $id;
    public $firstName;
    public $lastName;
    public $lesson;
    public $class;

    public function __construct(string $firstName, string $lastName, string $lesson, string $class, int $id = null)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->lesson = $lesson;
        $this->class = $class;
        $this->id = $id;

    }

    public function validate(): bool
    {
        if (iconv_strlen($this->firstName) > 50 || iconv_strlen($this->firstName) < 2) {
            return false;
        }
        if (iconv_strlen($this->lastName) > 50 || iconv_strlen($this->lastName) < 2) {
            return false;
        }
        if (iconv_strlen($this->lesson) > 15 || iconv_strlen($this->lesson) < 2) {
            return false;
        }
        if (iconv_strlen($this->class) > 15 || iconv_strlen($this->class) < 1) {
            return false;
        }
        return true;
    }
}
<?php

class styleString
{
    private $str;
    public $uglify = false;

    public function __construct($str)
    {
        $this->str = $str;
    }

    public function getStr()
    {
        return $this->str;
    }

    public function setStr($data)
    {
        $this->str = $data;
    }



    public function bold()
    {
        switch ($this->uglify) {
            case true:
                $this->setStr('<b>'.$this->getStr().'</b>');
                break;
            default:
                $this->setStr('<b>'.strip_tags($this->getStr()).'</b>');
                break;
        }
    }
    public function italic()
    {
        switch ($this->uglify) {
            case true:
                $this->setStr('<em>'.$this->getStr().'</em>');
                break;
            default:
                $this->setStr('<em>'.strip_tags($this->getStr()).'</em>');
                break;
        }
    }
    public function capitalise()
    {
        switch ($this->uglify) {
            case true:
                $this->setStr('<span class="capitalise">'.$this->getStr().'</span>');
                break;
            default:
                $this->setStr('<span class="capitalise">'.strip_tags($this->getStr()).'</span>');
                break;
        }
    }
    public function underline()
    {
        switch ($this->uglify) {
            case true:
                $this->setStr('<u>'.$this->getStr().'</u>');
                break;
            default:
                $this->setStr('<u>'.strip_tags($this->getStr()).'</u>');
                break;
        }
    }

    public function uglify()
    {
        $this->uglify=true;
        $this->setStr(strip_tags($this->getStr()));
        $this->bold();
        $this->italic();
        $this->underline();
    }
}

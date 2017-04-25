<?php


class styleString
{
    private $str;

    public function __construct($str)
    {
        $this->str = $str;
    }

    public function getStr()
    {
        return $this->str;
    }



    public function bold()
    {
        echo '<b>'.$this->getStr().'</b>';
    }
    public function italic()
    {
        echo '<em>'.$this->getStr().'</em>';
    }
    public function underline()
    {
        echo '<u>'.$this->getStr().'</u>';
    }
    public function capitalise()
    {
        echo '<span class="capitalise">'.$this->getStr().'</span>';
    }
    public function uglify()
    {
        echo '<span class="ugly">'.$this->getStr().'</span>';
    }
}

<?php


namespace App\classes;


class Word
{
    protected $firstNumber;
    protected $lastNumber;
    protected $temp1;
    protected $temp2;

  public function __construct($data=null)
  {
      if ($data)
      {
        $this->firstNumber = $data['first_num'];
        $this->lastNumber  = $data['last_num'];
        $this->temp1       = $data['type1'];
        $this->temp2       = $data['type2'];

      }

  }

    public function index ()
  {
     //continue....
  }
}
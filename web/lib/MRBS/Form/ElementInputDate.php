<?php

namespace MRBS\Form;

class ElementInputDate extends ElementInput
{

  public function __construct()
  {
    parent::__construct();
    $this->setAttribute('type', 'date');
  }
 
}
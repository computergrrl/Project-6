<?php

require __DIR__ .'/../classes/ListingBasic.php';

use PHPUnit\Framework\TestCase;

class ListingBasicStatusTest extends TestCase
{

  public function testStatus()
  {

  //Create $data array to pass to object upon instantiation
            $data = [
               'id' => '222',
            'title' => 'The Test'
            ];

    $listing = new ListingBasic($data);
//call the getStatus method
      $status = $listing->getStatus();

//does getStatus method return value equal to 'basic' ?
      $this->assertEquals($status , 'basic');

  }


}

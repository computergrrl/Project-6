<?php

require __DIR__ .'/../classes/ListingBasic.php';
require __DIR__ .'/../classes/ListingPremium.php';

use PHPUnit\Framework\TestCase;

class ListingPremiumStatusTest extends TestCase
{

  public function testStatus()
  {

  //Create $data array to pass to object upon instantiation
            $data = [
               'id' => '222',
            'title' => 'The Test'
            ];

    $listing = new ListingPremium($data);
//call the getStatus method
      $status = $listing->getStatus();

//does getStatus method return value equal to 'premium' ?
      $this->assertEquals($status , 'premium');

  }


}

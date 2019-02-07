<?php

require __DIR__ .'/../classes/ListingBasic.php';
require __DIR__ .'/../classes/ListingPremium.php';

use PHPUnit\Framework\TestCase;

class ListingPremiumStatusTest extends TestCase
{

  public function testStatus()
  {

/*create an array to pass to ListingBasic Object*/
            $data = [
               'id' => '222',
            'title' => 'The Test'
            ];

    $listing = new ListingPremium($data);
//call the getStatus method
      $status = $listing->getStatus();

//does getStatus method return value equal to 'basic' ?
      $this->assertEquals($status , 'premium');

  }


}

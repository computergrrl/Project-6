<?php

require __DIR__ .'/../classes/ListingBasic.php';

use PHPUnit\Framework\TestCase;

class ListingBasicIsObjectCreatedTest extends TestCase
{

  public function testIsObject()
  {
  //Create $data array to pass to object upon instantiation
      $data = [
        'id' => '38',
        'title' => 'Amber was here'
      ];

      $listing = new ListingBasic($data);

  //if listing is an object then assert true
      $this->assertTrue(is_object($listing));
  }

}

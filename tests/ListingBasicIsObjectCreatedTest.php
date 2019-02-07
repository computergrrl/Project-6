<?php

require __DIR__ .'/../classes/ListingBasic.php';

use PHPUnit\Framework\TestCase;

class ListingBasicIsObjectCreatedTest extends TestCase
{

  public function testIsObject()
  {
      $data = [
        'id' => '38',
        'title' => 'Amber was here'
      ];

      $listing = new ListingBasic($data);
      $this->assertEquals($listing, new ListingBasic($data));
  }

}

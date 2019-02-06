<?php

require __DIR__ .'/../classes/ListingBasic.php';

use PHPUnit\Framework\TestCase;

class ListingBasicStatusTest extends TestCase
{


  public function testStatus()
  {
      $data = [
      'id' => '18',
      'title' => 'The Test'
      ];

    $listing = new ListingBasic($data);

      $status = $listing->getStatus();
      $this->assertEquals($status , 'basic');

  }

}

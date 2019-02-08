<?php

require __DIR__ .'/../classes/ListingBasic.php';
require __DIR__ .'/../classes/ListingPremium.php';

use PHPUnit\Framework\TestCase;

class ListingPremiumGetDescriptionTest extends TestCase
{

public function testGetDescription()
{
    //Create $data array to pass to object upon instantiation
    $data = [
      'id' => '96',
      'title' => 'This is a test',
      'description' => 'This is a test of the emergency broadcast system',
        ];

      $listing = new ListingPremium($data);

    //does getDescription method return value that equals $data['description']?
      $this->assertEquals(
        'This is a test of the emergency broadcast system',
        $listing->getDescription()
      );
}

}

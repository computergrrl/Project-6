<?php

require __DIR__ .'/../classes/ListingBasic.php';
require __DIR__ .'/../classes/ListingPremium.php';

use PHPUnit\Framework\TestCase;

class ListingPremiumGetDescriptionTest extends TestCase
{

public function testGetDescription()
{
    $data = [
      'id' => '96',
      'title' => 'This is a test',
      'description' => 'This is a test of the emergency broadcast system',
        ];

      $listing = new ListingPremium($data);

      $this->assertEquals(
        'This is a test of the emergency broadcast system',
        $listing->getDescription()
      );
}

}

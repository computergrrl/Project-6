<?php

require __DIR__ .'/../classes/ListingBasic.php';
require __DIR__ .'/../classes/ListingPremium.php';
require __DIR__ .'/../classes/ListingFeatured.php';

use PHPUnit\Framework\TestCase;

class ListingFeaturedGetCocTest extends TestCase
{

  public function testGetCoc()
  {
      //Create $data array to pass to object upon instantiation
      $data = [
        'id' => '96',
        'title' => 'This is a test',
        'coc' => 'Have faith. Gather hope. Scatter love.',
          ];

        $listing = new ListingFeatured($data);

        //does getCoc method return value that equals $data['coc']?
        $this->assertEquals(
          'Have faith. Gather hope. Scatter love.',
          $listing->getCoc()
        );
  }


}

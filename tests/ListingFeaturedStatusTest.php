<?php

require __DIR__ .'/../classes/ListingBasic.php';
require __DIR__ .'/../classes/ListingPremium.php';
require __DIR__ .'/../classes/ListingFeatured.php';

use PHPUnit\Framework\TestCase;

class ListingFeaturedStatusTest extends TestCase
{

  public function testStatus()
  {

/*create an array to pass to ListingBasic Object*/
            $data = [
               'id' => '222',
            'title' => 'The Test'
            ];

    $listing = new ListingFeatured($data);
//call the getStatus method
      $status = $listing->getStatus();

//does getStatus method return value equal to 'featured' ?
      $this->assertEquals($status , 'featured');

  }


}

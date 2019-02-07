<?php

require __DIR__ .'/../classes/ListingBasic.php';

use PHPUnit\Framework\TestCase;

class ListingBasicToArrayMethodTest extends TestCase
{

  public $data = [
      'image' => '',
      'id' => '222',
      'title' => 'Amber is a rock star',
      'website' => 'http://www.example-website.com',
      'email' => 'anonymous@email.com',
      'twitter' => 'RandomPerson',
      'status' => 'basic'
  ];

  public function testToArrayMethod()
  {
    $data = $this->data;

    $listing = new ListingBasic($data);

    $this->assertEquals($data, $listing->toArray());


  }


}

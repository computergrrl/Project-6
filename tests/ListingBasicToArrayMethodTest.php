<?php

require __DIR__ .'/../classes/ListingBasic.php';

use PHPUnit\Framework\TestCase;

class ListingBasicToArrayMethodTest extends TestCase
{

  /*Create $data array as property that all tests can access */
  public $data = [

      'id' => '222',
      'title' => 'Amber is a rock star',
      'website' => 'http://www.example-website.com',
      'email' => 'anonymous@email.com',
      'twitter' => '@RandomPerson',

  ];

  public function testToArrayMethod()
  {
    $data = $this->data;

    $listing = new ListingBasic($data);

    //set result of toArray method to the variable '$array'
    $array = $listing->toArray();

    //does each $array value equal the corresponding $data value?
    $this->assertEquals($data['id'], $array['id']);
    $this->assertEquals($data['title'], $array['title']);
    $this->assertEquals($data['website'], $array['website']);
    $this->assertEquals($data['email'], $array['email']);
    $this->assertEquals($data['twitter'], '@' .$array['twitter']);


  }


}

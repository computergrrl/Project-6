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
      'twitter' => '@RandomPerson',
      'status' => 'basic'
  ];

  public function testToArrayMethod()
  {
    $data = $this->data;

    $listing = new ListingBasic($data);
    $array = $listing->toArray();

    $this->assertContains($data['id'], $array);
    $this->assertContains($data['title'], $array);
    $this->assertContains($data['website'], $array);
    $this->assertContains($data['email'], $array);
    $this->assertContains($data['twitter'], $array);


  }


}

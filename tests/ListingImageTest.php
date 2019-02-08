<?php
/**
 * Created by PhpStorm.
 * User: alena
 * Date: 2019-02-01
 * Time: 14:17
 */
require __DIR__ .'/../classes/ListingBasic.php';

use PHPUnit\Framework\TestCase;

class ListingImageTest extends TestCase
{
    public function testNoImage()
    {
      //Create $data array to pass to object upon instantiation
        $data = [
            'id' => 1,
            'title' => 'Test Title',
            'image' => '',
        ];
        $listing = new ListingBasic($data);
        $this->assertFalse($listing->getImage());

    }
    public function testFullPathImage()
    {
      //Create $data array to pass to object upon instantiation
        $data = [
            'id' => 1,
            'title' => 'Test Title',
            'image' => 'https://www.cascadiaphp.com/images/logo.svg',
        ];
        $listing = new ListingBasic($data);
        $this->assertEquals($data['image'], $listing->getImage());

    }
    public function testBuildPathImage()
    {
      //Set BASE_URL to root directory
      define("BASE_URL","/");

      //Create $data array to pass to object upon instantiation
        $data = [
            'id' => 1,
            'title' => 'Test Title',
            'image' => 'images/listings/1.png',
        ];
        $listing = new ListingBasic($data);
        $this->assertEquals(BASE_URL .'/'.$data['image'], $listing->getImage());
    }
}

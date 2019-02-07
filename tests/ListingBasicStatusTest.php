<?php

require __DIR__ .'/../classes/ListingBasic.php';

use PHPUnit\Framework\TestCase;

class ListingBasicStatusTest extends TestCase
{
  public $data = [
      'id' => '222',
      'title' => 'Amber is a rock star',
      'website' => 'www.example-website.com',
      'email' => 'anonymous@email.com',
      'twitter' => '@RandomPerson',
  ];

//   public function testStatus()
//   {
//
// /*create an array to pass to ListingBasic Object*/
//             $data = [
//                'id' => '18',
//             'title' => 'The Test'
//             ];
//
//     $listing = new ListingBasic($data);
// //call the getStatus method
//       $status = $listing->getStatus();
//
// //does getStatus method return value equal to 'basic' ?
//       $this->assertEquals($status , 'basic');
//
//   }

  public function testTwitter()
  {

/*create an array to pass to ListingBasic Object*/

    $listing = new ListingBasic($data);
//call the getStatus method
      $status = $listing->getTwitter();

//does getStatus method return value equal to 'basic' ?
      $this->assertEquals($status , 'basic');

  }

}

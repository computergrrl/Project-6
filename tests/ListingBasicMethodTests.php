<?php
/*Write tests for the ListingBasic class to ensure that the get method for each property is returning the expected results: id, title, website, email, twitter. */

require __DIR__ .'/../classes/ListingBasic.php';

use PHPUnit\Framework\TestCase;

class ListingBasicMethodTests extends TestCase
{

/*Create $data array as property that all tests can access */
public $data = [
    'id' => '222',
    'title' => 'Amber is a rock star',
    'website' => 'http://www.example-website.com',
    'email' => 'anonymous@email.com',
    'twitter' => '@RandomPerson',
];

  //test getId()
  public function testGetIdMethod()
  {
      $listing = new ListingBasic($this->data);
      $id = $this->data['id'];
      $this->assertTrue($listing->getID() == $id);
  }

//test getTitle()
  public function testGetTitleMethod()
  {
      $listing = new ListingBasic($this->data);
      $title = $this->data['title'];
      $this->assertTrue($listing->getTitle() == $title);
  }

//test getWebsite()
  public function testGetWebsiteMethod()
  {
    $listing = new ListingBasic($this->data);
    $website = $this->data['website'];
    $this->assertTrue($listing->getWebsite() == $website);
  }

//test getEmail()
  public function testGetEmailMethod()
  {
    $listing = new ListingBasic($this->data);
    $email = $this->data['email'];
    $this->assertTrue($listing->getEmail() == $email);
  }

//test getTwitter()
  public function testGetTwitterMethod()
  {
    $listing = new ListingBasic($this->data);
    $twitter = $this->data['twitter'];
    $this->assertTrue('@' . $listing->getTwitter() == $twitter);
  }



}

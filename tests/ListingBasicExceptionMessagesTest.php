<?php

require __DIR__ .'/../classes/ListingBasic.php';

use PHPUnit\Framework\TestCase;

class ListingBasicExceptionMessagesTest extends TestCase
{
    public function testException1()
    {
      /*create an array to pass to ListingBasic Object*/
          $data = [];
          $message = $this->expectExceptionMessage('Unable to create a listing, data unavailable');

          $listing = new ListingBasic($data);

          // $this->expectOutputString('foo');
    }

    public function testException2()
    {
        //exclude 'id' element so as to throw correct exception
              $data = [

                 'title' => 'The Test'
              ];

          $message = $this->expectExceptionMessage('Unable to create a listing, invalid id');

          $listing = new ListingBasic($data);

    }

    public function testException3()
    {
          //exclude 'title' element so as to throw correct exception
                $data = [
                   'id' => '99',

                ];

            $message = $this->expectExceptionMessage('Unable to create a listing, invalid title');

            $listing = new ListingBasic($data);



    }

}

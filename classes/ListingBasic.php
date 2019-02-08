<?php

class ListingBasic
{
    private $id, $title, $website, $email, $twitter, $image;
    protected $status = 'basic';

    /**
     * ListingBasic constructor.
     * @param array $data Initial data to set from user or database
     */
    public function __construct($data = [])
    {
        if (empty($data)) {
            throw new Exception('Unable to create a listing, data unavailable');
        }
        $this->setValues($data);
    }

    /**
     * Calls individual methods to set values for object properties.
     * @param array $data Data to set from user or database
     */
    public function setValues($data = []) {
        if (!isset($data['id'])) {
            throw new Exception('Unable to create a listing, invalid id');
        }
        $this->setId($data['id']);
        if (!isset($data['title'])) {
            throw new Exception('Unable to create a listing, invalid title');
        }
        $this->setTitle($data['title']);
        if (isset($data['website'])) {
            $this->setWebsite($data['website']);
        }
        if (isset($data['email'])) {
            $this->setEmail($data['email']);
        }
        if (isset($data['twitter'])) {
            $this->setTwitter($data['twitter']);
        }
        if (isset($data['status'])) {
            $this->setStatus($data['status']);
        }
        if (isset($data['image'])) {
            $this->setImage($data['image']);
        }
    }

    /**
     * Gets the local property $id
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Cleans up and sets the local property $id
     * @param int $value Data may be from database or user
     */
    public function setId($value)
    {
        $this->id = trim(filter_var($value, FILTER_SANITIZE_NUMBER_INT));
    }

    /**
     * Gets the local property $title
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Cleans up and sets the local property $title
     * @param string $value to set property
     */
    public function setTitle($value)
    {
        $this->title = trim(filter_var($value, FILTER_SANITIZE_STRING));
    }

    /**
     * Gets the local property $website
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Cleans up and sets the local property $website
     * @param string $value to set property
     */
    public function setWebsite($value)
    {
        $value = trim(filter_var($value, FILTER_SANITIZE_STRING));
        if (empty($value)) {
            $this->website = null;
            return;
        }
        if (substr($value, 0, 4) != 'http') {
            $value = 'http://' . $value;
        }
        $this->website = $value;
    }

    /**
     * Gets the local property $email
     * @return string email address
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Cleans up and sets the local property $email
     * @param string $value to set property
     */
    public function setEmail($value)
    {
        $this->email = trim(filter_var($value, FILTER_SANITIZE_STRING));
    }

    /**
     * Gets the local property $twitter
     * @return string
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * Cleans up and sets the local property $twitter
     * @param string $value to set property
     */
    public function setTwitter($value)
    {
        $this->twitter = str_replace('@', '', trim(filter_var($value, FILTER_SANITIZE_STRING)));
    }

    /**
     * Gets the local property $status
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Cleans up and sets the local property $status
     * @param string $value to set property
     */
    public function setStatus($value)
    {
        if (empty($value)) {
            $this->status = 'basic';
            return;
        }
        $this->status = trim(filter_var($value, FILTER_SANITIZE_STRING));
    }

  //added a getImage method
    public function getImage()
    {
          /*if image is set return that value. Otherwise if no
          image is set (null value) then return false */

            if(isset($this->image)) {
                return $this->image;
            } else {
                return false;
            }
    }

    public function setImage($value)
    {
      /*I got a lot of this method's code from the getWebsite method
       and changed a couple of variables */

          $value = trim(filter_var($value, FILTER_SANITIZE_STRING));
          if (empty($value)) {
              $this->image = null;
              return false;
          }

          /* If the first 4 characters of image value are not 'http'
          then assume $value is a local file and add BASE_URL
           directory to beginning of $value so that file can be located
          in BASE_URL directory  */
          if (substr($value, 0, 4) != 'http') {
              $this->image  =  BASE_URL . '/' . $value;

          /*Elseif first 4 characters of image value are 'http' then assume
          $value is a web link and just return that value */
            } elseif (substr($value, 0, 4) == 'http') {
          $this->image = $value;
        }
        return $this->image;
  }




    /**
     * Convert the current object to an associative array of parameters
     * @return array of object parameters
     */
    public function toArray()
    {
        return get_object_vars($this);
    }
}

<?php
  include "../chapter7/movie.php";
  class awardWinMov extends movie {
    private $award;

    public function __construct($pId, $pTitle, $pRentalPrice, $Award){
        parent::__construct($pId, $pTitle, $pRentalPrice,);
        $this->award = $Award;
    }
    public function recommend($country){
        switch ($this->award){
            case "Best Picture":
                $others = "The Rail";
                break;
            case "Best Actor":
                $others = "1234";
                break;
            default:
                $others = "And so it begins";        
        }
        return 
        "you might also like:<br>".
        "<br>Movie Title = ".$others.
        "<br>Rental Price = ".$this->conversion($country);
    }
    public function displayHeading($tag) {
        $baseMsg = parent::displayHeading($tag);
        return $baseMsg.$this->award;
    }
  }
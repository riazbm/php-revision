<?php
  include "movie.php";
  class awardWinMovphp extends movie {
    private $award;

    public function __construct($pId, $pTitle, $pRentalPrice, $Award){
        parent::__construct($pId, $pTitle, $pRentalPrice,);
        $this->award = $pAward;

    }
  }
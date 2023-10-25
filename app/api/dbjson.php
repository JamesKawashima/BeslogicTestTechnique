<?php

namespace api;
use Controllers\BaseController;

class DbJson extends BaseController{

    private $house;
    private $reservation;

    function __construct(){
        $this->house = new \models\House();
        $this->reservation = new \models\Reservation();
    }

    function getJson($dataNeeded){
        if ($dataNeeded == 'housesFull') { 
            header("Content-Type: application/json");
            return json_encode($this->house->getAll());
        }
<<<<<<< Updated upstream
=======
        else if ($dataNeeded == 'reservations') { 
            header("Content-Type: application/json");
            return json_encode($this->reservation->getAll());
        }
>>>>>>> Stashed changes
    }
    function getJsonWithId($dataNeeded, $id){
        if ($dataNeeded == 'house') { 
            header("Content-Type: application/json");
            return json_encode($this->house->getHouseById($id));
        }
        else if ($dataNeeded == 'houseAmenity') { 
            header("Content-Type: application/json");
            return json_encode($this->house->getAllHouseAmenities($id));
        }
<<<<<<< Updated upstream
        else if ($dataNeeded == 'reservation') { 
            header("Content-Type: application/json");
            return json_encode($this->reservation->getAll($id));
        }
        else {
            return "goofyhaha";
=======
        else {
            return "no data sent";
>>>>>>> Stashed changes
        }
    }
}
?>
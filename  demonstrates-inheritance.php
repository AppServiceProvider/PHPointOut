<?php 
//  demonstrates an "inheritance" relationship between the BathHouse class and the House class.
class House {
    protected $rooms;
    public function __construct($rooms) {
        $this->rooms = $rooms;
    }
    public function describe() {
        echo "This house has {$this->rooms} rooms.\n";
    }
}
class BathTube {
    public function fillWater() {
        echo "Filling the bathtub with water.\n";
    }
    public function drainWater() {
        echo "Draining the water from the bathtub.\n";
    }
}
class BathHouse extends House {
    private $bathtub;
    public function __construct($rooms, BathTube $bathtub) {
        parent::__construct($rooms);
        $this->bathtub = $bathtub;
    }
    public function useBathroom() {
        echo "Using the bathroom in the bathhouse.\n";
        $this->bathtub->fillWater();
        $this->bathtub->drainWater();
    }
}
// Example usage
$bathtub = new BathTube();
$bathHouse = new BathHouse(2, $bathtub);

$bathHouse->describe(); // Outputs: This house has 2 rooms.
$bathHouse->useBathroom(); 
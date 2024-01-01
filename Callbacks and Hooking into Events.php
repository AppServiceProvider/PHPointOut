<?php 
class Button {
    public function addEventListener($event, $callback) {
        // Simulated event handling for demonstration purposes
        if ($event == 'click') {
            $callback();
        }
    }
}

// Create an instance of the Button class
$button = new Button();

// Add event listener to the button
$button->addEventListener('click', function() use ($button) {
    echo "Button clicked!";
    // You can now access the $button variable within this function
});
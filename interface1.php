<?php 
// Define a common interface for office devices
interface OfficeDevice {
    public function turnOn();
    public function turnOff();
    public function printDocument($document);
}

// Implement the OfficeDevice interface for a Printer
class Printer implements OfficeDevice {
    public function turnOn() {
        echo "Printer is turning on.\n";
    }

    public function turnOff() {
        echo "Printer is turning off.\n";
    }

    public function printDocument($document) {
        echo "Printing document: $document\n";
    }
}

// Implement the OfficeDevice interface for a Scanner
class Scanner implements OfficeDevice {
    public function turnOn() {
        echo "Scanner is turning on.\n";
    }

    public function turnOff() {
        echo "Scanner is turning off.\n";
    }

    public function printDocument($document) {
        echo "Scanning document: $document\n";
    }
}

// Implement the OfficeDevice interface for a Fax Machine
class FaxMachine implements OfficeDevice {
    public function turnOn() {
        echo "Fax machine is turning on.\n";
    }

    public function turnOff() {
        echo "Fax machine is turning off.\n";
    }

    public function printDocument($document) {
        echo "Sending document via fax: $document\n";
    }
}

// Client code
$printer = new Printer();
$scanner = new Scanner();
$faxMachine = new FaxMachine();

$printer->turnOn();
$printer->printDocument("Sales Report");

$scanner->turnOn();
$scanner->printDocument("Contract Agreement");

$faxMachine->turnOn();
$faxMachine->printDocument("Purchase Order");
 
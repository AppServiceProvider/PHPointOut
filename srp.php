<?php 
/*
// Single Responsibility Principle
class Report { // Shouldn't do
    public function generate() {
        // generating report
    }

    public function saveToFile($filename) {
        // save report to file
    }
}
*/
class Report { // Should do
    public function generate() {
        // generating report
    }
}

class ReportSaver {
    public function saveToFile(Report $report, $filename) {
        // save report to file
    }
}
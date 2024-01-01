<?php 
// Define an Employee interface
interface Employee {
    public function calculateSalary();
}
// Implement the Employee interface for a FullTimeEmployee
class FullTimeEmployee implements Employee {
    private $hourlyRate;
    private $hoursWorked;
    public function __construct($hourlyRate, $hoursWorked) {
        $this->hourlyRate = $hourlyRate;
        $this->hoursWorked = $hoursWorked;
    }
    public function calculateSalary() {
        return $this->hourlyRate * $this->hoursWorked;
    }
}
// Implement the Employee interface for a Freelancer
class Freelancer implements Employee {
    private $hourlyRate;
    private $hoursWorked;
    public function __construct($hourlyRate, $hoursWorked) {
        $this->hourlyRate = $hourlyRate;
        $this->hoursWorked = $hoursWorked;
    }
    public function calculateSalary() {
        return $this->hourlyRate * $this->hoursWorked;
    }
}
// Client code
$fullTimeEmployee = new FullTimeEmployee(20, 160); // $20 per hour, 160 hours worked
$freelancer = new Freelancer(30, 80); // $30 per hour, 80 hours worked

echo "Full-Time Employee Salary: $" . $fullTimeEmployee->calculateSalary() . "\n";
echo "Freelancer Salary: $" . $freelancer->calculateSalary() . "\n";

// ==============================================================




interface PaymentGatewayInterface {
    public function charge($amount, $details);
    public function refund($transactionId);
}

// Concrete classes implementing the interface
class StripeGateway implements PaymentGatewayInterface {
    public function charge($amount, $details) {
        // Implementation for charging via Stripe
    }

    public function refund($transactionId) {
        // Implementation for refunding via Stripe
    }
}

class PayPalGateway implements PaymentGatewayInterface {
    public function charge($amount, $details) {
        // Implementation for charging via PayPal
    }

    public function refund($transactionId) {
        // Implementation for refunding via PayPal
    }
}

// Code using the interface
class OrderProcessor {
    private $paymentGateway;

    public function __construct(PaymentGatewayInterface $paymentGateway) {
        $this->paymentGateway = $paymentGateway;
    }

    public function processOrder($amount, $details) {
        // ... order processing logic ...
        $this->paymentGateway->charge($amount, $details);
    }
}
$stripeGateway = new StripeGateway();
$orderProcessor = new OrderProcessor($stripeGateway);
$orderProcessor->processOrder(100, array('description' => 'Product purchase'));

// To switch to PayPal, simply create a PayPalGateway object and inject it:
$paypalGateway = new PayPalGateway();
$orderProcessor = new OrderProcessor($paypalGateway);

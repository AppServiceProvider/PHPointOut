<?php 
/*
class Authenticator {
    function authenticate($user, $pass, $external=false, $externalService= false){
        if($external == true && "google"== $externalService){
            $ga= new GoogleAuthenticator();
            $ga->authenticate;
        }elseif{
            $ga= new GithubAuthenticator();
            $ga->authenticate;
        }else{
            $ga= new LocatAuthenticator();
            $ga->authenticate;
        }
    }
}
*/



interface AuthenticatorInterface {
    public function authenticate($user, $pass);
}

// Implement specific authenticator classes
class GoogleAuthenticator implements AuthenticatorInterface {
    public function authenticate($user, $pass) {
        // Google authentication logic
        echo "Authenticated with Google.\n";
    }
}

class GithubAuthenticator implements AuthenticatorInterface {
    public function authenticate($user, $pass) {
        // GitHub authentication logic
        echo "Authenticated with GitHub.\n";
    }
}

class LocalAuthenticator implements AuthenticatorInterface {
    public function authenticate($user, $pass) {
        // Local authentication logic
        echo "Authenticated locally.\n";
    }
}










// Modify the Authenticator class to use the interface
class Authenticator {
    private $authenticator;

    public function setAuthenticator(AuthenticatorInterface $authenticator) {
        $this->authenticator = $authenticator;
    }

    public function authenticate($user, $pass) {
        if (!$this->authenticator) {
            throw new Exception("No authenticator set.");
        }
        $this->authenticator->authenticate($user, $pass);
    }
}
$authenticator = new Authenticator();

// Select the appropriate authenticator based on the service
$service = 'google'; // This can come from a request or config

if ($service === 'google') {
    $authenticator->setAuthenticator(new GoogleAuthenticator());
} elseif ($service === 'github') {
    $authenticator->setAuthenticator(new GithubAuthenticator());
} else {
    $authenticator->setAuthenticator(new LocalAuthenticator());
}
$authenticator->authenticate('username', 'password');
<?php
interface Notification{
    public function send(string $title, string $message);
}
class EmailNotification implements Notification{
    private $adminEmail;
    public function __construct(string $adminEmail){
        $this->adminEmail = $adminEmail;
    }
    public function send(string $title, string $message): void{
        mail($this->adminEmail, $title, message: $message);
        echo $title . $this->adminEmail. $message;
    }
}
class SlackApi{
    private $login;
    private $apiKey;
    public function __construct(string $login, string $apiKey){
        $this->login = $login;
        $this->apiKey = $apiKey;
    }
    public function logIn(): void{
        echo $this->login;
    }
    public function sendMessage(string $chatId, string $message): void{
        echo $chatId .$message;
    }
}

class SlackNotification implements Notification{
    private $slack;
    private $chatId;
    public function __construct(SlackApi $slack, string $chatId){
        $this->slack = $slack;
        $this->chatId = $chatId;
    }
    public function send(string $title, string $message): void{
        $this->slack->logIn();
        $this->slack->sendMessage($this->chatId, "Message");
    }
}

function clientCode(Notification $notification){
    $notification->send("Title","Message");
}

$notification = new EmailNotification("AdminEmail@example.com");
clientCode($notification);

$slackApi = new SlackApi("example.com", "XXXXXXXX");
$notification = new SlackNotification($slackApi, "Chat Id");
clientCode($notification);
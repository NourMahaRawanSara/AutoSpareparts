<?php

abstract class Client {
    public $name;
    abstract function send(Message $subject_in);
}

abstract class Message {
    abstract function addClient(Client $c);
    abstract function removeClient(Client $c);
    abstract function notify();
}

function writeln($line_in) {
    echo $line_in."<br/>";
}

class NormalClient extends Client {

    public function __construct($name) {
        $this->name = $name;
    }
    public function send(Message $subject) {
        writeln(' Dear '.$this->name);
        writeln(' '.$subject->get_Text());
    }
}
class PremiumClient extends Client {

    public function __construct($name) {
        $this->name = $name;
    }
    public function send(Message $subject) {
        writeln(' Dear Mister. '.$this->name);
        writeln(' '.$subject->get_Text());
    }
}

class clientGroup extends Message {
    private $text = NULL;
    private $clients = array();
    function addClient(Client $c) {
        //could also use array_push($this->clients, $c);
        $this->clients[] = $c;
    }
    function removeClient(Client $c) {
        //$key = array_search($c, $this->clients);
        foreach($this->clients as $okey => $oval) {
            if ($oval === $c) {
                unset($this->clients[$okey]);
            }
        }
    }
    function notify() {
        foreach($this->clients as $obs) {
            $obs->send($this);
        }
    }
    function sendEmail($newFavorites) {
        $this->text = $newFavorites;
        $this->notify();
    }
    function get_Text() {
        return $this->text;
    }
}

writeln('BEGIN TESTING OBSERVER PATTERN');
writeln('');

$patternGossiper = new clientGroup();
$patternGossipFan = new PremiumClient('ahmed');
$patternGossipFan1 = new NormalClient('youssef');
$patternGossipFan2 = new NormalClient('amr');
$patternGossiper->addClient($patternGossipFan);
$patternGossiper->addClient($patternGossipFan1);
$patternGossiper->addClient($patternGossipFan2);
$patternGossiper->sendEmail('welcome to observer pattern');
$patternGossiper->sendEmail('welcome again');
$patternGossiper->removeClient($patternGossipFan);
$patternGossiper->notify();
writeln('END TESTING OBSERVER PATTERN');
$patternGossiper->sendEmail('hello');


?>
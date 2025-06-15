<?php

class Book {
// TODO: Add properties as Private
private $title;
private $availableCopies;

public function __construct($title, $availableCopies) {
    // TODO: Initialize properties
    $this->title = $title;
    $this->availableCopies = $availableCopies;
}

 // TODO: Add getTitle method
 public function getTitle() {
    return $this->title;
}

// TODO: Add getAvailableCopies method
public function getAvailableCopies() {
    return $this->availableCopies;
}


}

?>

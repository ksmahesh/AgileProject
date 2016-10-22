<?php
include_once 'cards.php';
class player {
	//member variables
	var $name;
	var $spades;
	var $hearts;
	var $clubs;
	var $diamonds;
	var $playedCards;
	var $noOfCardsAvailable;
	var $noOfTricksBid;
	var $noOfTricksWon;
	var $isDealer;
	var $displayCards;

	function __construct() {
		$this->isDealer = False;
		$this->displayCards = False;
	}

	function addCards($cards_obj) {
		$temp_cards_alloted = $cards_obj->getCardsForPlayer();
		$spades   = $cards_obj->getSpades($temp_cards_alloted);
		$this->spades   = $cards_obj->getSpades($temp_cards_alloted);
		$this->hearts   = $cards_obj->getHearts($temp_cards_alloted);
		$this->clubs    = $cards_obj->getClubs($temp_cards_alloted);
		$this->diamonds = $cards_obj->getDiamonds($temp_cards_alloted);
		$this->noOfTricksBid = count($this->spades);
		$this->noOfTricksWon = 0;
		$this->updateNumberOfCardsAvailable();
		$this->isDealer = False;
		$this->displayCards = False;
	}
	function updateNumberOfCardsAvailable() {
		$this->noOfCardsAvailable = count($this->spades)+count($this->hearts)+count($this->clubs)+count($this->diamonds);
	}
	function getNumberOfCardsAvailable() {
		return $this->noOfCardsAvailable;
	}

}
?>
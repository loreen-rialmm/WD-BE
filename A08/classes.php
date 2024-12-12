<?php
class Island
{
  public $id;
  public $name;
  public $shortDescription;
  public $longDescription;
  public $color;
  public $image;
  public $status;
  public $cards = [];

  public function __construct($id, $name, $shortDescription, $longDescription, $color, $image, $status)
  {
    $this->id = $id;
    $this->name = $name;
    $this->shortDescription = $shortDescription;
    $this->longDescription = $longDescription;
    $this->color = $color;
    $this->image = $image;
    $this->status = $status;
  }

  public function addCard($islandCard)
  {
    $this->cards[] = $islandCard;
  }

  public function buildIsland()
  {
    $cardsHTML = '';
    foreach ($this->cards as $card) {
      $cardsHTML .= $card->buildCard();
    }

    return '
        <div id="' . $this->name . '" class="w3-container menu w3-padding-32" style="background-color: ' . $this->color . ';">
        <div class="w3-row">
          <div class="w3-half w3-center">
            <img src="images/' . $this->image . '.jpg" class="imageIsland">
          </div>
          <div class="w3-half islandSDescription">
            <p>' . $this->shortDescription . '</p>
          </div>
        </div>
        <div class="w3-row w3-center">
          <a href="island.php?id=' . $this->id . '" class="w3-button">Get to know More</a>
        </div>
        <div class="w3-row w3-center">
          ' . $cardsHTML . '
        </div>
      </div>';
  }
}

class IslandCard
{
  public $islandContentID;
  public $islandOfPersonalityID;
  public $image;
  public $content;
  public $color;

  public function __construct($islandContentID, $islandOfPersonalityID, $image, $content, $color)
  {
    $this->islandContentID = $islandContentID;
    $this->islandOfPersonalityID = $islandOfPersonalityID;
    $this->image = $image;
    $this->content = $content;
    $this->color = $color;
  }

  public function buildCard()
  {
    return '
            <div class="w3-row w3-center w3-border w3-border-dark-grey cardContainer" id="card-' . $this->islandOfPersonalityID . '">
                <div class="w3-row">
                    <div class="card w3-row">
                        <div class="w3-half w3-center">
                            <img src="images/' . $this->image . '.jpg" class="coreImage">
                        </div>
                        <div class="w3-half coreContent">
                            <p>' . $this->content . '</p>
                        </div>
                    </div>
                </div>
            </div>';
  }
}
?>
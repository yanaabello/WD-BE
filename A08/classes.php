<?php
class Island
{
    public $islandOfPersonalityID;
    public $name;
    public $shortDescription;
    public $color;
    public $image;

    public function __construct($islandOfPersonalityID, $image, $name, $color, $shortDescription)
    {
        $this->islandOfPersonalityID = $islandOfPersonalityID;
        $this->image = $image;
        $this->name = $name;
        $this->color = $color;
        $this->shortDescription = $shortDescription;
    }

    public function buildIslands()
    {
        return '
    <div class="col-12 col-md-6 col-lg-3">
        <div class="card">
            <a href="view.php?id=' . $this->islandOfPersonalityID . '">
                <div class="image-container" ' . $this->color . '; ">
                    <img src="' . $this->image . '" alt="' . $this->name . '" class="card-img">
                    <div class="overlay">
                        <h5 class="title" style="font-family: \'Slackey\', cursive; color: ' . $this->color . ';">' . $this->name . '</h5>
                        <p class="description">' . $this->shortDescription . '</p>
                    </div>
                </div>
            </a>
        </div>
    </div>';
    }
}

class View
{
    public $name;
    public $longDescription;
    public $color;

    public function __construct($name, $longDescription, $color)
    {
        $this->name = $name;
        $this->longDescription = $longDescription;
        $this->color = $color;
    }

    public function buildView()
    {
        return '
            <h1 class="title text-center" style="font-family: \'Slackey\', cursive; font-weight: bold; font-size: 45px; color:' . $this->color . ';">' . $this->name . '</h1>
            <div class="card my-4" style="background-color: #f8f9fa; border: none; border-radius: 10px;">
                <div class="card-body">
                    <p class="card-text" style="color: black; font-size: 18px;">' . $this->longDescription . '</p>
                </div>
            </div>
        ';
    }
}

class Content
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

    public function buildContent($counter)
    {
        if ($counter % 2 == 0) {
            return '
        <div class="row">
            <div class="col-12 col-md-6 p-3 d-flex justify-content-center align-items-center">
                <img src="' . $this->image . '" class="img-fluid" style="max-height: 300px; object-fit: cover;">
            </div>
            <div class="col-12 col-md-6 p-3 d-flex justify-content-center align-items-center">
                <h5 class="description" style="color: white; text-shadow: 2px 2px 5px ' . $this->color . '; text-align: center;">
                    ' . $this->content . '
                </h5>
            </div>
        </div>';
        } else {
            return '
        <div class="row">
            <div class="col-12 col-md-6 p-3 d-flex justify-content-center align-items-center">
                <h5 class="description" style="color: white; text-shadow: 2px 2px 5px ' . $this->color . '; text-align: center;">
                    ' . $this->content . '
                </h5>
            </div>
            <div class="col-12 col-md-6 p-3 d-flex justify-content-center align-items-center">
                <img src="' . $this->image . '" class="img-fluid" style="max-height: 300px; object-fit: cover;">
            </div>
        </div>';
        }
    }

}

?>
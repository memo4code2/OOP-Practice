<?php





class Product
{
    protected $name;
    protected $price;
    protected $description;
    protected $image;

    public function __construct($name, $price, $description, $image)
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->image = $image;
    }

    public function uploadImage($image): void
    {
        $this->image = $image;
    }

    public function calcPrice()
    {
        return $this->price;
    }
}

// ---------------------------------

class Book extends Product
{
    private array $publishers = [];

    public string $writer;
    public string $color;
    public string $supplier;

    public function __construct(
        $name,
        $price,
        $description,
        $image,
        $writer,
        $color,
        $supplier
    ) {
        parent::__construct($name, $price, $description, $image);

        $this->writer = $writer;
        $this->color = $color;
        $this->supplier = $supplier;
    }

    public function setPublisher($publisher): void
    {
        $this->publishers[] = $publisher;
    }

    public function choosePublisher()
    {
        if (empty($this->publishers)) {
            return null;
        }

        $randomKey = array_rand($this->publishers);

        return $this->publishers[$randomKey];
    }

    public function showAllPublishers(): void
    {
        echo "<ul>";

    foreach ($this->publishers as $publisher) {
        echo "<li>" . $publisher . "</li>";
    }

    echo "</ul>";
    }
}

// ---------------------------------

class BabyCar extends Product
{
    public $age;
    public $weight;

    private array $materials = [];
    private $specialTax =5;

    public function __construct(
        $name,
        $price,
        $description,
        $image,
        $age,
        $weight,
        $specialTax
    ) {
        parent::__construct($name, $price, $description, $image);

        $this->age = $age;
        $this->weight = $weight;
        $this->specialTax = $specialTax;
    }

    public function setMaterial($material): void
    {
        $this->materials[] = $material;
    }

    public function displayMaterials(): void
    {
        foreach ($this->materials as $material) {
            echo $material . "<br>";
        }
    }

    public function getFinalPrice()
    {
        
        return $this->price + ($this->price * $this->specialTax / 100);
    }
}

// ---------------------------------


class Gift extends Product
{
    public function __construct($name, $price, $description, $image)
    {
        parent::__construct($name, $price, $description, $image);
    }
}

// ---------------------------------
// Create 2 Books

$book1 = new Book(
    "Welcome to PHP",
    460,
    "Backend programming",
    "./images/book1.jpg",
    "Ahmed",
    "Blue",
    "Supplier A"
);

$book1->setPublisher("Dar Progamers");
$book1->setPublisher("Dar Back-End");

$book2 = new Book(
    "Learn OOP",
    550,
    "Object Oriented Programming",
    "./images/book2.jpg",
    "Mohamed",
    "Black",
    "Supplier B"
);

$book2->setPublisher("Dar C");
$book2->setPublisher("Dar D");

// Create 2 BabyCars

$car1 = new BabyCar(
    "Baby Car A",
    1200,
    "Baby car for toddlers",
    "./images/car1.jpg",
    2,
    5,
    9
);

$car1->setMaterial("Plastic");
$car1->setMaterial("Rubber");

$car2 = new BabyCar(
    "Baby Car B",
    1800,
    "Baby car for older children",
    "./images/car2.jpg",
    4,
    7,
    11
);

$car2->setMaterial("Metal");
$car2->setMaterial("Plastic");

// ---------------------------------
// Test

echo "Book 1 publishers:<br>";
$book1->showAllPublishers();

echo "Random publisher: ";
echo $book1->choosePublisher() . "<br>";

echo "Book 1 price: ";
echo $book1->calcPrice() . "<br>";

echo "Baby car 1 materials:<br>";
$car1->displayMaterials();

echo "Baby car 1 final price: ";
echo $car1->getFinalPrice() . "<br>";

echo "Baby car 2 final price: ";
echo $car2->getFinalPrice() . "<br>";

// class Playlist
// {
//     private array $songs = [];


//     public function AddSong( $songs):void{

//     $this->songs[] = $songs ;


    

//     }

//     public function GetSongs(){
//         return $this->songs ;
//     }



//     public function showSongs():void{
//         foreach($this->songs as $songs){
//             echo $songs . "</br>" ;
//         }
//     }
// }



// $song1 = new Playlist() ;

// $song1->AddSong("mrwanpapblo") ;
// $song1->AddSong("wegz") ;
// $song1->showSongs() ;


// var_dump($song1->getSongs());



?>
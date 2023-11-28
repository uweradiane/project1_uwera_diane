<link rel="stylesheet" href="aboutus.css" />
  <?php

class ClothingCompany {
    private $name;
    private $description;
    private $products;
    private $contacts;

    public function __construct($name, $description, $products, $contacts) {
        $this->name = $name;
        $this->description = $description;
        $this->products = $products;
        $this->contacts = $contacts;
    }

    public function displayInfo() {
        echo "<i>Welcome to <b>{$this->name}</b>!\n<br><br></i>";
        echo "<b>About Us:</b> <i>{$this->description}\n\n<br><br></i>";
        echo "<b>Our Products:</b>\n<br>";
        foreach ($this->products as $product) {
            echo "- $product\n<br>";
        }
        echo "<b><br>\nContact Us:\n<br></b>";
        foreach ($this->contacts as $contact) {
            echo "- $contact\n<br>";
        }
    }
}

// Example usage
$companyName = "Diane_Fashion_Design";
$companyDescription = "Your go-to destination for trendy and stylish clothing.";
$companyProducts = ["T-shirts", "Jeans", "Dresses", "Jupes","Shirts","Coats"];
$companyContacts = ["Email: info@dianefashuiondesign.com", "Phone: +1 (514) 123-4567", "Address: Diane Fashion Street, City ville"];

$fashionHub = new ClothingCompany($companyName, $companyDescription, $companyProducts, $companyContacts);
$fashionHub->displayInfo();

?>

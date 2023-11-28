<link rel="stylesheet" href="../cssstyles/aboutus.css" />
  <?php

class ClothingCompany {
    private $name;
    private $description;
    public function __construct($name, $description) {
        $this->name = $name;
        $this->description = $description;
    }

    public function displayInfo() {
        echo "<i>Welcome to <b>{$this->name}</b>!\n<br><br></i>";
        echo "<b>Description:</b> <i>{$this->description}\n\n<br><br></i>";
}
}
// Example usage
$companyName = "Diane_Fashion_Design";
$companyDescription = "Yours destination for trendy and stylish clothing.  <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Get the best for the price of Banana.";


$fashionHub = new ClothingCompany($companyName, $companyDescription);
$fashionHub->displayInfo();

?>

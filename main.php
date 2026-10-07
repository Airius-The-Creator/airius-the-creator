
<?php
// Airius The Creator - Jonh Earl Suarez Delgado
// Hinigaran, Negros Occidental

class Airius {
    public $name = "Jonh Earl";
    public $location = "Hinigaran";
    public $skills = ["html","c++","js","c#","go","python","java","php"];
    
    function __construct() {
        echo "Airius The Creator\n";
        echo "Full Stack Developer\n";
    }
    
    function getSkills() {
        foreach($this->skills as $skill) {
            echo $skill . "\n";
        }
    }
    
    function buildWebsite() {
        for($i=0; $i<100; $i++) {
            echo "Building project $i\n";
        }
    }
}

$airius = new Airius();
$airius->getSkills();
$airius->buildWebsite();

for($j=0; $j<50; $j++) {
    echo "Learning PHP - Line $j\n";
}
?>

<html> 
    <body> 
        <p>
            <?php
            $mealType = $_POST["MealType"];
            $beans = $_POST["Beans"];
            $protein = $_POST["Protein"];

            if ($mealType == "Burrito"){
                $price = 10.25;
            }

            elseif ($mealType == "Bowl"){
                $price = 10.50;
            }

            elseif ($mealType == "Taco"){
                $price = 8.75
            }


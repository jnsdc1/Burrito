<html> 
    <body> 
        <p>
            <?php
            $mealType = $_POST["MealType"];
            $beans = $_POST["Beans"];
            $rice = $_POST["Rice"];
            $protein = $_POST["Protein"];
            $toppings =$_POST["Topping"];

            if ($mealType == "Burrito"){
                $price = 10.25;
            }

            elseif ($mealType == "Bowl"){
                $price = 10.50;
            }

            elseif ($mealType == "Taco"){
                $price = 8.75
            }

            if (in_array('Queso', $toppings)){
                $price += 2.00;
            }

            if (in_array('Guac',$toppings)){
                $price +=2.00;
            }

            echo $price;
            for  ($i =0; $i < count($toppings); $i++){
                echo $toppings[$i] . "<br>";
            }
            ?>
        </p>
    </body>
</html>





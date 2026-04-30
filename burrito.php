<html> 
    <body> 
        <p>
            <?php

            $mealType = $_POST["MealType"];
            $beans = $_POST["Bean"];
            $rice = $_POST["Rice"];
            $protein = $_POST["Protein"];
            $toppings =$_POST["Topping"] ?? [];
            $name = $_POST["Name"];
            $time = $_POST["Time"];

            if ($mealType == "Burrito"){
                $price = 10.25;
            }

            elseif ($mealType == "Bowl"){
                $price = 10.50;
            }

            elseif ($mealType == "Taco"){
                $price = 8.75;
            }

            if (in_array('Queso', $toppings)){
                $price += 2.00;
            }

            if (in_array('Guac',$toppings)){
                $price +=2.00;
            }

            $extraBean = isset($_POST["ExtraBean"]) ? "Extra Beans" : "";
            $extraRice = isset($_POST["ExtraRice"]) ? "Extra Rice" : "";

            $extraProtein = isset($_POST["xProtein"]);
            if ($extraProtein){
                $price += 4.00;
            }

            $tax = $price * 0.06;
            $total = $price + $tax;

            echo "Recipt" . "<br>";
            echo "<br>";
            echo "Subtotal: $" . number_format($price,2) . "<br>";
            echo "Tax: $" . number_format($tax,2) . "<br>";
            echo "Total: $" . number_format($total,2) . "<br>";
            echo "<br>";
            echo "Name:" . " " . $name . "<br>";
            echo "Time:" . " " . $time . "<br>";
            echo $mealType . "<br>";
            echo "<br>";
            echo "Beans:" . " ". $beans . "<br>";
            if ($extraBean) echo $extraBean . "<br>";
            echo "<br>";
            echo "Rice:" . " " . $rice . "<br>";
            if ($extraRice) echo $extraRice . "<br>";
            echo "<br>";
            echo "Protein:" . " " . $protein . "<br>";
            if ($extraProtein) echo "Extra Protein" . "<br>";
            echo "<br>";
            for  ($i =0; $i < count($toppings); $i++){
                echo "Topping:" . " " . $toppings[$i] . "<br>";
            }
            ?>
        </p>
    </body>
</html>





<?php
 $_SERVER["REQUEST_METHOD"] == "POST";
        $Height=$_POST['Height'];
        $Weight=$_POST['Weight'];
        if($Height == '' || $Weight == '' )
        {
            $Error = "The input values are required.";
        }

        else {
            $Height2=$Height*$Height;
            $Height3=$Height2*10;
            $BMIIndex=$Weight/$Height3;

                if ($BMIIndex < 18.5) {
                        echo "Underweight";
                } else if ($BMIIndex <= 24.9) {
                        echo "Normal";
                } else if ($BMIIndex <= 29.9) {
                        echo "Overweight";
                } else {
                        echo "Obese";
                }
        }
        ?>
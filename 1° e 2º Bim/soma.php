<?php
    $valor = 0;
    for ($i=1; $i<=20; $i++)
    {
        if ($i<20)
        {
            echo "".$i."+";
        }
        else
            if ($i=20)
            {
               echo "".$i."=";
            }
        $valor += $i;
    }

        echo "".$valor."<br>";
?>

<!DOCTYPE html>
<html>

<head>
    <title> TAXXY: A TAX CALCULATOR WEB APP </title>
    <link rel="stylesheet" href="TaxDec.css"/>
</head>
<body>
    <?php
     ?>

     <center>
         <h1>T A X X Y: A TAX CALCULATOR WEB APP</h1>
         <form method="post">
 
            
 
             <p>Income:
                 <input type="text" id="Income" name="Income" size="30">
             </p>
 
             <p>Type:
                 <input type="Radio" id="bi-Monthly" name="type" value="bi-Monthly">
                 <label for="bi-Monthly">Bi-Monthly</label>
                 <input type="Radio" id="Monthly" name="type" value="Monthly">
                 <label for="Monthly">Monthly</label>
             </p>
            
             <input type="Submit" value="Submit" name="Submit">
             <center> <img src="image/TableTax.jpg" ; width="750" height="450" ; border="6" id="img"> </center> 
 
 
         </form>
         </table>

         <?php
    if (isset($_POST['Submit'])) {
        $Income = $_POST['Income'];
        $type = $_POST['type'];

            if ($_POST['type'] == "bi-Monthly") {
                $BiInc = $Income * 2;
                $BiAnn = $BiInc * 12;

                if ($BiAnn <= 250000) {
                    $BiAnnTax = 0;
                    $BiMonTax = 0;
                }

                else if ($BiAnn <= 400000 && $BiAnn > 250000) {
                    $BiAnnTax = ($BiAnn-250000) * .2;
                    $BiMonTax = $BiAnnTax / 12;
                }

                else if ($BiAnn <= 800000 && $BiAnn > 400000) {
                    $BiAnnTax = 30000+($BiAnn-400000)*.25;
                    $BiMonTax = $BiAnnTax / 12;
                }

                else if ($BiAnn <= 2000000 && $BiAnn > 800000) {
                    $BiAnnTax = 130000+($BiAnn-8000000) * .3;
                    $BiMonTax = $BiAnnTax / 12;
                }

                else if ($BiAnn <= 8000000 && $BiAnn > 2000000) {
                    $BiAnnTax = 490000+($BiAnn-2000000) * .32;
                    $BiMonTax = $BiAnnTax / 12;
                }

                else if ($BiAnn > 8000000) {
                    $BiAnnTax = 2410000+($BiAnn-8000000) * .35;
                    $BiMonTax = $BiAnnTax / 12;
                }  

                echo "Annual Income: " . $BiAnn . "<br>";
                echo "Monthly Tax: ". $BiMonTax . "<br>";
                echo "Annual Tax: " . $BiAnnTax . "<BR>";
            }
        
            
           else if ($_POST['type'] == "Monthly") {
            $Ann = $Income *12;
    
            if ($Ann <= 250000){
                $Income = 0;
                $MonTax = 0;
                }
                else if ($Ann<= 400000 && $Ann > 250000) {
                $AnnTax = ($Ann-250000)*.2;
                $MonTax = $AnnTax/12;
                }
                else if ($Ann <= 800000 && $Ann > 400000) {
                $AnnTax = 30000+($Ann-400000)*.25;
                $MonTax = $AnnTax/12;
                }
                else if ($Ann <= 2000000 && $Ann > 800000) {
                $AnnTax = 130000+($Ann-800000)*.3;
                $MonTax = $AnnTax/12;
                }
                else if ($Ann <= 8000000 && $Ann > 2000000) {
                $AnnTax = 490000+($Ann-2000000)*.32;
                $MonTax = $AnnTax/12;
                }
                else if ($Ann > 8000000) {
                $AnnTax = 2410000+($Ann-8000000)*.35;
                $MonTax = $AnnTax/12;
                }  
    
                echo "Annual Income: " . $Ann . "<br>";
                echo "Monthly Tax: ". $MonTax . "<br>";
                echo "Annual Tax: " . $AnnTax . "<BR>";
            }
        }
    ?>

   
</body>

</html>
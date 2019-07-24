<?php
  
//Global Variable
$conversionFee = 1;
  
$cambodiaRiel = 2103942;
$mayanmarKyat = 19092;
$norwayKrones = 109;
$albaniaLek = 9094;

//exchange
$Riel_to_USD = 0.00026;
$Kyat_to_USD = 0.00066;
$Krones_to_USD = 0.11;
$Lek_to_USD = 0.0090;


//front end

/*
*initial Currency
*/
echo "Initial Currency Details are as follows: ";

echo "\n At Combodia : " . $cambodiaRiel . "Riel";
echo "\n At Mayanmar : " . $mayanmarKyat . "Kyat";
echo "\n At Norway : " . $norwayKrones . "Krones";
echo "\n At Albania : " . $albaniaLek . "Lek";
echo "\n";
echo "\n---------------------------------------";
echo "\n";

//conversion
$cambodiaRiel *= $Riel_to_USD;
$mayanmarKyat *= $Kyat_to_USD;
$norwayKrones *= $Krones_to_USD;
$albaniaLek *= $Lek_to_USD;


/*
*Exchanged Currency
*/
echo "After Converting to USD the details are : ";
echo "\n Riel to USD : $cambodiaRiel" . "USD";
echo "\n Kyat to USD : $mayanmarKyat" . "USD";
echo "\n Krones to USD : $norwayKrones" . "USD";
echo "\n Lek to USD : $albaniaLek" . "USD";
echo "\n";
echo "\n---------------------------------------";
echo "\n";



//After Deducting Convetsion Charges

$cambodiaRiel -= $conversionFee;
$mayanmarKyat -= $conversionFee;
$norwayKrones -= $conversionFee;
$albaniaLek -= $conversionFee;

/*
*Final Currency
*/
echo "******Deducting 1$ as service charges for currency conversion , so the final detals are  : ";
echo "\n";
echo "\n Riel to USD : $cambodiaRiel" . "USD";
echo "\n Kyat to USD : $mayanmarKyat" . "USD";
echo "\n Krones to USD : $norwayKrones" . "USD";
echo "\n Lek to USD : $albaniaLek" . "USD";
?>

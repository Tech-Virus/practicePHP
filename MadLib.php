<?php
  
  
//function defination
  
  /*
  *takes the perameters and make funny or something like wired story.
  */
function generateStory($singular_noun , $verb , $color, $distance_unit)
{
  $story = "\nThe $singular_noun are lovely, $color, and deep.\nBut I have promises to 		keep,\nAnd $distance_unit to go before I 			$verb,\nAnd $distance_unit to go before I 		$verb.\n";
  
  return $story;
}

//execution
echo generateStory("monkey", "eat", "brown", "fifty");
echo generateStory("empty void", "speak", "beige", "four");
echo generateStory("car", "cook", "vermilion", "nine");
?>

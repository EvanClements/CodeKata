<?php

/* Challenge #1
 * Difficulty: Easy
 * URL: http://www.reddit.com/r/dailyprogrammer/comments/pih8x/easy_challenge_1/ 
 *
 * Create a program that will ask the users name, age, and reddit username. have it tell them the information back, in the format:
 * --> your name is (blank), you are (blank) years old, and your username is (blank)
 * for extra credit, have the program log this information in a file to be accessed later.
 * 
 */

if($_REQUEST['submitted'] === "yes"){
	
}else{

?>

<html>
	<form action="./1.php?submitted=yes" method="post">
		<input type="text" name="name" value="Evan" />
		<input type="number" name="age" value="23" />
		<input type="text" name="username" value="Cabbages_N_Kings" />
		<input type="submit" />
	</form>
</html>

<?php }; ?>
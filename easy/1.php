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

if($_REQUEST['submitted'] === "yes" && $_POST <> null){
	$request = json_encode($_POST);
	
	// Build file to hold person's info in. 
	$userInfo = $_POST['username'].".json";
	$fh = fopen($userInfo, 'w') or die("can't open file");
	
	// If file doesn't exist, create it.
	if($fh){
		fwrite($fh, $request);
	};
	
	fclose($fh);
	
	print_r(
		"Your name is ".$_POST['name']
		.", you are ".$_POST['age'].
		", and your Reddit username is <a href=\"http://www.reddit.com/u/".$_POST['username']."\">".$_POST['username']."</a>."
		" Download your JSON file here: <a href=\"http://evanclements.co/projects/codekata/easy/".$userInfo."\" download=\"info.json\">here</a>."	
	);
}else{

?>

<html>
	<form action="./1.php?submitted=yes" method="post">
		<label>What is your name? </label>
			<input type="text" name="name" value="Evan" />
		<label>How old are you? </label>
			<input type="number" name="age" value="23" />
		<label>What is your Reddit Username? </label>
			<input type="text" name="username" value="Cabbages_N_Kings" />
		<input type="submit" />
	</form>
</html>

<?php }; ?>
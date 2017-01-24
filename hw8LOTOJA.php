<!DOCTYPE html> 
<!-- http://cs2610.cs.usu.edu/~lamborghini/hw8LOTOJA.php -->
<html lang="en">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="hw8LOTOJA.css" />
        <title>LOTOJA</title>	
		<link href="styleForms.css" rel="stylesheet" type="text/css" />		
    </head>
    <body>
	<div>
		<?php   
	    define("numberMinInHour", 60);  //USING CONSTANT HERE 
		define("totalDistance", 207);
		$overSpeed = "";
		$error = "";
		
		$error1 ="";
		$errorg = "";
		$errorn = "";
		$name = "";
		
			$time1="";
			$time2="";
			$time3="";
			$time4="";
			$time5="";
			
			$cp1="44";
			$cp2="43";
			$cp3="41";
			$cp4="37";
			$cp5="42";
			
			$speed1="";
			$speed2="";
			$speed3="";
			$speed4="";
			$speed5="";
			
			$mph1 = "";
			$mph2 = "";
			$mph3 = "";
			$mph4 = "";
			$mph5 = "";
		
		if(isset($_POST['submit']))
		{

				
				//if(empty($_POST['check1']) )
				if(($_POST['check1']) == 0  )
				{
					$error=" Checkpoint cannot be Zero"; //<font color='red'>
					//<p>My mother has <span style="color:blue">blue</span> eyes.</p>
					//$error="<p><span style='color:red'> Checkpoint 1 cannot be Zero</span></p>"
				}
				else
				{
					$name = htmlentities($_POST["name"]);
					$time1 = htmlentities($_POST['check1']);
					$time2 = htmlentities($_POST['check2']);
					$time3 = htmlentities($_POST['check3']);
					$time4 = htmlentities($_POST['check4']);
					$time5 = htmlentities($_POST['check5']);
					$overSpeed = overallSpeed($time5);
				}
		}
		?>
	
	<?php
	
	if (isset($_POST['submit']))
	{
		if(is_numeric($_POST['check1']) and is_numeric($_POST['check2']) and is_numeric($_POST['check3']) and is_numeric($_POST['check4']) and is_numeric($_POST['check5']))
		{
			
			if(($_POST['check1']) < ($_POST['check2']) and ($_POST['check2']) < ($_POST['check3']) and ($_POST['check3']) < ($_POST['check4']) and ($_POST['check4']) < ($_POST['check5']))
			{
				if ($_POST['check1'] > 0 )//and is_numeric ($_POST['check1']) )
				{
					$time1=$_POST['check1'];
					$time2=$_POST['check2'] - $_POST['check1'];
					$time3=$_POST['check3'] - $_POST['check2'];
					$time4=$_POST['check4'] - $_POST['check3'];
					$time5=$_POST['check5'] - $_POST['check4'];
					if($time1 == "")
					{
						$time1=1;
					}
					if($time2 == "")
					{
						$time2=1;
					}
					if($time3 == "")
					{
						$time3=1;
					}
					if($time4 == "")
					{
						$time4=1;
					}
					if($time5 == "")
					{
						$time5=1;
					}
					$mph1=44 / ($time1/numberMinInHour);	// ($_POST["check1"]/numberMi
					$speed1 =  round($mph1,2);
					
					$mph2=43 / ($time2/numberMinInHour);
					$speed2 =  round($mph2,2);
					
					$mph3=41 / ($time3/numberMinInHour);
					$speed3 =  round($mph3,2);
					
					$mph4=37 / ($time4/numberMinInHour);
					$speed4 =  round($mph4,2);
					
					$mph5=42 / ($time5/numberMinInHour);
					$speed5 =  round($mph5,2);
			
			    }
		
				else
				{
					//echo " <h1><font color='red'> Cannot enter zero for time 1</h1>";
					$error1="  Cannot enter zero for time 1.";
				}
			}
			else
			{
				//echo " <font color='red'> Each checkpoint must have more time than the previous checkpoint";
				$errorg ="  Each checkpoint must have more time than the previous checkpoint.";
			}
		}
		
		else
		{
			//echo" <h1><font color='purple'> Must enter NUMBERS only in the checkpoints.</h1>";
			$errorn ="   Must enter NUMBERS only in the checkpoints.";
		}
	}
	
		if(isset($_POST['clear']))
		{
			$name = "";
		
			$time1="";
			$time2="";
			$time3="";
			$time4="";
			$time5="";
		
		}
			?>
	
	
	
	<form action="hw8LOTOJA.php" method="post">
	
			
			<fieldset>
			<legend>Welcome to Lotoja</legend>
				<label for="name">Name: </label><input type="text" id="name" value="<?php echo $name ?>" name ="name" class="resizeName" /><br>
				<span style='color:red'>
				<?php
				echo $errorn;
				?>
				</span><br>
			<label for="check1">Time at checkpoint 1: </label><input type="text" id="check1" value="<?php echo $time1 ?>" name="check1"  class="resizetext"/>
			<span style='color:red'>
				<?php
				echo $error . " " .$error1." ".$errorg." ".$errorn;
				?>
				</span><br>
			<label for="check2">Time at checkpoint 2: </label><input type="text" id="check2" value="<?php echo $time2 ?>" name ="check2" class="resizetext"/>
			<span style='color:red'>
				<?php
				echo $error . " " .$errorg." ".$errorn;
				?>
				</span><br>
			<label for="check3">Time at checkpoint 3: </label><input type="text" id="check3" value="<?php echo $time3 ?>" name ="check3" class="resizetext"/>
			<span style='color:red'>
				<?php
				echo $error . " " .$errorg." ".$errorn;
				?>
				</span><br>
			<label for="check4">Time at checkpoint 4: </label><input type="text" id="check4" value="<?php echo $time4 ?>" name ="check4" class="resizetext"/>
			<span style='color:red'>
				<?php
				echo $error . " ".$errorg." ".$errorn;
				?>
				</span><br>
			<label for="check5">Time at checkpoint 5: </label><input type="text" id="check5" value="<?php echo $time5 ?>" name ="check5" class="resizetext"/>
			<span style='color:red'>
				<?php
				echo $error . " ".$errorg." ".$errorn;
				?>
				</span><br>
			<input type="submit" value="Submit" name="submit" /><br><br>
			<input type="submit" value="Clear" name="clear" /><br><br>

			
			</fieldset>
			</form>
			</div>
		
				
				
				
			<?php		
		function overallSpeed($timeFive)
		{	
			if($timeFive == 0)
			{
			$timeFive=1;
			}
			$mph = totalDistance / ($timeFive/numberMinInHour);
			return (round($mph,2));
			
		}
		?>
	
	
	
	
	
	
			
	
	
	
			<?php
			if(isset($_POST['submit']) and $name != "" and is_numeric($_POST['check1']) and is_numeric($_POST['check2']) and is_numeric($_POST['check3']) and is_numeric($_POST['check4']) and is_numeric($_POST['check5'] ) and ($_POST['check1']) < ($_POST['check2']) and ($_POST['check2']) < ($_POST['check3']) and ($_POST['check3']) < ($_POST['check4']) and ($_POST['check4']) < ($_POST['check5']))
			
						{?>
						<div class ="output">
						<label>Overall speed <input type="text" name="speed" value="<?php echo "$overSpeed"; ?>"class="resizetext" />MPH</label>
						</div>
							 <table border="1">
							<tr> <th><?php echo "$name" ?>   </th><th> 1  </th><th> 2  </th><th> 3  </th> <th> 4  </th><th> 5  </th></tr>
							<tr><td>Distance Traveled (mi)</td><td><?php echo "$cp1" ?></td><td><?php echo "$cp2" ?></td><td> <?php echo "$cp3" ?> </td><td> <?php echo "$cp4" ?> </td><td> <?php echo "$cp5" ?> </td></tr>
							<tr><td>Time in Minutes</td><td><?php echo "$time1" ?></td><td><?php echo "$time2" ?></td><td><?php echo "$time3" ?> </td><td> <?php echo "$time4" ?></td><td><?php echo "$time5" ?> </td></tr>
							<tr><td>Speed of Travel</td><td><?php echo "$speed1 mph" ?></td><td><?php echo number_format(round($speed2,2),2); echo " mph";?></td><td> <?php echo number_format(round($speed3,2),2);echo " mph"; ?></td><td> <?php echo number_format(round($speed4,2),2); echo " mph";?> </td><td> <?php echo number_format(round($speed5,2),2); echo " mph";?> </td></tr>
							</table>
			<?php }?>
	
	
	
	</body>
</html>
<!DOCTYPE html> 
<html lang="en">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="hw9style.css" />
        <title>LOTOJA</title>	
		<link href="styleForms.css" rel="stylesheet" type="text/css" />		
    </head>
    <body>
	
		
		<form action="hw9lotoja.php" method="post">
		<?php
					define("numberMinInHour", 60);  //USING CONSTANT HERE
					$speed = "";
						$mph = "";
						$name ="";
						//$textField="";
					?>
		<div>
							
						<h1>LOTOJA!</h1>
						<p>	
						<label>Enter racers name:
						<input type="text" name="PlainText" value="<?php echo $name; ?>" />  <!--< echo functionName();?>" />   $name was $textfield-->
						</label>
						<?php
						
						?>
						<br>
				
					</p>
					<p>
						<pre><label> Enter the time at checkpoint 1:	<input type="text" name="check1"  /></label>
			      <label>2:<input type="text" name="check2" value=" " /></label>
			      <label>3:<input type="text" name="check3" value=" " /></label>	
			      <label>4:<input type="text" name="check4" value=" " /></label>				
			      <label>5:<input type="text" name="check5" value=" " /></label>
						</pre>
						
						<label>To get results: <input type="submit" name="Submit" value="Submit" /></label><br>
						
						<h2>Okay, Let's see how you did!</h2>
					<pre>
					<?php
					
						
						
						
						if (isset($_POST['Submit'])&& $name != "" && $time1 >=1)
						{
							$mph= 207 / ($_POST['check5']/numberMinInHour);
							$speed = round($mph,2);
							
							$name = $_POST['PlainText'];
							
						}

						//print_r($_POST);			
						?>				
					</pre>			
					
			
			</div>
			<p>
			<?php
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
			
			//if (isset($_POST["Submit"]))
			//{
			
				
			//}	
			//elseif (isset($_POST["Submit"]))
			if (isset($_POST['Submit']))
			{
					$time1=$_POST["check1"];
					$time2=$_POST["check2"] - $_POST["check1"];
					$time3=$_POST["check3"] - $_POST["check2"];
					$time4=$_POST["check4"] - $_POST["check3"];
					$time5=$_POST["check5"] - $_POST["check4"];
					if($time1 == " ")
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
					$mph1=44 / ($_POST["check1"]/numberMinInHour);
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
			?></p>
			<p>
			
			
			<?php
			if (isset($_POST['Submit']))
			{
					
						
							if ($name > 'A')
							{
								function functionName(){
								echo "<font color='red'>  Must enter your name";
								echo "<br/>";
								}
							}
							if ($_POST["check1"] < 2)
							{
								echo "<font color='red'>  Time one must be greater than 0";
								echo "<br/>";
							}
							if ($_POST["check2"] < 2)
							{
								echo "<font color='red'>  Time two must be greater than 0";
								echo "<br/>";
							}
							if ($_POST["check3"] < 2)
							{
								echo "<font color='red'>  Time three must be greater than 0";
								echo "<br/>";
							}
							if ($_POST["check4"] < 2)
							{
								echo "<font color='red'>  Time four must be greater than 0";
								echo "<br/>";
							}
							if ($_POST["check5"] < 2)
							{
								echo "<font color='red'>  Time five must be greater than 0";
								echo "<br/>";
							}
							
						
							
		
							
							if ($_POST["check1"] > $_POST["check2"])
							{
								echo "<font color='red'>  Time two must be greater than time one ";
								echo "<br/>";
							}
							if ($_POST["check2"] > $_POST["check3"])
							{
								echo "<font color='red'>  Time three must be greater than time two";
								echo "<br/>";
							}
							if ($_POST["check3"] > $_POST["check4"])
							{
								echo "<font color='red'>  Time four must be greater than time three";
								echo "<br/>";
							}
							if ($_POST["check4"] > $_POST["check5"])
							{
								echo "<font color='red'>  Time five must be greater than time four";
								echo "<br/>";
							}
							if(isset($_POST['name']) && !empty($_POST['name']))
							{
								$name = $_POST['name'];
							//	$cel = tempChange($_POST['name']);
							}
			}
							
						elseif(isset($_POST['Submit'])) 
						{?>
						<div class ="output">
						<label>Overall speed <input type="text" name="speed" value="<?php echo "$speed"; ?>" /></label>
						</div>
							 <table border="1">
							<tr> <th><?php echo "$name" ?>   </th><th> 1  </th><th> 2  </th><th> 3  </th> <th> 4  </th><th> 5  </th></tr>
							<tr><td>Distance Traveled (mi)</td><td><?php echo "$cp1" ?></td><td><?php echo "$cp2" ?></td><td> <?php echo "$cp3" ?> </td><td> <?php echo "$cp4" ?> </td><td> <?php echo "$cp5" ?> </td></tr>
							<tr><td>Time in Minutes</td><td><?php echo "$time1" ?></td><td><?php echo "$time2" ?></td><td><?php echo "$time3" ?> </td><td> <?php echo "$time4" ?></td><td><?php echo "$time5" ?> </td></tr>
							<tr><td>Speed of Travel</td><td><?php echo number_format($speed1,2,',',''); echo " mph"; ?></td><td><?php echo number_format(round($speed2,2),2); echo " mph";?></td><td> <?php echo number_format(round($speed3,2),2);echo " mph"; ?></td><td> <?php echo number_format(round($speed4,2),2); echo " mph";?> </td><td> <?php echo number_format(round($speed5,2),2); echo " mph";?> </td></tr>
							</table>
			<?php }?>
			</p>
			
        </form>
		
    </body>
</html>  

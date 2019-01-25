<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php 
    $love = false;
    
   if($love == false){
       
       echo "I hate PHP";
   }
    elseif($love == true){
        
        echo " i LOVE php";
    }
    
    else{
        echo "I feel nothing";
    }
    
    

    for($counter = 0; $counter <11;){
        
        echo $counter."<br>";
        
        $counter++;
    }
    
    
    
    

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php" ?>
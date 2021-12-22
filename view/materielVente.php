<!DOCTYPE html> 
<style>
<?php include "bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.css" ?> 
<?php include "comp.css" ?>
</style>



<h1> VOUS ARRIVEZ SUR LA PAGE DES VENTES </h1>


<div class="row" > 

    <div class="col-md-3" > <h1>  Description </h1>  </div>
    
    
    <div class="col-md-3" > <h1>  Prix </h1>  </div>
    
    <div class="col-md-3" > <h1>  Photo  </h1>  </div>
    
    <div class="col-md-3" > <h1>  Ajouter Au Panier  </h1>  </div>
     
</div>


<?php while($row = $searchStmt->fetch() ) {  ?>


   <div class="row" > 

	<div class="col-md-3 art"> 
		<?php echo $row["Description"]    ?> 
	</div>

	<div class="col-md-3 art"> 
		<?php echo $row["prix"]    ?> 
	</div>

	<div class="col-md-3 art"> 
		<?php echo "<img src=".$row["chemin"]." class=\"image\"  >" ?> 
	</div>


	<div class="col-md-3 art" > 
		<h1> AJOUTER UN ARTICLE    </h1>

		<form class="boutonPlusMoins">
    			<a> + </a>
    			<input type="text">
    			<a> - </a>
		</form>	

	</div> 

   </div> 

<?php }  ?>

<script>


<?php include "comp.js" ?> 


 </script>

</html>

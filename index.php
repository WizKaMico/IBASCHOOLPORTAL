
	<?php include('common/header.php') ?>
	<div class="home-div"></div>

			<div class="container">
				<div class="vmgo display-4 mt-5">
					VISION, MISSION, AND CORE VALUES
				</div>
				<?php
							include_once('connection/connection.php');
							$sql = "SELECT * FROM home WHERE under = 'VISION' OR under = 'MISSION' OR under = 'CORE'";

							//use for MySQLi-OOP
							$query = $con->query($sql);
							while($row = $query->fetch_assoc()){
				?>				
				<div class="vm mt-4">
					<h2><?php echo strtoupper($row['title']) ?></h2>
					<?php echo $row['description']; ?>
				</div>
				<br>
			<?php } ?>
			</div>

		<section class="strand">
			<div class="container pb-5">
			<div class="col-md-12">
				<img src="images/strand-pic.png" alt="" class="mt-5 mb-3">
				<h2>STRANDS OFFERED</h2>(Click to read more)
				<ul class="title">
				<?php
							include_once('connection/connection.php');
							$sql = "SELECT * FROM home WHERE under = 'STRANDS'";

							//use for MySQLi-OOP
							$query = $con->query($sql);
							while($row = $query->fetch_assoc()){
				   ?>				
					<li><a href="javascript:;" onclick="myFunction<?php echo $row['id']; ?>()" title="click me to read more"><?php echo strtoupper($row['title']) ?></a></li>
						<div id="<?php echo $row['id']; ?>" style="display:none">
							<div class="details">
								<?php echo $row['description']; ?>
							</div>	
						</div>

					<?php 		
						echo "<script>
							function myFunction".$row['id']."() {
							var x = document.getElementById('".$row['id']."');
								if (x.style.display == 'none') {
								x.style.display = 'block';        
								} else {
								x.style.display = 'none';
								}
								}
							</script>";
					?>
	

					<?php } ?>	

					
					
				</ul>
			</div> 
					<div class="strand-test">
						<h1>LET'S DO SOME STRAND TEST!</h1>
						<p>Which SHS Strand Fits Your Personality?</p>							
								
								<input onclick="myFunctionT()" type="submit" name="btn-start" value="Start Now" class="btn-test">								
							
							<iframe class="mt-5" id="strand-test" src="test/index.php?view=<?php echo 'Q1'; ?>" style="height:600px;width:100%; justify-content:center; display:none;"></iframe>
					</div>

							
						<script>
							function myFunctionT() {
								var x = document.getElementById("strand-test");
									if (x.style.display == "none") {
									x.style.display = "block";        
									} else {
									x.style.display = "none";
									}
								}
						</script>
			</div>
		</section>

		
	
	
			

	<?php include('common/footer.php') ?>
</body>
</html>


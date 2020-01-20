<?php include ('inc/header.php')?>
<?php include ('inc/slider.php')?>






	<div class="contentsection contemplete clear">

		<div class="maincontent clear">
        	
        	<h1 class="all">All Question</h1>

			<!--- pagiantion-->

			<?php
				$per_page=8;
				if(isset($_GET["page"])){
					$page = $_GET["page"];
				}else{
					$page = 1;
				}

				$start_form = ($page-1)*$per_page;

			?>


			<!--- pagiantion-->




				<?php

					$query= "select * from question order by date desc limit $start_form, $per_page ";
					$ques = $db->select($query);
					if($ques){

						while($result = $ques->fetch_assoc()){



				?>



			<div class="samepost clear">
				<p class="text">
				<a href="post.php? no=<?php echo $result['no']; ?>"> <?php echo $result['no']; ?>. <?php echo $fm->textShorten($result['content']); ?>   </a>
				</p>


				<h5 href="post.php? no=<?php echo $result['no']; ?>"> <?php echo"  ";  echo   $result['category'];?> , <?php echo    $result['title'];?> </h5>

				<h6><?php echo $fm->formatDate($result['date']); ?>, By <a href="#"><?php echo $result['author']; ?></a></h6>




                <p class="readmore">
                <a href="post.php? no=<?php echo $result['no']; ?>"> Reply to the answer </a>
                </p>


			</div>

			<?php }  ?>  <!---end while loop-->

			<!--- pagiantion-->

			<?php 
				$query = "select * from question";
				$result= $db->select($query);
				$total_rows= mysqli_num_rows($result);
				$total_pages = ceil($total_rows/$per_page);

			echo "<span class='pagination'><a href='index.php?page=1'>".'First page'."</a>";


			for ($i=1; $i <= $total_pages; $i++) { 
				
				 echo "<a href='index.php?page=".$i."'>".$i."</a>";
			}

			 echo "<a href='index.php?page=$total_pages'>".'Last page'."</a></span>"?>

			

			<!--- pagiantion-->

			<?php } else {"There is problem or No Data";} ?>
			
			
		</div>



 <?php include ('inc/footer.php')?>
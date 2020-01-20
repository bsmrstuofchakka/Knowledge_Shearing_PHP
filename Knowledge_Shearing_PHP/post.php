<?php include('inc/header.php');?>


	<div class="contentsection contemplete clear">

        <div class="maincontent clear">

         <?php
                if(isset($_GET['no']) || $_GET['no']!=NULL){
                    $no = $_GET['no'];
         }

         ?>



            <div class="samepost clear">

                <?php
                $query= "select * from question  where no= $no " ;
                $post=  $db->select($query);
                if($post){
                    while ($result=$post->fetch_assoc()){


                        ?>

                        <p class="text">
                            <?php echo $result['no']; ?>. <?php echo $result['content']; ?>
                        </p>


                        <h5 href="post.php? no=<?php echo $result['no']; ?>"> <?php echo"  ";  echo   $result['category'];?> , <?php echo    $result['title'];?> </h5>

                        <h6><?php echo $fm->formatDate($result['date']); ?>, By <a href="#"><?php echo $result['author']; ?></a></h6>

                    <?php  }
                } ?>

    <?php
            $query= "select * from question,answer   where question.no= $no && answer.question_no= $no  order by dateT desc" ;
            $post=  $db->select($query);
            if($post){
                while ($result=$post->fetch_assoc()){


    ?>
</br>

                    <h3>
                        <?php echo "Answer---" ?> <?php echo $result['ans_content']; ?>
                    </h3>


                    <h6><?php echo $fm->formatDate($result['dateT']); ?>, By <a href="#"><?php echo $result['name']; ?></a></h6>



                <?php  }
   } ?>





            </div>

            <?php

            if($_SERVER['REQUEST_METHOD'] =='POST'){




                $con = mysqli_real_escape_string($db->link, $_POST['content']);
                $answerer = mysqli_real_escape_string($db->link, $_POST['answerer']);


                if($con=="" || $name="" ){
                    echo "<span class='error'>Field must not be empty</span>";
                }
                else{
                    $query = "INSERT INTO answer(  `question_no`, `name`, `ans_content`) VALUES ('$no', '$answerer', '$con')";


                    $inserted_rows = $db->insert($query);



                    if(!$inserted_rows){

                        echo "<span class='error'>Not Inserted!</span>";
                    }
                }

            }


            ?>

            <form action="#" method="post">



            <div class="answer">
                <p>Please, write your answer</p>
                    <textarea rows="8" cols="50" name="content">

                    </textarea>
            </div>
                <div>
                    <td>
                        <label>Please, give your name</label>
                    </td>
                    <td>
                        <input type="text" name="answerer" placeholder="enter your name" class="medium" />
                    </td>
                </div>

                <tr>
                    <td>
                        <input type="submit" name="submit" Value="Submit" />
                    </td>
                </tr>
                <form>
            </form>




        </div>


    </div>

<?php include ('inc/footer.php');?>
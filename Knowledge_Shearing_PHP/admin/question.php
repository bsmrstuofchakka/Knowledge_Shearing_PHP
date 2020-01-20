<?php include('inc/header.php');?>
<?php include ('inc/sideber.php');?>



                <div class="grid_10">
                    <div class="box round first grid">
                        <h2>Add New Question</h2>

                        <?php

                        if($_SERVER['REQUEST_METHOD'] =='POST'){


                            $tit = mysqli_real_escape_string($db->link, $_POST['title']);
                            $cat = mysqli_real_escape_string($db->link, $_POST['cat']);
                            $con = mysqli_real_escape_string($db->link, $_POST['content']);
                            $aut = mysqli_real_escape_string($db->link, $_POST['author']);

                            if($tit=="" || $cat=="" || $con=="" || $aut==""){
                                echo "<span class='error'>Field must not be empty</span>";
                            }
                            else{
                                $query = "INSERT INTO question( `title`, `category`, `content`, `author`) VALUES ('$tit','$cat','$con','$aut')";
                                $inserted_rows = $db->insert($query);

                                if($inserted_rows){
                                    echo "<span class='success'>Data Inserted sucessfully.</span>";
                                }else{
                                    echo "<span class='error'>Not Inserted!</span>";
                                }
                            }

                        }


                        ?>




                        <div class="block">
                            <form action="question.php" method="POST" enctype="multipart/form-data">
                                <table class="form">

                                    <tr>
                                        <td>
                                            <label>Title</label>
                                        </td>
                                        <td>
                                            <input type="text" name="title" placeholder="Enter Post Title..." class="medium" />
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <label>Category</label>
                                        </td>

                                        <td>
                                            <select id="cat" name="cat" >
                                                <option  >Selcet Category</option>

                                                <?php
                                                $query = "select * from category";
                                                $category = $db->select($query);
                                                if($category){
                                                    while ($result=$category->fetch_assoc()) {

                                                        ?>

                                                        <option value="<?php echo $result['name'];?>"><?php echo $result['name'];?></option>





                                                        <?php
                                                    }
                                                }
                                                ?>



                                            </select>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="vertical-align: top; padding-top: 9px;">
                                            <label>Content</label>
                                        </td>
                                        <td>
                                            <textarea class="tinymce" name="content"></textarea>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>
                                            <label>Author</label>
                                        </td>
                                        <td>
                                            <input type="text" name="author" id="author" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="submit" name="submit" Value="Save" />
                                        </td>
                                    </tr>
                                </table>
                            </form>

                        </div>
                    </div>
                </div>



 <?php include('inc/footer.php');?>
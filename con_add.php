<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>เพลงฮิต</title>
  </head>
      <?php include 'header.php';?>
      <?php include 'nevbar.php';?>
      <br>
      <br> 
      <div class="col-sm-4 col-md-5">
                    <h4>เพิ่มข้อมูลติดต่อ</h4>
                    <?php
                        if(isset($_GET['submit'])){
                            $art_id = $_GET['art_id'];
                            $art_name = $_GET['art_name'];
                            $art_nickname = $_GET['art_nickname'];
                            $con_gmail = $_GET['con_gmail'];
                            $con_line = $_GET['con_line'];
                            $con_ig = $_GET['con_ig'];
                            $con_call = $_GET['con_call'];

                            
                            $sql = "insert into data2_detall";
                            $sql .= " values ('$art_id','$art_name','$art_nickname','$con_gmail','$con_line','$con_ig','$con_call')";
                            include 'connectdb.php';
                            mysqli_query($conn,$sql);
                            mysqli_close($conn);
                            echo "เพิ่มชื่อติดต่อ เรียบร้อยแล้ว<br>";
                            header('refresh: 2; con_list.php');
                            
                            
                        }else{
                            
                    ?>
                    <form class="form-horizontal" role="form" name="con_add" action="<?php echo $_SERVER['PHP_SELF'];?>">
                        
                        <div class="form-group">
                            <label for="art_id" class="col-md-2 col-lg-2 control-label">ลำดับ</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="art_id" id="art_id" class="form-control">
                            </div>   
                          
                        </div> 
                        <div class="form-group">
                            <label for="art_name" class="col-md-2 col-lg-2 control-label">ชื่อ-นามสกุล</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="art_name" id="art_name" class="form-control">
                            </div>   
                          
                        </div> 
                        <div class="form-group">
                            <label for="art_nickname" class="col-md-2 col-lg-2 control-label">ชื่อเล่น</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="art_nickname" id="art_nickname" class="form-control">
                            </div>   
                          
                        </div> 
                        <div class="form-group">
                            <label for="con_gmail" class="col-md-2 col-lg-2 control-label">อีเมล</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="con_gmail" id="con_gmail" class="form-control">
                            </div>   
                          
                        </div> 
                        <div class="form-group">
                            <label for="con_line" class="col-md-2 col-lg-2 control-label">ไลน์</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="con_line" id="con_line" class="form-control">
                            </div>   
                          
                        </div> 
                        <div class="form-group">
                            <label for="con_ig" class="col-md-2 col-lg-2 control-label">ไอจี</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="con_ig" id="con_ig" class="form-control">
                            </div>   
                          
                        </div> 
                        <div class="form-group">
                            <label for="con_call" class="col-md-2 col-lg-2 control-label">เบอร์</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="con_call" id="con_call" class="form-control">
                            </div>   
                          
                        </div> 

                        <div class="form-group">
                            <div class="col-md-10 col-lg-10">
                                <input type="submit" name="submit" value="ตกลง" class="btn btn-default">
                            </div>    
                        </div> 
                    </form>
                    <?php
                        }
                    ?>
                </div>    
            </div>
        </div>











  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
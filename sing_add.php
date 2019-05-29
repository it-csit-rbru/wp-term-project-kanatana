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
                    <h4>เพิ่มข้อมูลนักร้อง</h4>
                    <?php
                        if(isset($_GET['submit'])){
                            $art_id = $_GET['art_id'];
                            $art_name = $_GET['art_name'];
                            $s_age = $_GET['s_age'];
                            $s_hight = $_GET['s_hight'];
                            $s_weight = $_GET['s_weight'];

                            
                            $sql = "insert into data3_detall";
                            $sql .= " values ('$art_id','$art_name','$s_age','$s_hight','$s_weight')";
                            include 'connectdb.php';
                            mysqli_query($conn,$sql);
                            mysqli_close($conn);
                            echo "เพิ่มชื่อนักร้อง เรียบร้อยแล้ว<br>";
                            header('refresh: 2; sing_list.php');
                            
                            
                        }else{
                            
                    ?>
                    <form class="form-horizontal" role="form" name="sing_add" action="<?php echo $_SERVER['PHP_SELF'];?>">
                        
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
                            <label for="s_age" class="col-md-2 col-lg-2 control-label">อายุ</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="s_age" id="s_age" class="form-control">
                            </div>   
                          
                        </div> 
                        <div class="form-group">
                            <label for="s_hight" class="col-md-2 col-lg-2 control-label">ส่วนสูง</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="s_hight" id="s_hight" class="form-control">
                            </div>   
                          
                        </div> 
                        <div class="form-group">
                            <label for="s_weight" class="col-md-2 col-lg-2 control-label">น้ำหนัก</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="s_weight" id="s_weight" class="form-control">
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
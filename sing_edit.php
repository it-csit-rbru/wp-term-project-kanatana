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
                    <h4>แก้ไขข้อมูลนักร้อง</h4>
                    <?php
                        $art_id = $_REQUEST['art_id'];
                        if(isset($_GET['submit'])){
                            $art_id = $_GET['art_id'];
                            $art_name = $_GET['art_name'];
                            $s_age = $_GET['s_age'];
                            $s_hight = $_GET['s_hight'];
                            $s_weight = $_GET['s_weight'];
                            $sql = "update data3_detall set ";
                            $sql .= "art_id='$art_id',art_name='$art_name',s_age='$s_age',s_hight='$s_hight',s_weight='$s_weight' ";
                            $sql .="where art_id='$art_id' ";
                            include 'connectdb.php';
                            mysqli_query($conn,$sql);
                            mysqli_close($conn);
                            echo "แก้ไขข้อมูลชื่อเพลง เรียบร้อยแล้ว<br>";
                            header('refresh: 2; sing_list.php');
                            echo '<a href="sing_list.php">แสดงรายชื่อเพลงทั้งหมด</a>';
                            
                        }else{include 'connectdb.php';
                            $sql2 = "select * from data3_detall where art_id='$art_id'";
                            $result2 = mysqli_query($conn,$sql2);
                            $row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
                            $fart_id = $row2['art_id'];
                            $fart_name = $row2['art_name'];
                            $fs_age= $row2['s_age'];
                            $fs_hight = $row2['s_hight'];
                            $fs_weight = $row2['s_weight'];
                            mysqli_close($conn);
                    ?>
                    <form class="form-horizontal" role="form" name="sing_edit" action="<?php echo $_SERVER['PHP_SELF']?>">
                       
                       
                        
                        <div class="form-group">
                            <label for="art_id" class="col-md-2 col-lg-2 control-label">ลำดับ</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="art_id" id="art_id" class="form-control" 
                                       value="<?php echo $fart_id;?>">
                            </div>    
                        </div> 

                        <div class="form-group">
                            <label for="art_name" class="col-md-2 col-lg-2 control-label">ชื่อเพลง</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="art_name" id="art_name" class="form-control" 
                                       value="<?php echo $fart_name;?>">
                            </div>    
                        </div>    

                        <div class="form-group">
                            <label for="s_age" class="col-md-2 col-lg-2 control-label">วัน</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="s_age" id="s_age" class="form-control" 
                                       value="<?php echo $fs_age;?>">
                            </div>    
                        </div>   
                        <div class="form-group">
                            <label for="s_hight" class="col-md-2 col-lg-2 control-label">เดือน</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="s_hight" id="s_hight" class="form-control" 
                                       value="<?php echo $fs_hight;?>">
                            </div>    
                        </div> 
                        <div class="form-group">
                            <label for="s_weight" class="col-md-2 col-lg-2 control-label">ปี</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="s_weight" id="s_weight" class="form-control" 
                                       value="<?php echo $fs_weight;?>">
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








<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
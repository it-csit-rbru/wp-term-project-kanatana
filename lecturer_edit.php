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
                    <h4>แก้ไขข้อมูลชื่อเพลง</h4>
                    <?php
                        $m_id = $_REQUEST['m_id'];
                        if(isset($_GET['submit'])){
                            $m_id = $_GET['m_id'];
                            $m_name = $_GET['m_name'];
                            $m_day = $_GET['m_day'];
                            $m_mon = $_GET['m_mon'];
                            $m_year = $_GET['m_year'];
                            $v_view = $_GET['v_view'];
                            $sql = "update music_detall set ";
                            $sql .= "m_id='$m_id',m_name='$m_name',m_day='$m_day',m_mon='$m_mon',m_year='$m_year',v_view='$v_view' ";
                            $sql .="where m_id='$m_id' ";
                            include 'connectdb.php';
                            mysqli_query($conn,$sql);
                            mysqli_close($conn);
                            echo "แก้ไขข้อมูลชื่อเพลง เรียบร้อยแล้ว<br>";
                            header('refresh: 2; lecturer_list.php');
                            echo '<a href="lecturer_list.php">แสดงรายชื่อเพลงทั้งหมด</a>';
                            
                        }else{include 'connectdb.php';
                            $sql2 = "select * from music_detall where m_id='$m_id'";
                            $result2 = mysqli_query($conn,$sql2);
                            $row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
                            $fm_id = $row2['m_id'];
                            $fm_name = $row2['m_name'];
                            $fm_day = $row2['m_day'];
                            $fm_mon = $row2['m_mon'];
                            $fm_year = $row2['m_year'];
                            $fv_view = $row2['v_view'];
                            mysqli_close($conn);
                    ?>
                    <form class="form-horizontal" role="form" name="listct_edit" action="<?php echo $_SERVER['PHP_SELF']?>">
                       
                       
                        
                        <div class="form-group">
                            <label for="m_id" class="col-md-2 col-lg-2 control-label">ลำดับ</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="m_id" id="m_id" class="form-control" 
                                       value="<?php echo $fm_id;?>">
                            </div>    
                        </div> 

                        <div class="form-group">
                            <label for="m_name" class="col-md-2 col-lg-2 control-label">ชื่อเพลง</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="m_name" id="m_name" class="form-control" 
                                       value="<?php echo $fm_name;?>">
                            </div>    
                        </div>    

                        <div class="form-group">
                            <label for="m_day" class="col-md-2 col-lg-2 control-label">วัน</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="m_day" id="m_day" class="form-control" 
                                       value="<?php echo $fm_day;?>">
                            </div>    
                        </div>   
                        <div class="form-group">
                            <label for="m_mon" class="col-md-2 col-lg-2 control-label">เดือน</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="m_mon" id="m_mon" class="form-control" 
                                       value="<?php echo $fm_mon;?>">
                            </div>    
                        </div> 
                        <div class="form-group">
                            <label for="m_year" class="col-md-2 col-lg-2 control-label">ปี</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="m_year" id="m_year" class="form-control" 
                                       value="<?php echo $fm_year;?>">
                            </div>    
                        </div> 
                        <div class="form-group">
                            <label for="v_view" class="col-md-2 col-lg-2 control-label">ยอดวิว</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="v_view" id="v_view" class="form-control" 
                                       value="<?php echo $fv_view;?>">
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
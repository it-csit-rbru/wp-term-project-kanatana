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
                    <h4>เพิ่มข้อมูลเพลง</h4>
                    <?php
                        if(isset($_GET['submit'])){
                            $m_id = $_GET['m_id'];
                            $m_name = $_GET['m_name'];
                            $m_day = $_GET['m_day'];
                            $m_mon = $_GET['m_mon'];
                            $m_year = $_GET['m_year'];
                            $v_view = $_GET['v_view'];
                            
                            $sql = "insert into music_detall";
                            $sql .= " values ('$m_id','$m_name','$m_day','$m_mon','$m_year','$v_view')";
                            include 'connectdb.php';
                            mysqli_query($conn,$sql);
                            mysqli_close($conn);
                            echo "เพิ่มชื่อเพลง เรียบร้อยแล้ว<br>";
                            header('refresh: 2; lecturer_list.php');
                            
                            
                        }else{
                            
                    ?>
                    <form class="form-horizontal" role="form" name="lecturer_add" action="<?php echo $_SERVER['PHP_SELF'];?>">
                        
                        
                        <div class="form-group">
                            <label for="m_id" class="col-md-2 col-lg-2 control-label">ลำดับ</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="m_id" id="m_id" class="form-control">
                            </div>   
                          
                        </div> 
                        <div class="form-group">
                            <label for="m_name" class="col-md-2 col-lg-2 control-label">ชื่อเพลง</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="m_name" id="m_name" class="form-control">
                            </div>   
                          
                        </div> 
                        <div class="form-group">
                            <label for="m_day" class="col-md-2 col-lg-2 control-label">วัน</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="m_day" id="m_day" class="form-control">
                            </div>   
                          
                        </div> 
                        <div class="form-group">
                            <label for="m_mon" class="col-md-2 col-lg-2 control-label">เดือน</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="m_mon" id="m_mon" class="form-control">
                            </div>   
                          
                        </div> 
                        <div class="form-group">
                            <label for="m_year" class="col-md-2 col-lg-2 control-label">ปี</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="m_year" id="m_year" class="form-control">
                            </div>  
                            </div>
                             
                            <div class="form-group">
                            <label for="v_view" class="col-md-2 col-lg-2 control-label">ยอดวิว</label>
                            <div class="col-md-10 col-lg-10">
                                <select name="v_view" id="v_view" class="form-control"> <!--56ถึง69สร้างแถปตวเลือกคำนำหน้า-->
                                <?php
                                    include 'connectdb.php';
                                    $sql =  'SELECT * FROM view order by v_id';
                                    $result = mysqli_query($conn,$sql);
                                    while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) { 
                                        echo '<option value=';              
                                        echo '"' . $row['v_id'] . '">';
                                        echo $row['v_view'];
                                        echo '</option>';
                                    }
                                    mysqli_free_result($result);
                                    echo '</table>';
                                    mysqli_close($conn);
                                ?>
                                </select>
                           </div>    
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
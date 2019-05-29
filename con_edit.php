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
                    <h4>แก้ไขข้อมูลติดต่อ</h4>
                    <?php
                        $m_id = $_REQUEST['art_id'];
                        if(isset($_GET['submit'])){
                            $art_id = $_GET['art_id'];
                            $art_name = $_GET['art_name'];
                            $art_nickname = $_GET['art_nickname'];
                            $con_gmail = $_GET['con_gmail'];
                            $con_line = $_GET['con_line'];
                            $con_ig = $_GET['con_ig'];
                            $con_call = $_GET['con_call'];
                            $sql = "update data2_detall set ";
                            $sql .= "art_id='$art_id',art_name='$art_name',art_nickname='$art_nickname',con_gmail='$con_gmail',con_line='$con_line',con_ig='$con_ig',con_call='$con_call' ";
                            $sql .="where art_id='$art_id' ";
                            include 'connectdb.php';
                            mysqli_query($conn,$sql);
                            mysqli_close($conn);
                            echo "แก้ไขข้อมูลติดต่อ เรียบร้อยแล้ว<br>";
                            header('refresh: 2; con_list.php');
                            echo '<a href="con_list.php">แสดงรายชื่อเพลงทั้งหมด</a>';
                            
                        }else{include 'connectdb.php';
                            $sql2 = "select * from data2_detall where art_id='$art_id'";
                            $result2 = mysqli_query($conn,$sql2);
                            $row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
                            $fart_id = $row2['art_id'];
                            $fart_name = $row2['art_name'];
                            $fart_nickname= $row2['art_nickname'];
                            $fcon_gmail = $row2['con_gmail'];
                            $fcon_line = $row2['con_line'];
                            $fcon_ig = $row2['con_ig'];
                            $fcon_call = $row2['con_call'];
                            mysqli_close($conn);
                    ?>
                    <form class="form-horizontal" role="form" name="con_edit" action="<?php echo $_SERVER['PHP_SELF']?>">
                       
                       
                        
                        <div class="form-group">
                            <label for="art_id" class="col-md-2 col-lg-2 control-label">ลำดับ</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="art_id" id="art_id" class="form-control" 
                                       value="<?php echo $fart_id;?>">
                            </div>    
                        </div> 

                        <div class="form-group">
                            <label for="art_name" class="col-md-2 col-lg-2 control-label">ชื่อ-นามสกุล</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="art_name" id="art_name" class="form-control" 
                                       value="<?php echo $fart_name;?>">
                            </div>    
                        </div>    

                        <div class="form-group">
                            <label for="art_nickname" class="col-md-2 col-lg-2 control-label">ชื่อเล่น</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="art_nickname" id="art_nickname" class="form-control" 
                                       value="<?php echo $fart_nickname;?>">
                            </div>    
                        </div>   
                        <div class="form-group">
                            <label for="con_gmail" class="col-md-2 col-lg-2 control-label">อีเมล</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="con_gmail" id="con_gmail" class="form-control" 
                                       value="<?php echo $fcon_gmail;?>">
                            </div>    
                        </div> 
                        <div class="form-group">
                            <label for="con_line" class="col-md-2 col-lg-2 control-label">ไลน์</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="con_line" id="con_line" class="form-control" 
                                       value="<?php echo $fcon_line;?>">
                            </div>    
                        </div> 
                        <div class="form-group">
                            <label for="con_ig" class="col-md-2 col-lg-2 control-label">ไอจี</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="con_ig" id="con_ig" class="form-control" 
                                       value="<?php echo $fcon_ig;?>">
                            </div>    
                        </div> 
                        <div class="form-group">
                            <label for="con_call" class="col-md-2 col-lg-2 control-label">เบอร์</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="con_call" id="con_call" class="form-control" 
                                       value="<?php echo $fcon_call;?>">
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
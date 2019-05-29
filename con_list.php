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
   
  <body>
      <?php include 'header.php';?>
      <?php include 'nevbar.php';?>
      <br>
      <br>
      <div class="container">
                    <h4>แสดงข้อมูลติดต่อ</h4>
                    <a href="con_add.php" class="btn btn-link">เพิ่มข้อมูลติดต่อ</a>
                    <div class="container">
                    <div class="row justify-content-md-center">
                    <div class="table-responsive-sm">
                    <table class="table table-bordered table-secondary">
                                <thead>
                                <tr>
                                    <th scope="col">ลำดับ</th>
                                    <th scope="col">ชื่อ-นามสกุล</th>
                                    <th scope="col">ชื่อเล่น</th>
                                    <th scope="col">อีเมล</th>
                                    <th scope="col">ไลน์</th>
                                    <th scope="col">ไอจี</th>
                                    <th scope="col">เบอร์</th>
                                  </tr>
                                </thead>                       
                              
                            
                            <tbody>
                    <?php
                        include 'connectdb.php';                        
                        $sql =  'SELECT * FROM data2_detall order by art_id';
                        $result = mysqli_query($conn,$sql);
                        while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
                            echo '<tr>';
                            echo '<td>' . $row['art_id'] . '</td>';
                            echo '<td>' . $row['art_name'] .'</td>';
                            echo '<td>' . $row['art_nickname'] .'</td>';
                            echo '<td>' . $row['con_gmail'] .'</td>';
                            echo '<td>' . $row['con_line'] .'</td>';
                            echo '<td>' . $row['con_ig'] .'</td>';
                            echo '<td>' . $row['con_call'] .'</td>';
                           
                            echo '<td>';
                            ?>
                                <a href="con_edit.php?art_id=<?php echo $row['art_id'];?>" class="btn btn-success">แก้ไข</a>
                                <a href="JavaScript:if(confirm('ยืนยันการลบ')==true)
                                   {window.location='con_delete.php?art_id=<?php echo $row["art_id"];?>'}" class="btn btn-danger">ลบ</a>
                            <?php
                                    echo '</td>';                            
                            echo '</tr>';
                        }
                        mysqli_free_result($result);
                        echo '</table>';
                        mysqli_close($conn);
                    ?>
                            </tbody>
                        </table>    
                </div>    
              </div>
            </div>
          </div>
          <br>
          <br>
          <br>
          <br>
        
      
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
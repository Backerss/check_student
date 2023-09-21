<?php
include "include/db_connect_oo.php";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "include/include_head.php"; ?>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <?php include "include/include_spinner.php"; ?>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0" id="home">

            <!-- Navbar เริ่มเมนูด้านบน -->
            <?php //include "include/include_navbar.php"; ?>
            <!-- Navbar จบเมนูด้านบน -->

           
        </div>
        <!-- Navbar & Hero End -->


        <!-- Feature Start -->
        
        <!-- Feature End -->


        <!-- About Start -->
        
        <!-- About End -->


        <!-- Overview Start -->
        
        <!-- Overview End -->


        <!-- Advanced Feature Start -->
        <div class="container-xxl py-6" id="features">
            <div class="container">
                <div class="mx-auto text-end wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">

                    <h1 class="mb-3">รหัสวิชา 00000 ออกแบบเทคโน ม.3/2</h1>
                    <div class="col-md-5 float-end">
                                <div class="form-floating">
                                    <input type="date" class="form-control" id="lastname" name="lastname" placeholder="นามสกุล" required>
                                    <label for="lastname">วัน/เดือน/ปี</label>
                                </div>
                </div>
                                         
  <thead>
    <tr>
      <th scope="col">ที่</th>
      <th scope="col">รหัสนักเรียน</th>  
      <th scope="col">ชื่อ-นามสกุล</th>
      <th scope="col">มา</th>
      <th scope="col">ลา</th>
      <th scope="col">ป่วย</th>
      <th scope="col">ขาด</th>
      <th scope="col">สาย</th>
      <th scope="col">กิจกรรม</th>
    </tr>
  </thead>
                
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>6000001</td>
                      <td>นาย สมรัก สมัครใจ</td>
                      <td><input type="radio" name="" id=""></td>
                      <td><input type="radio" name="" id=""></td>
                      <td><input type="radio" name="" id=""></td>
                      <td><input type="radio" name="" id=""></td>
                      <td><input type="radio" name="" id=""></td>
                      <td><input type="radio" name="" id=""></td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>6000002</td>
                      <td>นาย นาย นาย</td>
                      <td><input type="radio" name="" id=""></td>
                      <td><input type="radio" name="" id=""></td>
                      <td><input type="radio" name="" id=""></td>
                      <td><input type="radio" name="" id=""></td>
                      <td><input type="radio" name="" id=""></td>
                      <td><input type="radio" name="" id=""></td>
                    </tr>
                  </tbody>
                
</table>
<a href="cs_bb.php" class="btn btn-warning" >แก้ไข</a>


                                </div>
                            </div>
                        
        </div>
        <!-- Advanced Feature End -->


        


        


       


    
        

        <!-- Footer Start -->
        <?php //include "include/include_footer.php"; ?>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <?php include "include/include_script.php"; ?>
</body>

</html>
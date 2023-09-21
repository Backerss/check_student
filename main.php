<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>

<body>

    <?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";
?>

</body>

</html>
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
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">รายชื่อสมาชิก</h1>
                    <p class="mb-5">รหัส 64 ปีการศึกษา 2566 เทอมที่ 1 รายวิชาการประยุกต์ใช้ข้อมูลเพื่อการตัดสินใจ</p>
                </div>
                <!-- เริ่มสมัครสมาชิก -->
                <div class="row registration-form wow fadeInUp" data-wow-delay="0.5s">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-8">
                        <h2>Registration Form</h2>
                        <form action="input_regis.php" method="post">
                            <div class="row g-3">
                                <div class="col-md-2">
                                    <div class="form-floating">
                                        <!-- <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label> -->
                                        <select class="form-select" style="padding-top: 10px;" id="pf_id" name="pf_id"
                                            required>
                                            <option disabled selected>คำนำหน้า</option>
                                            <option value="1">นาย</option>
                                            <option value="2">นางสาว</option>
                                            <option value="3">นาง</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="ชื่อ"
                                            required>
                                        <label for="name">ชื่อ</label>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="lastname" name="lastname"
                                            placeholder="นามสกุล" required>
                                        <label for="lastname">นามสกุล</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Your Email" required>
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="phone" name="phone"
                                            placeholder="เบอร์โทรศัพท์" required>
                                        <label for="phone">เบอร์โทรศัพท์</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name_school" name="name_school"
                                            placeholder="ชื่อโรงเรียน" required>
                                        <label for="subject">ชื่อโรงเรียน</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating">
                                        <select class="form-select" style="padding-top: 10px;" id="e_group"
                                            name="e_group" required>
                                            <option disabled selected>กลุ่มสาระการเรียนรู้</option>
                                            <?php $sql1 = "SELECT * 
                                                    FROM cs_learninggroup"; 
                                            $learninggroup = get_data($conn,$sql1);
                                            //print_r($learninggroup);
                                            //echo count($learninggroup);
                                            for($xyzc = 0;$xyzc<=count($learninggroup)-1;$xyzc++){
                                                ?>
                                            <option value="<?php echo $learninggroup[$xyzc]['id'] ?>">
                                                <?php echo $learninggroup[$xyzc]['name_group'] ?></option>
                                            <?php
                                            }
                                            
                                        ?>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="password" name="password"
                                            placeholder="รหัสผ่าน" required>
                                        <label for="password">รหัสผ่าน</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="re_password" name="re_password"
                                            placeholder="ยืนยันรหัสผ่าน" required>
                                        <label for="re_password">ยืนยันรหัสผ่าน</label>
                                    </div>
                                </div>
                                <!-- <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div> -->
                                <div class="col-12">
                                    <button class="btn btn-primary rounded-pill py-3 px-5"
                                        type="submit">สมัครสมาชิก</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- จบสมัครสมาชิก -->
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
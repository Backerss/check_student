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
                <div class="mwow fadeInUp" data-wow-delay="0.1s">
                        <div class="row">
                            <div class="col-4 mx-auto">
                                <h1 class="text-center">แก้ไขข้อมูลการเช็คชื่อ</h1>
                                <div class="form-floating">
                                    <select class="form-select mb-2 mt-5" id="yearnumber" aria-label="Default select example">
                                        <option selected>ปีการศึกษา</option>
                                        <?php 
                                            $sql = "SELECT * FROM  cs_yearnumber ";
                                            $result = mysqli_query($conn, $sql);

                                            while($row = mysqli_fetch_assoc($result))
                                            {
                                                echo "<option value='". $row["id"] . "'>" . $row["yearnumber"] . "</option>";
                                            }
                                        ?>

                                    </select>
                                    <select class="form-select" id="subject" aria-label="Default select example">
                                        <option selected>รายวิชา</option>
                                        <?php

                                            $sql = "SELECT * FROM  cs_subject";
                                            $result = mysqli_query($conn, $sql);

                                            while($row = mysqli_fetch_assoc($result))
                                            {
                                            
                                                echo "<option value='". $row["id"] . "'>". $row["sj_code"] ." ". $row["sj_name"] ." </option>";
                                            }
                                        
                                        ?>
                                    </select>
                            

                                </div>
                                <div class="d-grid gap-2 mt-5">
                                    <a href="cs_bb.php" class="btn btn-warning">เลือก</a>
                                </div>
                            </div>

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
        <script>
        // $(document).ready(function() {
        //     $.ajax({
        //         url: './getyear.php',
        //         type: 'GET',
        //         success: function(data) {
        //             let newdata = JSON.parse(data);
        //             let option = []
        //             newdata.forEach(element => {
        //                 console.log(element);
        //                 option.push('<option value=' + element.id + '>' + element.name_group + '</option>')
        //             });
        //             $("#group-list").append(option);
        //         }
        //     })
        // })

        // function subjectID(event) {
        //     // var subjectID = event;
        //     // console.log(event.value);
        //     $.ajax({
        //         url: './getSubject.php',
        //         type: 'POST',
        //         data: {
        //             subjectID: event.value
        //         },
        //         success: function(data) {
        //             $("#subject-list").html('<option value="">รายวิชา</option>').append(data);
        //         }
        //     })
        // }

        $('#yearnumber').on('change', function() {

            $.ajax({
                url: 'getSubject.php',
                type: 'POST',
                data: {
                    subjectID: $(yearnumber).val()
                },
                success: function(data) {
                    //alert(data);
                    $("#subject").append(data);
                }
            })
        });
        </script>
</body>

</html>
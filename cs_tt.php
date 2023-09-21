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

        <div class="container-xxl py-6" id="features">
            <div class="container">
                <div class="wow fadeInUp" data-wow-delay="0.1s">

                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h1>ชั่วโมงรายวิชา</h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">รหัสวิชา</th>
                                        <th scope="col">ชื่อวิชา</th>
                                        <th scope="col">วันที่/เวลา</th>
                                        <th scope="col">แก้ไข</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "SELECT * FROM cs_check";
                                    $result = mysqli_query($conn, $sql);
                                    

                                    while ($row = mysqli_fetch_assoc($result)) {


                                        $sql2 = "SELECT * FROM cs_subject WHERE id = " . $row["sj_id"];
                                        $result2 = mysqli_query($conn, $sql2);
                                        $row2 = mysqli_fetch_assoc($result2);

                                        

                                        echo "<tr>";
                                        echo "<td>" . $row2["sj_code"] . "</td>";
                                        echo "<td>" . $row2["sj_name"] . " (". $row2["sj_studentroom"] .") </td>";
                                        echo "<td>" . $row["check_datetime"] . "</td>";
                                        echo "<td> <a href='cs_bb.php?id_check=" . $row["id"] . "&id_subject=" . $row2["id"] . "' class='btn btn-info'>แก้ไข</a> </td>";
                                        echo "</tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
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
</body>

</html>
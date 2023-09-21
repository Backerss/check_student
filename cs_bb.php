<?php
include "include/db_connect_oo.php";



    //get act ?id from url
    $id_check = $_GET['id_check'];
    $id_subject = $_GET['id_subject'];


    $sql = "SELECT * FROM `cs_subject` WHERE id = ". $id_subject . ";";
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);

    $suject = $row["sj_code"] . " " . $row["sj_name"] . " (" . $row["sj_studentroom"] . ")";
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "include/include_head.php"; ?>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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

                    <h1 class="mb-3"><?php echo $suject ?></h1>
                    <div class="col-md-5 float-end">
                        <div class="form-floating">
                        </div>
                    </div>
                    <table class="table">
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
                            <?php
                            

                            $sql = "SELECT * FROM `cs_subject` WHERE id = ". $id_subject . ";";
                            $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_assoc($result);

                            $sj_studentcode_decode = json_decode($row["sj_studentcode"]);
                            $sj_studentname_decode = json_decode($row["sj_studentname"]);

                            $i = 1;

                            $sql2 = "SELECT * FROM `cs_check` WHERE id = ". $id_check . ";";
                            $result2 = mysqli_query($conn, $sql2);

                            $row2 = mysqli_fetch_assoc($result2);

                            $check_name_decode = json_decode($row2["check_name"]);

                            $data = array();


                            $length = count($sj_studentcode_decode);

                            for ($i = 0; $i < $length; $i++) {

                                if (isset($sj_studentcode_decode[$i]) && isset($sj_studentname_decode[$i]) && isset($check_name_decode[$i])) {
                                    $data[] = array(
                                        'studentcode' => $sj_studentcode_decode[$i],
                                        'studentname' => $sj_studentname_decode[$i],
                                        'checkname' => $check_name_decode[$i]
                                    );
                                } else {

                                }
                            }

                            // แสดงผล
                            $i = 1;
                            foreach ($data as $key => $value) {
                                

                                                    
                                echo "<tr>";
                                echo "<td>" . $i . "</td>";
                                echo "<td>" . $value['studentcode'] . "</td>";
                                echo "<td>" . $value['studentname'] . "</td>";
                                echo "<td> <input type='radio' name='check" . $i . "' value='มา'> </td>";
                                echo "<td> <input type='radio' name='check" . $i . "' value='ลา'> </td>";
                                echo "<td> <input type='radio' name='check" . $i . "' value='ป่วย'> </td>";
                                echo "<td> <input type='radio' name='check" . $i . "' value='ขาด'> </td>";
                                echo "<td> <input type='radio' name='check" . $i . "' value='สาย'> </td>";
                                echo "<td> <input type='radio' name='check" . $i . "' value='กิจกรรม'> </td>";

                                
                                echo "</tr>";

                                $i++;
                                
                            }

                    

                            
                             
                        
                            
                            
                            
                            ?>
                        </tbody>

                    </table>
                    <a id="btn-submit-edit" class="btn btn-success">แก้ไข</a>
                    <a href="#" class="btn btn-danger">ยกเลิก</a>
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


    <script>
        $(document).ready(function() {
            
            //get data from $data array
            var data = <?php echo json_encode($data); ?>;

            //get length of array
            for (let i = 0; i < data.length; i++) {
                if(data[i].checkname == "มา"){
                    $("input[name=check" + (i+1) + "][value='มา']").prop("checked", true);
                }else if(data[i].checkname == "ลา"){
                    $("input[name=check" + (i+1) + "][value='ลา']").prop("checked", true);
                }else if(data[i].checkname == "ป่วย"){
                    $("input[name=check" + (i+1) + "][value='ป่วย']").prop("checked", true);
                }else if(data[i].checkname == "ขาด"){
                    $("input[name=check" + (i+1) + "][value='ขาด']").prop("checked", true);
                }else if(data[i].checkname == "สาย"){
                    $("input[name=check" + (i+1) + "][value='สาย']").prop("checked", true);
                }else if(data[i].checkname == "กิจกรรม"){
                    $("input[name=check" + (i+1) + "][value='กิจกรรม']").prop("checked", true);
                }
                
            }


            $('#btn-submit-edit').click(function() {
                var data = <?php echo json_encode($data); ?>;
                var id_check = <?php echo $id_check; ?>;
                var id_subject = <?php echo $id_subject; ?>;
                var check = [];
                var studentcode = [];
                var studentname = [];

                for (let i = 0; i < data.length; i++) {
                    check.push($("input[name=check" + (i+1) + "]:checked").val());
                    studentcode.push(data[i].studentcode);
                    studentname.push(data[i].studentname);
                }




                $.ajax({
                    url: "cs_bb_edit.php",
                    method: "POST",
                    data: {
                        type: "edit",
                        ide_check: id_check,
                        ide_subject: id_subject,
                        check: JSON.stringify(check),
                        studentcode: JSON.stringify(studentcode),
                        studentname: JSON.stringify(studentname)
                    },
                    success: function(data) {
                        Swal.fire({
                            icon: 'success',
                            title: 'แก้ไขข้อมูลสำเร็จ',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    }
                });
            });
            

        })
    </script>

    

</html>

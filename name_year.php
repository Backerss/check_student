<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <title>การจัดการปีการศึกษา</title>
    </head>
    <body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
          <i class="fas fa-bars"></i>
        </label>
        <label class="logo">การจัดการปีการศึกษา</label>
        <ul>
        <li><a class="active" href="index.php">ปีการศึกษา</a></li>
        <li><a href="formAdd.php">เพิ่มปีการศึกษา</a></li>
        <li><a href="name_year.php">จัดการปีการศึกษา</a></li>
        <li><a href="#">ออกจากระบบ</a></li>
      </ul>
      </nav>
      <link rel="stylesheet" href="styles.css" />
    <div id="message"></div>

        <div class="container">
            <div class="row">
                <div class="col-md-12"> <br>
                    <h3>การจัดการปีการศึกษา <a href="formAdd.php" class="btn btn-info">+เพิ่มข้อมูล</a> </h3>
                    <table class="table table-striped  table-hover table-responsive table-bordered">
                        <thead>
                            <tr>
                                <th width="5%">ลำดับ</th>
                                <th width="40%">ปีการศึกษา</th>
                                <th width="45%">เทอม</th>
                                <th width="5%">แก้ไข</th>
                                <th width="5%">ลบ</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            //คิวรี่ข้อมูลมาแสดงในตาราง
                            require_once 'connect.php';
                            $stmt = $conn->prepare("SELECT* FROM tbl_year");
                            $stmt->execute();
                            $result = $stmt->fetchAll();
                            $i=1;
                            foreach($result as $k) {
                            ?>
                            <tr>
                                <td><?= $i;?></td>
                                <td><?= $k['e_year'];?></td>
                                <td><?= $k['term'];?></td>
                                <td><a href="formEdit.php?id=<?= $k['id'];?>" class="btn btn-warning btn-sm">แก้ไข</a></td>
                                <td><a href="del.php?id=<?= $k['id'];?>" class="btn btn-danger btn-sm" onclick="return confirm('ยืนยันการลบข้อมูล !!');">ลบ</a></td>
                            </tr>
                            <?php $i++;} ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
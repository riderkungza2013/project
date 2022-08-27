<?php
      include('h.php');
                //1. เชื่อมต่อ database:
                include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
                //2. query ข้อมูลจากตาราง tb_admin:
                $query = "SELECT * FROM tbl_member ORDER BY member_id ASC" or die("Error:" . mysqli_error());
                //3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
                $result = mysqli_query($con, $query);
                //4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
                echo ' <table class="table table-hover">';
                  //หัวข้อตาราง 
                    echo "
                    <tr bgcolor = '#85929E'>
                      <td>ลำดับ</td>
                      <td>user</td>
                      <td>pass</td>
                      <td>ชื่อ</td>
                      <td>เบอร์โทร</td>
                      <td>email</td>
                      <td>ที่อยู่</td>
                      <td>เเก้ไข</td>
                      <td>ลบ</td>
                      <td>date_save</td>

                    </tr>";
                
                  while($row = mysqli_fetch_array($result)) {
                  echo "<tr>";
                    echo "<td>" .$row["member_id"] .  "</td> ";
                    echo "<td>" .$row["m_user"] .  "</td> ";
                    echo "<td>" .$row["m_pass"] .  "</td> ";
                    echo "<td>" .$row["m_name"] .  "</td> ";
                    echo "<td>" .$row["m_tel"] .  "</td> ";
                     echo "<td>" .$row["m_email"] .  "</td> ";
                      echo "<td>" .$row["m_address"] .  "</td> ";
                    //แก้ไขข้อมูล
                    echo "<td><a href='member.php?act=edit&ID=$row[0]' class='btn btn-warning btn-sm'>แก้ไข</a></td> ";  
                    //ลบข้อมูล
                    echo "<td><a href='member_del_db.php?ID=$row[0]' onclick=\"return confirm('คุณต้องการลบข้อมูลนี้ หรือไม่? !!!')\" class='btn btn-danger btn-sm'>ลบ</a></td> ";
                    echo "<td>" .$row["date_save"] .  "</td> ";
                    echo "</tr>";
                  }
                echo "</table>";
                //5. close connection
                mysqli_close($con);
                ?>
<?php include'inc/header.php' ?>



  <main class="homePage p-8">
    <div class="pageHeader flex items-center justify-between">
      <div class="header flex items-center">
        <box-icon class="mr-1" name='user-circle' type='solid' color='#377cfb' ></box-icon>
        <h2 class="text-sm font-sm font-medium">All Users</h2>
      </div>
      <a href="http://localhost/userpanel/pages/addusers.php"><button class="btn btn-active btn-sm">
        Add users 
      </button></a>
    </div>

    <div class="userTable">
      <div class="overflow-x-auto">
        <table class="table w-full">
          <!-- head -->
          <thead>
            <tr>
              <th>Sl</th>
              <th>Name</th>
              <th>Father's Name</th>
              <th>Mother's Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Address</th>
              <th>Join Date</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>

            <?php 

              $sql = "SELECT * FROM users";
              $allData = mysqli_query($db , $sql);

              $sl = 0;
              
              while($row = mysqli_fetch_assoc($allData)){
                $id = $row['id'];
                $name = $row['name'];
                $email = $row['email'];
                $phone = $row['phone'];
                $address = $row['address'];
                $fatherName = $row['fatherName'];
                $MotherName = $row['MotherName'];
                $joinDate = $row['joinDate'];
                $sl++;
              ?>

                <tr class="hover">
                
                  <th><?php echo $sl ?></th>
                  <td><?php echo $name ?></td>
                  <td><?php echo  $fatherName?></td>
                  <td><?php echo $MotherName?></td>
                  <td><?php echo $email?></td>
                  <td><?php echo $phone?></td>
                  <td><?php echo $address?></td>
                  <td><?php echo $joinDate?></td>
                  <td> 
                    <div class="action flex items-center justify-center gap-1">
                      <box-icon name='edit-alt' type='solid' color='#333' ></box-icon>
                      <box-icon name='trash' color='#FF0000'></box-icon>
                     </div>
                  </td>
                
                </tr>

            <?php
              }
            ?>
            
          </tbody>

          
        </table>
      </div>
    </div>
  </main>




<?php include"inc/footer.php" ?>

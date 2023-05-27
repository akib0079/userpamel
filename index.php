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
              // Fetching all data from the database!
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
                  <td><?php echo $fatherName?></td>
                  <td><?php echo $MotherName?></td>
                  <td><?php echo $email?></td>
                  <td><?php echo $phone?></td>
                  <td><?php echo $address?></td>
                  <td><?php echo $joinDate?></td>
                  <td> 
                    <div class="action flex items-center justify-center gap-1">
                      <a href="update.php?id=<?php echo $id ?>">
                        <box-icon name='edit-alt' type='solid' color='#333' ></box-icon>
                      </a>

                      <label for="del<?php echo $id; ?>">
                        <box-icon class="cursor-pointer" name='trash' color='#FF0000'></box-icon>
                      </label>
                      
                      
                      <!-- Delete modal -->
                      <input type="checkbox" id="del<?php echo $id; ?>" class="modal-toggle" />
                      <div class="modal">
                        <div class="modal-box relative flex items-center justify-center flex-col">
                          <label for="del<?php echo $id; ?>" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" style="fill: rgba(207, 52, 21, 1)"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path><path d="M11 11h2v6h-2zm0-4h2v2h-2z"></path></svg>
                          <h3 class="text-lg font-bold text-center mt-3">Do you want to delete this user?</h3>
                          <div class="flex items-center justify-center gap-1 mt-3">
                            <label  for="del<?php echo $id; ?> text-center" class="btn btn-accent">
                              <a  href="index.php?deleteUser=<?php echo $id; ?>">Delete</a>
                            </label>
                          </div>
                        </div>
                      </div>
                     </div>
                  </td>
                
                </tr>

            <?php
              }
            ?>
            
          </tbody>
          
          <!-- Delte the user here -->
          <?php 
            if(isset($_GET['deleteUser'])){
              $delId =  $_GET['deleteUser'];
              $SQL = "DELETE FROM users WHERE id = $delId";

              $deleteProcess = mysqli_query($db, $SQL);

              if($deleteProcess){
                header("Location: index.php");
              }
              else{
                die("Mysqli Error!" . mysqli_error($db));
              }
            }
          ?>

          
        </table>
      </div>
    </div>
  </main>




<?php include"inc/footer.php" ?>

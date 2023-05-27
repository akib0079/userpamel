<?php include'./inc/header.php' ?>

<main class="addUserFrom p-5 ">
    <div class="InnerForm w-1/2 mx-auto mt-5">
      <h2 class="text-xl font-semibold"><box-icon name='add-to-queue' type='solid' color='#377cfb' ></box-icon>Update user</h2>

      <?php
        if (isset($_GET['id'])){
            $userId = $_GET['id'];

            $sql = "SELECT * FROM users WHERE id = '$userId'";
            $userData = mysqli_query($db, $sql);

            while($row = mysqli_fetch_array($userData)){
                $id         = $row['id'];
                $name       = $row['name'];
                $email      = $row['email'];
                $phone      = $row['phone'];
                $address    = $row['address'];
                $fatherName = $row['fatherName'];
                $MotherName = $row['MotherName'];
                $joinDate   = $row['joinDate'];


            ?>

            <form method="post">
                <div class="form-control">
                    <div class="field">
                    <label class="label">
                        <span class="label-text">Fullname</span>
                    </label>
                        <input hidden value="<?php echo $id ?>" type="text" required name="id" placeholder="Type fullname" class="input input-bordered w-full"/>
                        <input hidden value="<?php echo $joinDate ?>" type="text" required name="joinDate" placeholder="Type fullname" class="input input-bordered w-full"/>
                        <input value="<?php echo $name ?>" type="text" required name="name" placeholder="Type fullname" class="input input-bordered w-full"/>
                    </label>
                    </div>
                    <div class="field">
                    <label class="label">
                        <span class="label-text">Father's Name</span>
                    </label>
                        <input value="<?php echo $fatherName ?>" type="text" required name="fatherName" placeholder="Type father's Name" class="input input-bordered w-full" />
                    </label>
                    </div>
                    <div class="field">
                    <label class="label">
                        <span class="label-text">Mother's Name</span>
                    </label>
                        <input type="text" value="<?php echo $MotherName ?>" required name="motherName" placeholder="Type mother's Name" class="input input-bordered w-full" />
                    </label>
                    </div>
                    <div class="field">
                    <label class="label">
                        <span class="label-text">Email address</span>
                    </label>
                        <input type="email" value="<?php echo $email ?>" required name="email" placeholder="Type email" class="input input-bordered w-full" />
                    </label>
                    </div>
                    <div class="field">
                    <label class="label">
                        <span class="label-text">Phone</span>
                    </label>
                        <input value="<?php echo $phone ?>" type="number" required name="phone" placeholder="Type phone" class="input input-bordered w-full" />
                    </label>
                    </div>
                    <div class="field">
                    <label class="label">
                        <span class="label-text">Address</span>
                    </label>
                    <input value="<?php echo $address?>" type="textarea" required name="address" placeholder="Type address" class="input input-bordered w-full" />
                    </div>
                    <input class="btn btn-secondary mt-3" name="updateData" type="submit" value="Update Details">
                </div>
            </form>



            <?php
            }
        }
      ?>

<?php 
    
    if( isset($_POST['updateData'])){
      $id         = mysqli_real_escape_string($db , $_POST['id']) ;
      $name       = mysqli_real_escape_string($db , $_POST['name']) ;
      $fatherName = mysqli_real_escape_string($db , $_POST['fatherName']) ;
      $motherName = mysqli_real_escape_string($db , $_POST['motherName']) ;
      $email      = mysqli_real_escape_string($db , $_POST['email']) ;
      $phone      = mysqli_real_escape_string($db , $_POST['phone']) ;
      $address    = mysqli_real_escape_string($db , $_POST['address']) ;
      $joinDate   = mysqli_real_escape_string($db , $_POST['joinDate']) ;

      // SQL CODE

      $update = "UPDATE users SET name='$name', email='$email', phone='$phone', address='$address', fatherName ='$fatherName', MotherName ='$motherName',  joinDate ='$joinDate' WHERE id = $id ";
      
      $updateUsers =  mysqli_query($db , $update);
      
      if($updateUsers){
        header("Location: ./index.php");
      }
      else{
        die("MySQL Error. " . mysqli_error($db));
      }
    }

    ?>

      
    </div>

  </main>

<?php include"./inc/footer.php" ?>
<?php include'../inc/header.php' ?>
<link href="../CSS/style.css" rel="stylesheet" type="text/css" />

  <main class="addUserFrom p-5 ">
    <div class="InnerForm w-1/2 mx-auto mt-5">
      <h2 class="text-xl font-semibold"><box-icon name='add-to-queue' type='solid' color='#377cfb' ></box-icon>Add a new user</h2>

      <form method="post">
        <div class="form-control">
            <div class="field">
              <label class="label">
                <span class="label-text">Fullname</span>
              </label>
                <input type="text" required name="name" placeholder="Type fullname" class="input input-bordered w-full" />
              </label>
            </div>
            <div class="field">
              <label class="label">
                <span class="label-text">Father's Name</span>
              </label>
                <input type="text" required name="fatherName" placeholder="Type father's Name" class="input input-bordered w-full" />
              </label>
            </div>
            <div class="field">
              <label class="label">
                <span class="label-text">Mother's Name</span>
              </label>
                <input type="text" required name="motherName" placeholder="Type mother's Name" class="input input-bordered w-full" />
              </label>
            </div>
            <div class="field">
              <label class="label">
                <span class="label-text">Email address</span>
              </label>
                <input type="email" required name="email" placeholder="Type email" class="input input-bordered w-full" />
              </label>
            </div>
            <div class="field">
              <label class="label">
                <span class="label-text">Phone</span>
              </label>
                <input type="number" required name="phone" placeholder="Type phone" class="input input-bordered w-full" />
              </label>
            </div>
            <div class="field">
              <label class="label">
                <span class="label-text">Address</span>
              </label>
              <textarea type="textarea" required name="address" placeholder="Type address" class="textarea textarea-bordered h-24 w-full"></textarea>
            </div>
            <input class="btn btn-secondary mt-3" name="dataSubmit" type="submit" value="Create user">
        </div>
      </form>
    </div>


    <?php 
    
    if( isset($_POST['dataSubmit'])){

      $name       = $_POST['name'];
      $fatherName = $_POST['fatherName'];
      $motherName = $_POST['motherName'];
      $email      = $_POST['email'];
      $phone      = $_POST['phone'];
      $address    = $_POST['address'];

      // SQL CODE

      $sql = "INSERT INTO users (name , email , phone , address, fatherName , MotherName , joinDate)
      VALUES ( '$name' , '$email' , '$phone' , '$address', '$fatherName' , '$motherName' , now() )";
      
      $addUsers =  mysqli_query($db , $sql);


      if($addUsers){
        header("Location: ../index.php");
      }
      else{
        die("MySQL Error. " . mysqli_error($db));
      }




    }

    ?>

  </main>




<?php include"../inc/footer.php" ?>




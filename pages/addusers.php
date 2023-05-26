<?php include'../inc/header.php' ?>
<link href="../CSS/style.css" rel="stylesheet" type="text/css" />



  <main class="addUserFrom p-5 w-1/2 mx-auto mt-5">
    <h2 class="text-xl font-semibold"><box-icon name='add-to-queue' type='solid' color='#377cfb' ></box-icon>Add a new user</h2>

    <form action="">

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
            <input type="number" required name="phone" placeholder="Type email" class="input input-bordered w-full" />
          </label>
        </div>
        <div class="field">
          <label class="label">
            <span class="label-text">Address</span>
          </label>
          <textarea type="textarea" required name="address" placeholder="Type address" class="textarea textarea-bordered h-24 w-full" placeholder="Bio"></textarea>
        </div>
        <input class="btn btn-secondary" type="submit" value="Create user">
    </div>
    </form>
  </main>




<?php include"../inc/footer.php" ?>




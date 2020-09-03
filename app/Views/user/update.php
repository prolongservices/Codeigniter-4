<form action='#' method='POST' class='mt-4'>
  <div class="form-group">
    <label for="fname">First name</label>
    <input value='<?= $user['fname'] ?>' type="text" class="form-control" id="fname" name="fname" aria-describedby="fnameHelp" placeholder="Enter first name">

  </div>
  <div class="form-group">
    <label for="lname">Last name</label>
    <input value='<?= $user['lname'] ?>' type="text" class="form-control" id="lname" name="lname" aria-describedby="lnameHelp" placeholder="Enter last name">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input value='<?= $user['email'] ?>' type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input value='<?= $user['address'] ?>' type="text" class="form-control" id="address" name="address" aria-describedby="addressHelp" placeholder="Enter address">
  </div>
  <button type="submit" class="btn btn-primary">Update user</button>
</form>
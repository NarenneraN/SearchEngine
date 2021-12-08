<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="admin_edit_profile_style.php">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
    <?php include 'admin_navbar.php';?>
  <div class="container">
    <div class="title">Edit Profile</div>
    <div class="content">
      <form action="#">
        <div class="user-details">
          <div class="input-box">
            <span class="details">First Name</span>
            <input type="text" placeholder="Narendhiran" required>
          </div>
          <div class="input-box">
            <span class="details">Last Name</span>
            <input type="text" placeholder="Pugazhendhi" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="abc@gmail.com" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="9843409872" required>
          </div>

        </div>
        <div class="button">
          <input type="submit" value="Confirm Edit">
        </div>
      </form>
    </div>
  </div>

</body>
</html>

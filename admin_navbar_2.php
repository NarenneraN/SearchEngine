<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="admin_navbar_style.php">
    <script src="https://kit.fontawesome.com/afc6005920.js" crossorigin="anonymous"></script> <!-- to get desired icons link to font awesome-->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <!-- <i class='bx bxl-c-plus-plus icon'></i> -->
      <i class="fas fa-graduation-cap icon"></i>
        <div class="logo_name">A M R I T A</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <!-- <li>
          <i class='bx bx-search' ></i>
         <input type="text" placeholder="Search...">
         <span class="tooltip">Search</span>
      </li> -->
      <!-- Home -->
      <li>
        <a href="admin_home_page.php">
          <i class="fas fa-house-damage"></i>
          <span class="links_name">Home</span>
        </a>
         <span class="tooltip">Home</span>
      </li>
      <!-- Profile -->
      <li>
       <a href="admin_profile_page.php">
         <i class="fas fa-user-alt"></i>
         <span class="links_name">Profile</span>
       </a>
       <span class="tooltip">Profile</span>
     </li>
     <!-- Modify -->
     <li>
       <a href="admin_edit_profile.php">
         <i class="fas fa-edit"></i>
         <span class="links_name">Edit Profile</span>
       </a>
       <span class="tooltip">Edit Profile</span>
     </li>
     <!-- Upload  -->
     <li>
       <a href="admin_upload.php">
         <i class="fas fa-upload"></i>
         <span class="links_name">Upload Content</span>
       </a>
       <span class="tooltip">Upload Content</span>
     </li>

     <!-- Modify -->
     <li>
       <a href="#">
         <i class="fas fa-edit"></i>
         <span class="links_name">Modify details</span>
       </a>
       <span class="tooltip">Modify details</span>
     </li>
     <!-- Search history -->
     <li>
       <a href="#">
         <i class="fas fa-search-location"></i>
         <span class="links_name">Search history</span>
       </a>
       <span class="tooltip">Search history</span>
     </li>
     <!-- Payment History -->
     <li>
       <a href="#">
         <i class="far fa-money-bill-alt"></i>
         <span class="links_name">Payment History</span>
       </a>
       <span class="tooltip">Payment History</span>
     </li>
     <!-- Renewal history -->
     <li>
       <a href="#">
         <i class="fab fa-rev"></i>
         <span class="links_name">Renewal history</span>
       </a>
       <span class="tooltip">Renewal history</span>
     </li>
     <li>
       <a href="#">
         <i class="fas fa-chart-line"></i>
         <span class="links_name">Analysis</span>
       </a>
       <span class="tooltip">Analysis</span>
     </li>
     <li class="profile">
         <div class="profile-details">
           <div class="name_job">
             <div class="name">XYZW</div>
             <div class="job">ADMINISTRATOR</div>
           </div>
         </div>
         <i class='bx bx-log-out' id="log_out" ></i>
     </li>
    </ul>
  </div>

  <script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
  });

  searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
  });

  // following are the code to change sidebar button(optional)
  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
   }
  }
  </script>
</body>
</html>

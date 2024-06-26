<!DOCTYPE html>

<html>
   <head>
      <title>Manage Staff</title>
      <meta charset="utf-8">
      <link rel="stylesheet" href="../style/admin.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
      <script src="../library/jquery/jquery.min.js"></script>
      <link rel="stylesheet" href="../boostrap/css/bootstrap.css">
      <script src="../boostrap/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="../library/sweetalert2/dist/sweetalert2.min.css">
      <script src="../library/sweetalert2/dist/sweetalert2.min.js"></script>
   </head>
   <body>
      <style>
         .sidebar__link:nth-child(7) {
         background-color: rgba(38, 107, 197, 0.5);
         }
      </style>
      <div class="containers">
         <?php require_once("Navbar.html") ?> 
         <main>
            <div class="main__container">
               <div class="mt-3">
                  <!-- <H3>WELCOME TO ADMIN</H3> -->
                  <div class="wrapper"> <?php
                     include("config/config.php"); 
                     include("modules/main.php"); 
                     ?> 
                  </div>
               </div> 
            </div>
         </main>
         <?php require_once("sidebar.html"); ?> 
      </div>
      <div class="modal" id="EditModal">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <h4 class="modal-title">Nhập thông tin cần sửa</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
               </div>
               <div class="modal-body">
                  <form enctype="multipart/form-data" action="../php/Airline/UpdateAirline.php" method="post" id="edit-form">
                     <input hidden type="text" id="HiddenAirlineID" name="HiddenAirlineID">
                     <div class="col-md-12">
                        <lable>Mã hãng hàng không:</lable>
                        <input maxlength="2" class="form-control" type="text" id="AirlineIDTemp" name="AirlineID">
                     </div>
                     <div class="col-md-12">
                        <lable>Tên hãng hàng không:</lable>
                        <input class="form-control" type="text" id="AirlineNameTemp" name="AirlineName">
                     </div>
                     <div class="col-md-12">
                        <lable>Quốc gia:</lable>
                        <select class="form-control" id="CountryIDTemp" name="CountryID">
                           <option value="">Chọn quốc gia</option>
                        </select>
                     </div>
                     <div class="col-md-12">
                        <lable>Ảnh:</lable>
                        <input class="form-control" type="file" id="AirlineImageTemp" name="AirlineImage">
                     </div>
                  </form>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Hủy</button>
                  <button type="button" class="btn btn-danger" id="Confirm">Cập nhật</button>
               </div>
            </div>
         </div>
      </div>
      <script src="../config/AdminResponsive.js"></script>
      <script type="module" src="../config/ManageAirline.js"></script>
   </body>

</html>
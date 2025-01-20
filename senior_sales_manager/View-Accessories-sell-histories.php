<?php
session_start();
include'../php/server.php';
?>
<script>
  function show_accessories_type1(str){
    if (str == '') {
      document.getElementById("display_Accessories_types1").innerHTML = "";
    } else {
       var xmlhttp = new XMLHttpRequest();
       xmlhttp.onreadystatechange = function() {
      if (this.readyState  == 4 && this.status == 200) {
        document.getElementById("display_Accessories_types1").innerHTML = this.responseText;
      }
       };
       xmlhttp.open("GET","../php/xml_accessories_type1.php?ac_id="+str ,true);
       xmlhttp.send();
       

    }
  }
</script>
<script>
  function show_accessories_sub_type1(str){
    if (str == '') {
      document.getElementById("display_Accessories_sub_type1").innerHTML = "";
    } else {
       var xmlhttp = new XMLHttpRequest();
       xmlhttp.onreadystatechange = function() {
      if (this.readyState  == 4 && this.status == 200) {
        document.getElementById("display_Accessories_sub_type1").innerHTML = this.responseText;
      }
       };
       xmlhttp.open("GET","../php/xml_accessories_sub_type1.php?act_id="+str ,true);
       xmlhttp.send();
       

    }
  }
</script>
<script>
  function show_mode_account1(str){
    if (str == '') {
      document.getElementById("mode_pay_account1").innerHTML = "";
    } else {
       var xmlhttp = new XMLHttpRequest();
       xmlhttp.onreadystatechange = function() {
      if (this.readyState  == 4 && this.status == 200) {
        document.getElementById("mode_pay_account1").innerHTML = this.responseText;
      }
       };
       xmlhttp.open("GET","../php/xml_mode_of_payment_account.php?mode_of_payment="+str ,true);
       xmlhttp.send();
       

    }
  }
</script>
<!-- <script>
  function check_total(str){
    if (str == '') {
      document.getElementById("display_total_payed").innerHTML = "";
    } else {
       var xmlhttp = new XMLHttpRequest();
       xmlhttp.onreadystatechange = function() {
      if (this.readyState  == 4 && this.status == 200) {
        document.getElementById("display_total_payed").innerHTML = this.responseText;
      }
       };
       xmlhttp.open("GET","../php/xml_total_payed.php?sold_quantity="+str + "&&sp_id=<?php echo $_SESSION['sp_id'] ?>",true);
       xmlhttp.send();
       

    }
  }
</script> -->


<!-- <script>
      function setSession(sp_id) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
          }
        };
        xmlhttp.open("GET", "../php/xml_total_payed.php?sp_id=" +, true);
        xmlhttp.send();
      }

      document.addEventListener("DOMContentLoaded", function() {
        var selectElement = document.getElementById("sp_id");
        selectElement.addEventListener("change", function() {
          var selectedSpId = this.value;
          setSession(selectedSpId);
        });
      });
    </script> -->


<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Blessed-Worries</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../company_logo/eddy.png" />

    <!-- Fonts -->
   

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

   <link href="../assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- Page CSS -->
    <script src="../assets/vendor/js/helpers.js"></script>
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
  <?php 
  if (empty($_SESSION['user_info'])){
     header("location:../login.php");
  } ?>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <?php include 'sidebar.php'; ?>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <?php include 'topbar.php'; ?>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
              

              <!-- Bootstrap modals -->
              
                
                <div class="card" id="product_historie_sells">
                  
              </div> 
              <div class="modal fade" id="myModalUpdateproductsold" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel1">Accessories Sold Detail</h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body">
    <div class="alert alert-secondary" role="alert" id="error-displays" style="display:none;"></div>
    
                        <form method="POST" id="form_sold_accessories_update" enctype="multipart/form-data">

                          </form>  
                              </div>
                            
                            </div>
                          </div>
                        </div> 

                        <div class="modal fade" id="myModalUpdateaccessoriesreturn" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel1">Accessories Sold Detail</h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body">
    <div class="alert alert-secondary" role="alert" id="error-displayss" style="display:none;"></div>
    
                        <form method="POST" id="form_sold_accessories_returned" enctype="multipart/form-data">

                          </form>  
                              </div>
                            
                            </div>
                          </div>
                        </div> 
                
              </div>
              
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  copyright©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  
                  
                </div>
                
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    


    

    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/datatables-demo.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>


    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

  
    <script src="../assets/js/dashboards-analytics.js"></script>
    <script type="text/javascript" src="../js/jquery.validate.min.js"></script>
    <script>
        $(document).ready(function () {
fetch();
show_code();
   });   

    function fetch(){
      const queryString=window.location.search;
    $.ajax({ 
           url:'../php/manager-display-accessories-sells-history.php',
            type:'GET',
            data:queryString,
             // beforeSend: function () {
             //        $('#Refresh').show();
             //    },
            success: function(data) {
                $('#product_historie_sells').html(data);

            },
     });
};

function update_accessories_sold(data){
        $.ajax({
                url: '../php/manager-update-accessories-sold-form.php',
                type: 'POST',
                data: {
                  data:data
                },
              success: function(dataResult){
             $('#form_sold_accessories_update').html(dataResult);

              },
               
            });
     
     };
     function return_accessories_sold(data){
        $.ajax({
                url: '../php/manager-return-accessories-sold-form.php',
                type: 'POST',
                data: {
                  data:data
                },
              success: function(dataResult){
             $('#form_sold_accessories_returned').html(dataResult);

              },
               
            });
     
     };


     function delete_accessories_sold(data){
        $.ajax({
                url: '../php/manager_delete_accessories_sold.php',
                type: 'POST',
                data: {
                  data:data
                },
              dataType:"json",
              beforeSend:function(){
                return confirm('Are You Sure You Want To Delete This Product Sold ?');
              },
              success: function(dataResult){
              
                if (dataResult == 1) {
                  fetch();
                  show_code();
                }
                else
                {
                  fetch();
                  show_code();
                }
           

              },
              

            });
     };


</script>
<script>
        $(document).ready(function () {
          $("#form_sold_accessories_returned").validate({
            rules: {
              returned_quantity:{
                    required: true,
                },
                
            },
            messages: {
              returned_quantity:{
                    required: "",
                },
                
            //   terms: "Please accept our terms"
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
              error.addClass('invalid-feedback');
              element.closest('.form-group').append(error);
            },
            highlight: function (element, errorClass, validClass) {
              $(element).addClass('is-invalid');
            },
            unhighlight: function (element, errorClass, validClass) {
              $(element).removeClass('is-invalid');
            },


              submitHandler: function () {
             var f = $("#form_sold_accessories_returned")[0];
              var form = new FormData(f);
              $.ajax({
                url: '../php/manager_insert_return_accessories_sold.php',
                type: 'post',
                data: form,
                cache: false,
                processData: false,
                contentType: false,
                beforeSend: function () {
                    $('#update_sold_returned_product').html('Updating<i class="fa fa-solid fa-spinner fa-spin"></i>');
                    $('#update_sold_returned_product').attr("disabled", true);
                },
              success: function(dataResult){
                alert(dataResult);
                 if(dataResult == 1){
                  $("#error-displayss").show();
                  $("#error-displayss").removeClass('alert-success');
                  $("#error-displayss").addClass('alert-success');
                  $("#error-displayss").html("Returned Accessories Already Recored!!");
                  fetch();
                }
                else if(dataResult == 2){
                  $("#error-displayss").show();
                  $("#error-displayss").removeClass('alert-success');
                  $("#error-displayss").addClass('alert-success');
                  $("#error-displayss").html("Returned Accessories Well Recored!!");
                  fetch();
                }
                else {
                  $("#error-displayss").show();
                  $("#error-displayss").removeClass('alert-success');
                  $("#error-displayss").addClass('alert-danger');
                  $("#error-displayss").html("Returned Accessories Failed To Be Recorded !!");
                  fetch();
                }
                

              },
               
                 complete: function () {
                    setTimeout(function () {
                        $('#update_sold_returned_product').html('Update');
                        $('#update_sold_returned_product').attr("disabled", false);
                    }, 200);
                },


            });

}

});
        });
     
</script>
<script>
        $(document).ready(function () {
          $("#form_sold_accessories_update").validate({
            rules: {
                ac_id:{
                    required: true,
                },
                fullname:{
                    required: true,
                },
                phone_number:{
                    required: true,
                },
                Payment_Status:{
                    required: true,
                },
                mode_of_payment:{
                    required: true,
                },
                account:{
                    required: true,
                },
            },
            messages: {
              acs_id:{
                    required: "",
                },
                fullname:{
                    required: "",
                },
                phone_number:{
                    required: "",
                },
                ast_id:{
                    required: "",
                },
                fullname:{
                    required: "",
                },
                phone_number:{
                    required: "",
                },
                Payment_Status:{
                    required: "",
                },
                mode_of_payment:{
                    required: "",
                },
                account:{
                    required: "",
                },
            //   terms: "Please accept our terms"
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
              error.addClass('invalid-feedback');
              element.closest('.form-group').append(error);
            },
            highlight: function (element, errorClass, validClass) {
              $(element).addClass('is-invalid');
            },
            unhighlight: function (element, errorClass, validClass) {
              $(element).removeClass('is-invalid');
            },


              submitHandler: function () {
             var f = $("#form_sold_accessories_update")[0];
              var form = new FormData(f);
              $.ajax({
                url: '../php/manager_update_accessories_sold.php',
                type: 'post',
                data: form,
                cache: false,
                processData: false,
                contentType: false,
                beforeSend: function () {
                    $('#update_sold_accessories').html('Updating<i class="fa fa-solid fa-spinner fa-spin"></i>');
                    $('#update_sold_accessories').attr("disabled", true);
                },
              success: function(dataResult){
                 if(dataResult == 1){
                  $("#error-displays").show();
                  $("#error-displays").removeClass('alert-success');
                  $("#error-displays").addClass('alert-success');
                  $("#error-displays").html("Accessories Sold Well Updated !!");
                  fetch();
                }
                else {
                  $("#error-displays").show();
                  $("#error-displays").removeClass('alert-success');
                  $("#error-displays").addClass('alert-danger');
                  $("#error-displays").html("Accessories Sold Failed To Be Updated !!");
                  fetch();
                }
                

              },
               
                 complete: function () {
                    setTimeout(function () {
                        $('#update_sold_accessories').html('Update');
                        $('#update_sold_accessories').attr("disabled", false);
                    }, 200);
                },


            });

}

});
        });
     
</script>

        
  </body>
</html>

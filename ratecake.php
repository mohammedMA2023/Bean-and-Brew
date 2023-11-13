<!DOCTYPE html>
<html lang="en">
    <head>
    <style>
/* Prevent scrolling */


#popupContainer {
    transition: opacity 0.3s;
        
    display:none;
  /* Make popup responsive */
  width: 90%;
  max-width: 500px;
  left: calc(50% - 250px);

  /* Add some padding to the top and bottom of the popup */
  padding: 20px 0;

  /* Make the popup look good */
  background-color: white;
  border: 1px solid black;
  border-radius: 10px;
  z-index: 10;

  /* Position the popup in the center of the screen */
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
/* Decrease the opacity of the body to 0.5 when the popup container is visible */


#popupContainer h1 {
  text-align: center;
  font-size: 24px;
}

#popupContainer .dropdown {
  margin-bottom: 20px;
}

#popupContainer .dropdown-content {
  position: relative;
  background-color: white;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
  z-index: 1;
}

#popupContainer .dropdown-content label {
  padding: 12px 16px;
  cursor: pointer;
}

#popupContainer .dropdown-content select, #popupContainer .dropdown-content input {
  width: 100%;
  padding: 12px 16px;
  margin-bottom: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

#popupContainer .dropdown-content button {
  padding: 10px 20px;
  border-radius: 5px;
  background-color: #007bff;
  color: #fff;
  font-size: 16px;
  font-weight: 400;
  text-align: center;
  cursor: pointer;
  transition: all 0.2s ease-in-out;
}

#popupContainer .dropdown-content button:hover {
  background-color: #0069d9;
  color: #fff;
}

#popupContainer .dropdown-content button:active {
  background-color: #0059b3;
  color: #fff;
}

#popupContainer .dropdown-content label:hover {
  background-color: #f2f2f2;
}

/* Hide the popup by default */
#popupContainer {
  display: none;
}

/* Show the popup when the "Open Popup" button is clicked */
.open-popup {
  cursor: pointer;
}

.open-popup:hover {
  background-color: #f2f2f2;
}

.open-popup:active {
  background-color: #ccc;
}


    </style>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Business Casual - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
    <?php 
        include "header.php";
    
    ?>    

<div id="popupContainer" class="container border">
  <h1>Pre-Order Coffee</h1>

  <div class="dropdown">
    <div class="dropdown-content">
      <label for="myDropdown">Coffee</label>
      <select id="myDropdown" name="myDropdown">
        <option value="option1">Option 1</option>
        <option value="option2">Option 2</option>
        <option value="option3">Option 3</option>
      </select>

      <label for="datepicker">Date:</label>
      <input type="date" id="datepicker" name="datepicker">

      <label for="timepicker">Time:</label>
      <input type="time" id="timepicker" name="timepicker">

      <button onclick="hide('popupContainer')">Okay</button>
    </div>
  </div>
</div>

<section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                            <h2 class="section-heading mb-5">
                                <span class="section-heading-upper">Don't Wanna Wait?</span>
                                <span class="section-heading-lower">Pre-Order Coffee/Baked Goods</span>
                            </h2>
                            <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                                
                                <button onclick="display('popupContainer')" class="form-control">Pre-Order Coffee</button>
                                <br>
                                <br>
                                <button class="form-control">Pre-Order Baked Goods</button>
                            
                                <p class="address mb-5">
                                <em>
                                    
                                    <br>
                                    
                                </em>
                                </p>
                            <p class="mb-0">
                                <small><em></em></small>
                                <br />
</p>
<form action="login.php" method="post" enctype="multipart/form-data">
  <input type="file" name="image" />
  <input type="hidden" name="auth" value="upload"/> 
  <textarea name="review" rows="10" cols="50" placeholder="Enter the review..." required maxlength="255"></textarea>
  <textarea name="caption" rows="10" cols="50" placeholder="Enter your caption..." required maxlength="255"></textarea>

  <input type="submit" value="Upload" />
  <input type="hidden" id="width" name="width" value=" 0">
		<input type="hidden" id="time" name="time" value=" 0">
		<input type="hidden" id="height" name="height" value=" 0">
	  <input type="hidden" name="userid" placeholder="Enter your email..."><br>
		
    <input type="hidden" name="password" placeholder="Enter your password"><br>

</form>
<?php  
  if ((isset($_SESSION["error"])) && ($_SESSION["error"])){
    echo $_SESSION["error"];
    $_SESSION["error"] = "";


  } 



?>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <footer class="footer text-faded text-center py-5">
            <div class="container"><p class="m-0 small">Copyright &copy; Your Website 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    <script>
    function validateTime() {
  var selectedTime = document.getElementById('timepicker').value;
  var parts = selectedTime.split(':');
  var hours = parseInt(parts[0]);
  var minutes = parseInt(parts[1]);

  // Restrict to 9 am to 5:30 pm
  if (hours < 9 || (hours === 17 && minutes > 30) || hours > 17) {
    alert('Please select a time between 9:00 am and 5:30 pm.');
    document.getElementById('timepicker').value = ''; // Clear the input
    return false;
  } else {
    return true;
  }
}

function display(el) {
   
  document.getElementById(el).style.display = "block";
  document.body.style.overflow = "hidden";

}

function hide(el) {
  let validTime = validateTime();
  if (validTime) {
    document.getElementById(el).style.display = "none";
  } else {
    alert('Please select a time between 9:00 am and 5:30 pm.');
  }
}
    </script>
    </body>
</html>
<?php include '../connect.php'; ?>
<?php require '../config.php'; ?>
<?php
if (isset($_POST['submit'])) {
  $branchName = $_POST['branchName'];
  $branchLogo = $_FILES['branchLogo']['name'];
  $establishmentDate = $_POST['establishmentDate'];
  $gstNumber = $_POST['gstNumber'];
  $cinNumber = $_POST['cinNumber'];

  $countryBranch = $_POST['countryBranch'];
  $stateBranch = $_POST['stateBranch'];
  $cityBranch = $_POST['cityBranch'];
  $pincodeBranch = $_POST['pincodeBranch'];
  $addressBranch = $_POST['addressBranch'];

  $ownerName = $_POST['ownerName'];
  $contactNumber = $_POST['contactNumber'];
  $gender = $_POST['gender'];
  $email = $_POST['email'];

  $bankName = $_POST['bankName'];
  $ifscCode = $_POST['ifscCode'];
  $bankBranch = $_POST['bankBranch'];
  $accountNumber = $_POST['accountNumber'];

  // $branchLogo = $_FILES['branchLogo']['name'];
  $target = "E:/xampp/htdocs/GarageMgtSystem/Upload/branchMaster/".basename($branchLogo);

  $imageFileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));

  // // Check if file already exists
  if (file_exists($target)) {
    echo '<script type=text/javascript>';
    echo 'alert("Sorry, file already exists.");';
    echo 'window.location.href = "http://localhost:8080/GarageMgtSystem/module/branchMaster/add.php"';
    echo '</script>';
    exit;
  }

  // // Check file size
  if ($_FILES["branchLogo"]["size"] > 500000) {
    echo '<script type=text/javascript>';
    echo 'alert("Sorry, your file is too large.");';
    echo 'window.location.href = "http://localhost:8080/GarageMgtSystem/module/branchMaster/add.php"';
    echo '</script>';
    exit;
  }

  // // Allow certain file formats
  if (
    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif"
  ) {
    echo '<script type=text/javascript>';
    echo 'alert("Sorry, only JPG, JPEG, PNG & GIF files are allowed.");';
    echo 'window.location.href = "http://localhost:8080/GarageMgtSystem/module/branchMaster/add.php"';
    echo '</script>';
    exit;
  }
  
  if (move_uploaded_file($_FILES['branchLogo']['tmp_name'], $target)) {
    $sql = "INSERT INTO branch_master (branchName, branchLogo, establishmentDate, gstNumber, cinNumber, countryBranch, stateBranch, cityBranch, pincodeBranch, addressBranch, ownerName, contactNumber, gender, email, bankName, ifscCode, bankBranch, accountNumber) VALUES ('$branchName', '$branchLogo', '$establishmentDate', '$gstNumber', '$cinNumber', '$countryBranch', '$stateBranch', '$cityBranch', '$pincodeBranch', '$addressBranch', '$ownerName', '$contactNumber', '$gender', '$email', '$bankName', '$ifscCode', '$bankBranch', '$accountNumber')";
    $result = mysqli_query($conn, $sql);
    
    if ($result) {
      echo '<script>';
      echo 'alert("Branch Data Inserted Succefully!");';
      echo 'window.location.href = "http://localhost:8080/GarageMgtSystem/module/branchMaster/list.php"';
      echo '</script>';
    } else {
      echo '<script type=text/javascript>';
      echo 'alert("Data Insertion Failed");';
      echo '</script>';
    }
  }else{
        $msg = "Failed to upload image";
        echo $msg;exit;
      }
}
?>

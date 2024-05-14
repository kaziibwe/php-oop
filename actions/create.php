<?php
 include_once'config.php';
 ini_set('display_errors', 1);
 ini_set('display_startup_errors', 1);
include_once 'config.php';

if (isset($_POST['insert'])) {
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $emailid = $_POST['emailid'];
    $contactno = $_POST['contactno'];
    $address = $_POST['address'];

    $insertdata = new DB_con();
    $sql = $insertdata->insert($fname, $lname, $emailid, $contactno, $address);
    
    if ($sql) {
        echo "<script>alert('Record inserted successfully');</script>";
        echo "<script>window.location.href='read.php'</script>";
    } else {
        echo "<script>alert('Something went wrong. Please try again');</script>";
        echo "<script>window.location.href='read.php'</script>";
    }
}
?>

<form name="insertrecord" method="post">
    <div class="row">
        <div class="col-md-4"><b>First Name</b>
            <input type="text" name="firstname" class="form-control" required>
        </div>
        <div class="col-md-4"><b>Last Name</b>
            <input type="text" name="lastname" class="form-control" required>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4"><b>Email id</b>
            <input type="email" name="emailid" class="form-control" required>
        </div>
        <div class="col-md-4"><b>Contactno</b>
            <input type="text" name="contactno" class="form-control" maxlength="10" required>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8"><b>Address</b>
            <textarea class="form-control" name="address" required></textarea>
        </div>
    </div>
    <div class="row" style="margin-top:1%">
        <div class="col-md-8">
            <input type="submit" name="insert" value="Submit">
        </div>
    </div>
</form>

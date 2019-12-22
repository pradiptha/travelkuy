<?php
include "../php/config.php";

$sel_prov = "SELECT * FROM `regencies` where province_id='" . $_POST["prov"] . "'";
$q = mysqli_query($conn, $sel_prov);
while ($data_prov = mysqli_fetch_array($q)) {

?>
    <option value="<?php echo $data_prov["id"] ?>"><?php echo $data_prov["name"] ?></option><br>

<?php
}
?>
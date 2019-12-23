<?php
include "../php/config.php";

$sel_prov = "SELECT * FROM `destinasi` where id_provinsi='" . $_POST["prov"] . "'";
$q = mysqli_query($conn, $sel_prov);
while ($data_prov = mysqli_fetch_array($q)) {

?>
    <option value="<?php echo $data_prov["id_destinasi"] ?>"><?php echo $data_prov["nama_destinasi"] ?></option><br>

<?php
}
?>
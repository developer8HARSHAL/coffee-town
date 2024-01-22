<?php
if(isset($_POST['sub'])){
$conn=mysqli_connect("localhost","root","2003","intership");
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$password=$_POST['password'];
$q="insert into signin values('$name','$phone','$email','$password')";
mysqli_query($conn,$q);
?>
<script>
    alert("you have been successfully registered with coffee town")
</script>
<?php

}
?>

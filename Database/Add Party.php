<?php 
include 'connection.php';
if(isset($_POST['submit']))
{    
    $party_name=$_POST['party_name'];
    $candidate_name = $_POST['candidate_name'];

    #Image uploading code start    
    $party_logo_name = $_FILES['party_logo']['name'];
    $tempName = $_FILES['party_logo']['tmp_name'];
    $party_logo = "../images/$party_logo_name";

    if(is_array($_FILES)) {
        if(is_uploaded_file($tempName)) {
        move_uploaded_file($tempName, $party_logo);
    }
    else{
        echo"
        <script>
        alert('Error occur before even uploading start');
        window.location.href='../Pages/AdminPage.php';
        </script>
        ";
    }
    #Image uploading code ended    
    }
    
    // $Checkquery = "SELECT * FROM `political parties` WHERE  `party_name`= '$party_name'";
    // $result = mysqli_query($con, $Checkquery);
    //     if(mysqli_num_rows($result)==1)
    //     {
    //         echo"
    //         <script>
    //         alert('Political party already exist');
    //         window.location.href='../Pages/AdminPage.php';
    //         </script>
    //         ";
    //     }
    //     else if(mysqli_num_rows($result)==0){
    //         $query="INSERT INTO ` political parties`(`party_logo`, `party_name`, `candidate_name`) VALUES ('$party_logo','$party_name','$candidate_name')";
    //         $result = mysqli_query($con,$query);
    //         if($result)
    //         {
    //             echo"
    //             <script>
    //             alert('Party Created Successfully');
    //             window.location.href='../Pages/AdminPage.php';
    //             </script>
    //             ";
    //        }
    //         else
    //         {
    //            echo"
    //             <script>
    //             alert('Party Creation Failed');
    //             window.location.href='../Pages/AdminPage.php';
    //            </script>
    //            ";
    //        }
    //     }            
        $query="INSERT INTO ` political_parties`(`party_logo`, `party_name`, `candidate_name`) VALUES ('$party_logo','$party_name','$candidate_name')";
        $result = mysqli_query($con,$query);
        if($result)
        {
            echo"
            <script>
            alert('Party Created Successfully');
            window.location.href='../Pages/AdminPage.php';
            </script>
            ";
       }
        else
        {
           echo"
            <script>
            alert('Party Creation Failed');
            window.location.href='../Pages/AdminPage.php';
           </script>
           ";
       }
 }
 ?>
<?php
require('connection.php');
session_start();
   if(isset($_POST['VoteSubmit']))      
   {

      if(isset($_SESSION['StudentLoginId']) && $_SESSION['StudentLoginId']==true)
      {
        $voterAuthQuery = "SELECT * FROM `voter_id` WHERE stu_email = '$_SESSION[userId]'";
        $Result = mysqli_query($con,$voterAuthQuery);
        if($Result)
    {
        $voterAuthFetchedResult = mysqli_fetch_array($Result);
        $voterHistory = $voterAuthFetchedResult['vote_history'];
        if($voterHistory==0)
        {
         $partyName = $_POST['partyName'];
         $politicalPartiesQuery = "SELECT * FROM ` political_parties` WHERE party_name = '$partyName'";
         $Result = mysqli_query($con,$politicalPartiesQuery);
         if($Result)
          {
            $fetchedResult = mysqli_fetch_array($Result);
            $oldVote = $fetchedResult['vote'];
            $newVote = $oldVote + 1;
                $InsertVote = "UPDATE ` political_parties` SET `vote` = '$newVote' WHERE party_name = '$partyName'";
                $Result = mysqli_query($con,$InsertVote);
                $insertUserAsVoted = "UPDATE `voter_id` SET `vote_history` = '1' WHERE stu_email = '$_SESSION[userId]'";
                $VotedUserResult = mysqli_query($con,$insertUserAsVoted);
                if($Result &&  $VotedUserResult)
                {
                   echo"
                   <script>
                   alert('Thanks for voting');
                   window.location.href='logout.php';
                   </script>
                   ";
                }
                else{
                    echo"
                    <script>
                    alert('Error occur while saving the vote in the database');
                    window.location.href='logout.php';
                    </script>
                    ";
                }
          }
        }
        else{
            echo"
            <script>
            alert('You have already voted');
            window.location.href='logout.php';
            </script>
            ";
        }
    }
      }
      else
      {
        echo"
        <script>
        alert('Please Login first');
        window.location.href='logout.php';
        </script>
        ";
      }
   }
?>
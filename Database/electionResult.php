<!DOCTYPE html>
<html lang="en">
<?php 
include 'connection.php';
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Voting Page</title>
    <style>
        body {
            margin: 0%;
            padding: 0%;
            font-family: sans-serif;

        }

        header {
            width: 100%;
            height: 15vh;
            background: #F28E2E;
            display: flex;
            justify-content: space-evenly;
        }

        .container {
            width: 50rem;
            display: flex;
            align-items: center;
            justify-content: space-evenly;
        }

        .collegeLogo {
            height: 100%;
        }

        .collegeName {
            font-size: 2rem;
            margin: 0%;

        }

        main {
            display: flex;
            justify-content: center;
            margin-top: 3rem;
        }

        .tableContainer {
            width: 60rem;

        }
        table{
        }
        table th {
            height: 5rem;

        }
        table tr{
            border-bottom:1px solid #000;
        }
        table #firstth {
            padding: 0 6rem;
            background: #D6E9ED;
            color: #000;
            box-shadow:0px 2px 3px -1px;
        }

        #header form {
            margin: 0px;
        }
        .votingButton{
            border: none;
            background: #0D47A1; 
            height: 2rem; 
            width: 8rem; 
            font-size: 1.1rem; 
            cursor: pointer;
            color:#fff;
        }
        .votingButton:focus{
            color:red;
        }
    </style>
</head>

<body>
    <header>
        <div class="container">
            <img class="collegeLogo" src="../images/college image.png" alt="College Image">
            <h1 class="collegeName">Acropolis College Voting System</h1>
        </div>
    </header>
    <main>
        <section class="tableContainer">
            <table>
                <tr id='firstth'>
                    <th style='width: 10%;'>Election Symbol</th>
                    <th style="width:50%">Party</th>
                    <th style="width:30%">Candidate Name</th>
                    <th style='width: 10%;'>Total Votes</th>
                </tr>
                <?php
            $query = "SELECT * FROM ` political_parties`";
            $result = mysqli_query($con,$query);
        if($result)
        {
        
            if(mysqli_num_rows($result)>0)
            {
                while($res = mysqli_fetch_array($result))
                {
                ?>
                <tr>
                    <th><img width='50px' src="<?php echo $res['party_logo']?>" alt=""></th>
                    <th><?php echo $res['party_name']?></th>
                    <th><?php echo $res['candidate_name']?></th>
                    <th><?php echo $res['vote']?></th>
                </tr>
                <?php
                }
            }
        }
                ?>

            </table>
        </section>
    </main>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Rubik:wght@300;500;600;700;900&display=swap" rel="stylesheet">
   
    <title>Mail</title>
</head>
<style>
    *{
        font-family: 'Lato';
    }
    .page{
       padding:20px 7%;
        over-flow-x:auto;
    }
   .page h3{
        background-color: #f2f2f2;
        padding: 20px;
        width: 90%;
    }
    .page table{
        border-collapse: collapse;
        /* margin: 0 auto; */
    }
    th{
        background-color:#f2f2f2;
    }
    th, td{
        padding: 15px;
    }
</style>
<body>
    <div class="page">
        <h3>Sender <?=$name; ?></h3>
        <h3>Email:  <?= $email; ?></h2>
        <p> </p>
        <table border="1" width="90%">
            <tr>
                <th width="20%">Subject</th>
                <th  width="30%">Department</th>
                <th  width="50%">Message</th>
            </tr>
            <tr>
                <td> <?= $enquires; ?></td>
                <td> <?= $business; ?></td>
                <td><?= $msg_body; ?></td>
            </tr>
        </table>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="<?php echo base_url().'index.php/user/create'?>"><button>Create</button></a>
    <div>
        <table>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        
        <?php  if(!empty($users)){ 
            foreach($users as $user) {?>
            <tr>
                <td><?php echo $user['id']?></td>
                <td><?php echo $user['first_name']?></td>
                <td><?php echo $user['last_name']?></td>
                <td><a href="<?php echo base_url(). 'index.php/user/edit/'.$user['id']?>">Edit</a></td>
                <td><a href="<?php echo base_url(). 'index.php/user/delete/'.$user['id']?>">Delete</a></td>
                
            </tr>
        <?php } } else{?>
                <td>No records</td>
        <?php } ?>
        </table>
    </div>
</body>
</html>
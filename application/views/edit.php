<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit</h1><br>
    
    <br>
    <br>
    <br>
    <form method="post" name="createUser" action=" <?php echo base_url(). 'index.php/user/edit/'.$user['id']; ?>" >
        <input type="text" name="fname" value= "<?php echo set_value('fname',$user['first_name'])?>"><br>
        <?php echo form_error('fname') ?>
        <input type="text" name="lname" value= "<?php echo set_value('lname',$user['last_name'])?>">
        <?php echo form_error('lname') ?><br>
        <button>Update</button>
    </form>
    <a href="<?php echo base_url().'index.php/user/index'?>"><button>Cancel</button></a>
</body>
</html>
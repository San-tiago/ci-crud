<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <h1>create</h1><br>
    
    <br>
    <br>
    <br>
    <form method="post" name="createUser" action=" <?php echo base_url(). 'index.php/user/create' ?>" >
        <input type="text" name="fname" value= "<?php echo set_value('fname')?>"><br>
        <?php echo form_error('fname') ?>
        <input type="text" name="lname" value= "<?php echo set_value('lname')?>">
        <?php echo form_error('lname') ?><br>
        <button>Add</button>
    </form>
    <a href="<?php echo base_url().'index.php/user/index'?>"><button>Cancel</button></a>
</body>
</html>
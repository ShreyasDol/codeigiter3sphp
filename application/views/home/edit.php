<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<div class="container">
   <!-- <a href="<?php /*echo base_url('blog/index'); */?>"  class="btn  btn-warning btn-lg btn-block" >BACK</a>-->

    <div class="col-md-6 col-md-offset-3">
        <form method="post" action="<?php echo base_url('home/update'); ?>">

            <input type="hidden" name="txt_hidden_id" value="<?php echo $home->id; ?>">
            <div class="form-group">
                <label class="text-primary " for="exampleInputEmail1"> Name :</label>
                <input type="text" class="form-control" value="<?php echo $home->name; ?>" name="name" placeholder="Enter Your Name">
            </div>
            <div class="form-group">
                <label class="text-primary " for="exampleInputPassword1">E-mail :</label>
                <input type="text" class="form-control" value="<?php echo $home->email; ?>"  name="email" id="exampleInputPassword1" placeholder="Enter Your Email Id">
            </div>



            <button type="submit" name="btnUpdate" class="btn btn-info btn-lg btn-block">Update Information</button>
        </form>
    </div>
</div>
</body>
</html>
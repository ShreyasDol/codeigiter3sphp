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

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
   ADD Student</button>


<table class="table table-hover success  table-responsive ">
    <thead>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>E-mail</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>

    <?php
    if($blogs){
        foreach ($blogs as $blog){
            ?>
            <tr>
                <td> <?php echo $blog->id; ?></td>
                <td> <?php echo $blog->name; ?></td>
                <td> <?php echo $blog->email; ?></td>

                <td>
                    <a href="<?php echo base_url('home/edit/' .$blog->id); ?>" class="btn btn-primary">Edit</a>
                    <a href="<?php echo base_url('home/delete/' .$blog->id); ?>" class="btn btn-danger "
                       onclick="return confirm('Do You Want to Delete this record ?');">DELETE</a>
                </td>
            </tr>

            <?php
        }
    }
    ?>
    </tbody>

</table>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">New message</h4>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url('home/submit'); ?>" method="post">
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Name:</label>
                        <input type="text" name="name"class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">E-mail:</label>
                        <input type="email" name="email" class="form-control" id="recipient-name">
                    </div>
                    <button type="reset" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">ADDss</button>
                </form>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>
</body>
</html>
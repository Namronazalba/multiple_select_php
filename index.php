<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apsys</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                         unset($_SESSION['status']);
                    }
                ?>

                <div class="card mt-5">
                    <div class="card-header">
                        <h4>How to Insert Multiple Checkbox Values into Database in php</h4>
                    </div>
                    <div class="card-body">

                        <form action="code.php" method="POST">
                        <p><input type="checkbox" id="select_all" /> Select all</p>
                            <div class="form-group mb-3">
                                <input type="checkbox" class="checkbox" name="brands[]" value="Red MI"> Red MI <br>
                                <input type="checkbox" class="checkbox" name="brands[]" value="Samsung"> Samsung <br>
                                <input type="checkbox" class="checkbox" name="brands[]" value="Nokia"> Nokia <br>
                                <input type="checkbox" class="checkbox" name="brands[]" value="Vivo"> Vivo <br>
                                <input type="checkbox" class="checkbox" name="brands[]" value="Karbon"> Karbon <br>
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" name="save_multiple_checkbox" class="btn btn-primary">Save Multiple Checkbox</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#select_all').on('click',function(){
        if(this.checked){
            $('.checkbox').each(function(){
                this.checked = true;
            });
        }else{
             $('.checkbox').each(function(){
                this.checked = false;
            });
        }
    });
     
    $('.checkbox').on('click',function(){
        if($('.checkbox:checked').length == $('.checkbox').length){
            $('#select_all').prop('checked',true);
        }else{
            $('#select_all').prop('checked',false);
        }
    });
});
</script>

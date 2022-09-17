<!DOCTYPE html>
<html>
<head>
	<title>BANK DETAILS</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        .txt-welcome{
            font-family:Roboto ;
            font-weight: bold;
            color: #0D47A1;
            text-align: center;
            padding-top: 30px;
            font-size: 25px;
        }
        .container-wrp{
            width: 500px;
            height: 550px;
            position: absolute;
            top: 0;
            right: 0;
            left: 0;
            bottom: 0;
            margin: auto;
            padding: 10px;
            -webkit-box-shadow: 0px 0px 3px 0px rgba(0,0,0,0.75);
            -moz-box-shadow: 0px 0px 3px 0px rgba(0,0,0,0.75);
            box-shadow: 0px 0px 3px 0px rgba(0,0,0,0.75);
        }
        .main-wrp{
            padding: 10px;
        }
        
    </style>    
</head>
<body>
	<div class='container-wrp'>
        <h1 class='txt-welcome'> EDIT BANK DETAILS</h1>
        <div>
            <form class='main-wrp' action='/updateBankDB' method='post'> 
            <?php echo e(csrf_field()); ?> 
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Bank Name</label>
                    <input type="text" class="form-control" name='bank_name' value='<?php echo e($updateData->bank_name); ?>'>
                    <input type='hidden' name='id' value='<?php echo e($updateData->id); ?>'/>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Branch</label>
                    <input type="text" class="form-control" name='branch' value='<?php echo e($updateData->branch); ?>'>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Branch Code</label>
                    <input type="text" class="form-control" name='branch_code' value='<?php echo e($updateData->branch_code); ?>'>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Account Number</label>
                    <input type="text" class="form-control" name='acc_number' value='<?php echo e($updateData->acc_number); ?>'>
                </div>
                <a href="/viewAll"  class="btn btn-primary">BACK</a>
                <button class="btn btn-primary">EDIT</button>
            </form>
        </div>
        
    </div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH E:\LaravelProject\BankDetails\BankDetails\resources\views/updateBankDetails.blade.php ENDPATH**/ ?>
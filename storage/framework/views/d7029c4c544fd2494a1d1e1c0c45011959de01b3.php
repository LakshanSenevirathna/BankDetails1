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
            width: 350px;
            height: 500px;
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
        <h1 class='txt-welcome'>BANK DETAILS</h1>
        &nbsp
        <div>
            <form class='main-wrp' method='get' action='/login'> 
                  
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name='email' aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name='password'>
                </div>
                <button class="btn btn-primary">LOGIN </button>
            </form>
        </div>
        
    </div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH E:\BankDetails\BankDetails\resources\views/dashboard.blade.php ENDPATH**/ ?>
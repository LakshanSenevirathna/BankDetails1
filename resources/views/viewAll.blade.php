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
            text-align: left;
            padding-top: 30px;
            font-size: 25px;
        }
        .container-wrp{
            width: 1000px;
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
        .btn-wrp{
            padding-right: 10px;
        }
    </style>    
</head>
<body>
	<div class='container-wrp'>
        <h1 class='txt-welcome'>BANK DETAILS</h1>
        <div>
            <a href='/addBankDetails' class="btn btn-success" style="position: absolute; right: 0;"> + ADD BANK DETAILS</a>
        </div>
        &nbsp;
        <div></div>
        <div class='main-wrp'>
            
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Bank Name</th>
                        <th scope="col">Branch</th>
                        <th scope="col">Branch Code</th>
                        <th scope="col">Acc Number</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1; ?>
                    @foreach($viewAll as $viewAllRec)
                        <tr>
                            <th>{{$i++}}</th>
                            <td>{{$viewAllRec->bank_name}}</td>
                            <td>{{$viewAllRec->branch}}</td>
                            <td>{{$viewAllRec->branch_code}}</td>
                            <td>{{$viewAllRec->acc_number}}</td>
                            <td>
                                <a href='/updateBank/{{$viewAllRec->id}}' class='btn btn-outline-warning'>EDIT</a>
                                &nbsp;&nbsp;&nbsp;
                                <a href='/deleteBank/{{$viewAllRec->id}}' class='btn btn-outline-danger' onclick="return confirm('You want to delete this bank detail?');">DELETE</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
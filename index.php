<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pay here</title>
    <style type="text/css">
        button{
            width:200px;
            height:100px;
            background-color:darkblue;
            border-radius:20px;
            color:white;
            box-shadow:5px 5px 10px gray;
            cursor:pointer;
            font-size:20px;
        }

        button:hover{
            width:190px;
            height:80px;
            font-size:15px;
            box-shadow:1px 1px 5px black;
            background-color:darkblue;
        }

        span{
            color:orange;
        }
       
    </style>
</head>
<body>
    <main>
        <div>
        <button name="payBtn" type="Button" Onclick="paymentGateway()"><span>Pay</span> here</button>
        </div>
    </main>

    <!-- pay here intergration -->
    <script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>


    <!-- linked paymentGateway.js  -->
    <script src="paymentGateway.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: #26C5B5;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .calculator-card {
            background-color: #3D3D3D;
            color: white;
            width: 125%;
            max-width: 813px;
            height: 239px;
            display: flex;
            justify-content: center;
            position: relative;
            top: 300px;
            padding: 26px 7px;
            border-radius: 10px;

        }

        .card-div {

            display: flex;
            align-items: center;
        }

        h1 {
            padding-right: 10px;
            padding-left: 5px;
            border-left: 3px solid #26C5B5;
        }

        select {
            width: 100%;

            text-align: center;
            font-size: 30px;
            margin-top: 10px;
            border-radius: 10px;
        }

        .right-side {
            display: flex;
            flex-direction: column  ;
        }

        .submit {
            width: 100%;
        }

        input {
            height: 29px;
            margin-top: 10px;
            border-radius: 10px;
            border-color: transparent;
        }
    </style>
</head>

<body>
    <div class="container">
        <section class="calculator-card">
            <div class="card-div">
                <div class="left-side">
                    <h1>php <br> Calculator</h1>
                </div>
                <div class="right-side">
                    <form method="POST">
                        <input type="text" name="first_value"> <br>
                        <input type="text" name="second_value"><br>
                        <select name="calculation_type" id="calculation_type">
                            <option value="+">Addition (+)</option>
                            <option value="-">Subtraction (-)</option>
                            <option value="*">Multiplication (*)</option>
                            <option value="%">Modulus (%)</option>
                        </select>
                        <br>
                        <input type="submit" name="submit" value="submit" class="submit">
                    </form>
                    <p>
                        <?php
                            if(isset($_POST['submit'])){
                                $firtValue = $_POST['first_value'];
                                $secondValue = $_POST['second_value'];
                                $operaterValue = $_POST['calculation_type'];
                                switch($operaterValue){
                                    case "+":  echo  $firtValue + $secondValue; break;
                                    case "-":  echo  $firtValue - $secondValue; break;
                                    case "*":  echo  $firtValue * $secondValue; break;
                                    case "%":  echo  $firtValue % $secondValue; break;
                                };
                            }
                        ?>
                    </p>
                </div>
            </div>
        </section>
    </div>
</body>

</html>
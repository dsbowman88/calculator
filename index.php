<!doctype html>
<html lang="en">

<style>

</style>

<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"></head>
    <link rel="stylesheet" href="./css/main.css">
<body>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Calculator</h1>
      </div>
      <div class="col-12">
        <input id="input" type="text" maxlength="6" disabled>
      </div>
      <div class="col-12">
        <button class="numbtn btn btn-secondary">1</button>
        <button class="numbtn btn btn-secondary">2</button>
        <button class="numbtn btn btn-secondary">3</button>
        <button class="add btn btn-outline-success">+</button>
      </div>
      <div class="col-12">
        <button class="numbtn btn btn-secondary">4</button>
        <button class="numbtn btn btn-secondary">5</button>
        <button class="numbtn btn btn-secondary">6</button>
        <button class="sub btn btn-outline-success">-</button>
      </div>
      <div class="col-12">
        <button class="numbtn btn btn-secondary">7</button>
        <button class="numbtn btn btn-secondary">8</button>
        <button class="numbtn btn btn-secondary">9</button>
        <button class="div btn btn-outline-success">/</button>
      </div>
      <div class="col-12">
        <button class="numbtn btn btn-secondary">0</button>
        <button class="dec btn btn-outline-success">.</button>
        <button class="mul btn btn-outline-success">*</button>
        <button class="calc btn btn-outline-success" id="calc">=</button>
        <button class="clr btn btn-outline-danger">C</button>
      </div>
      <div class="col-12">
        <span id="result"></span> <br/>
        <span id="numberone"></span> <br/>
      </div>
    </div>
  </div>
    <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>

    <script>
        var num1 = null;
        var num2 = null;
        var status = null;
        var result = null;
        var dotchk = true;

        // Button click --> input
        $('.numbtn').click(function(){
          $('#input').val($('#input').val() + this.innerHTML);
        });
        // Decimal button with validation
        $('.dec').click(function(){
          if(dotchk)$('#input').val($('#input').val() + this.innerHTML);
          dotchk = false
        });
        // add button click with validation
        $('.add').click(function(){
            num1 = $('#input').val();
            if(num1 == ""){
                alert("Enter some digits first!");
            }
            else{
                $('#numberone').text(num1 + " +");
                $('#input').val("");
                status = "plus";
                dotchk = true;
            }
        });
        // div button click with validation
        $('.div').click(function(){
            num1 = $('#input').val();
            if(num1 == ""){
                alert("Enter some digits first!");
            }
            else{
                $('#numberone').text(num1 + " /");
                $('#input').val("");
                status = "div";
                dotchk = true;
            }
        });
        // mul button click with validation
        $('.mul').click(function(){
            num1 = $('#input').val();
            if(num1 == ""){
                alert("Enter some digits first!");
            }
            else{
                $('#numberone').text(num1 +  " *");
                $('#input').val("");
                status = "mul";
                dotchk = true;
            }
        });
        // sub button with validation
        $('.sub').click(function(){
            num1 = $('#input').val();
            if(num1 == ""){
                alert("Enter some digits first!");
            }
            else{
                $('#numberone').text(num1 + " -");
                $('#input').val("");
                status = "sub";
                dotchk = true;
            }
        });
        // Calculation function with SWITCH CASES
        $('#calc').click(function(){
            num2 = $('#input').val();
            if(num2 == ""){
                alert("Voer het tweede getal eerst in!");
            }
            else{
              dotchk = true
                switch (status){
                    case "plus":
                    result = +num1 + +num2;
                    $('#result').text(num1 + " + " + num2 + " = " + result);
                    $('#input').val("");
                    $('#numberone').text("");
                    break;
                    case "sub":
                    result = +num1 - +num2;
                    $('#result').text(num1 + " - " + num2 + " = " + result);
                    $('#input').val("");
                    $('#numberone').text("");
                    break;
                    case "mul":
                    result = +num1 * +num2;
                    $('#result').text(num1 + " * " + num2 + " = " + result);
                    $('#input').val("");
                    $('#numberone').text("");
                    break;
                    case "div":
                    result = +num1 / +num2;
                    $('#result').text(num1 + " / " + num2 + " = " + result);
                    $('#input').val("");
                    $('#numberone').text("");
                    break;
                }
            }
        });
        $('.clr').click(function(){
            $('#input').val("");
            $('#numberone').text("");
            $('#result').text("");
        })
    </script>
</body>
</html>
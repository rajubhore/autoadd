<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        

    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>    
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col"><input type="text" id="a1" ></div>
            <div class="col"><input type="text" id="a2" ></div>
            <div class="col"><input type="text" id="total" disabled></div>
        </div>
       <div>durgesh2</div> 
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            var total = 0;
            $('#a1,#a2').keyup(function(){
                var b1 = $('#a1').val();
                var b2 = $('#a2').val();
                var total = b1*b2;
                $('#total').val(total);
            });
        });
    </script>
</body>
</html>

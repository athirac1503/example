<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> 

</head>
<body>
    <label for="">Name</label>
    <input type="text" name="std_name" id=""><br><br>
    <label for="">address</label>
    <input type="text" name="std_address" id=""><br><br>
    <label for="">contact</label>
    <input type="text" name="std_contact" id=""><br><br>
    <button type="submit" name="btn_login">Student login</button>
    <p id="msg"></p>
    <script>
        $(document).ready(function(){
            $('#btn_login').click(function(){
                var name=$('#std_name').val();
                var address=$('#std_address').val();
                var contact=$('#std_contact').val();
                $.ajax({
                    type:"POST",
                    url:"add_student.php",
                    data:{
                        sname:name,
                        saddress:address,
                        scontact:contact
                    },
                    success:function(response){
                        $('msg').html(response);
                    }
                })
            })

        })
    </script>
</body>
</html>
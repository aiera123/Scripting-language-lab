<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
</head>
<body>
    <div>
        <h2>login</h2>
        <form>
            <input type="text" id ="username" name="username" placeholder="username"required>
            <input type="password" id ="password" name="password" placeholder="password"required>
            <button type="submit"> login </button>
</form>
</div>
<script>
    $(document).ready(function()){
        $("").on ("submit".function(event)){
            event.prevent Default();
            var username =$("#username").val();
            var password =$("#password").val();
            $.ajax({
                url:"login.php",
                type:"POST",
                data:{
                    username:username 
                    password:password
                },
                success.function(response){
                    if(response=="success"){
                        document.cookie="username="+username+"; /path/;"
                    }
                }
        }
    }
    </body>
</html>
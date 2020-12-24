<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        function validate(){
    //var correct_way=/^[A-Za-z]+$/;
    var a= document.getElementById("u_name").value;
    var b=document.getElementById("u_mobile").value;
    //if (a.match(correct_way)){
    //    true;

    if(isNaN(a)){
       true;

    }
    else{
        document.getElementById("name").innerHTML="** only alphabets allowed";
        return false;
    }
    if(b.length >10 ){
        document.getElementById("number").innerHTML="** Mobile Number must be 10 length ";
        return false;
    }
    if(b.length < 10 ){
        document.getElementById("number").innerHTML="** Mobile Number must be 10 length ";
        return false;
    }
}
    </script>
</head>
<body>

<form class="form-group p-4" action="" method="POST" onsubmit="return validate()">
            <input type="text"   id="u_name" name="name" class="form-control" placeholder=" Enter Your Name" required>
            <p id="name"  style="color:red;"> </p>
            <input type="number" id="u_moblie" name="mobile" class="form-control" placeholder=" Enter Your Mobile" required> 
            <p id="number" style="color:red;" > </p>
            <textarea class="form-control" name="message" name="msg" id="" cols="30" rows="4" required  placeholder="Your Message"></textarea>
            <button type="submit"  name="submit" class="my-3 btn btn-block btn-primary">Submit</button>
          </form>
         
    
</body>
</html>
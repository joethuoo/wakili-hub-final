<<<<<<< HEAD
Hey {{$name}}, Welcome to our website. <br>
Please click <a href="{{ url('verify/'.$verification_code) }}"> Here</a> to confirm email
=======
<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>Email</title>
</head>
<body>
Hello {{ $name }} thanks for registering! <br><br>
<br><br>
Please click the link to verify your registration 
<a href=”{{ url('/registration/activate'. $code) }}”>
{{ url('/registration/activate/'. $code) }}
</a><br><br><br><br><br>
Cheers,<br><br>
<p style="color:red;">Team.</p>
</body>
</html>
=======
Hey {{$name}}, Welcome to our website. <br>
Please click <a href="{{ url('verify/'.$verification_code) }}"> Here</a> to confirm email
>>>>>>> 9564e1e41622f8a142c739c48a2627944d53163c
>>>>>>> 337af3db5d98aafd17b6cd5b2d0eefcc63163183

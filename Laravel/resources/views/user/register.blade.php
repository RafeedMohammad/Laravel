
<html>
<head>

    <link href="{{asset('css/style.css')}}" rel="stylesheet" href="styles.css">
</head>
</html>

<form action="{{route('user.register')}}" method="post"enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="container">
        <h1>Register</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>

        <label for="username"><b>username</b></label>
        <input type="text" placeholder="Enter name" name="username" required >

        <label for="firstname"><b>FirstName</b></label>
        <input type="text" placeholder="Enter name" name="firstname" required>

        <label for="lastname"><b>LastName</b></label>
        <input type="text" placeholder="Enter name" name="lastname" >

        <label for="address"><b>Address</b></label>
        <input type="text" placeholder="Enter address" name="address" required >

        <label for="phone"><b>Phone</b></label>
        <input type="numeric" placeholder="Enter Phone" name="phone" required>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required >

        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="password_confirmation" required >
        <hr>
        <input type="radio" name="gender" value="male"> Male<br>
        <input type="radio" name="gender" value="female"> Female<br>
        <input type="radio" name="gender" value="other"> Other

        <button type="submit" class="register">Register</button>
    </div>

    <div class="container signin">
        <p>Already have an account? <a href="#">Sign in</a>.</p>
    </div>



</form>
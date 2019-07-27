<html>
<body>
<form action="{{route('user.update',[$user->id])}}" method="post"enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="container">
        <h1>Edit</h1>
        <hr>

        <label for="username"><b>username</b></label>
        <input type="text" placeholder="Enter name" name="username" value="{{$user->username}}" required >

        <label for="firstname"><b>FirstName</b></label>
        <input type="text" placeholder="Enter name" name="firstname" value="{{$user->firstname}}" required>

        <label for="lastname"><b>LastName</b></label>
        <input type="text" placeholder="Enter name" name="lastname" value="{{$user->lastname}}" >

        <label for="address"><b>Address</b></label>
        <input type="text" placeholder="Enter address" name="address" value="{{$user->address}}" required >

        <label for="phone"><b>Phone</b></label>
        <input type="numeric" placeholder="Enter Phone" name="phone" value="{{$user->phone}}" required>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" value="{{$user->email}}" required>



        <button type="submit" class="register">UPDATE</button>
    </div>





</form>
</body>

</html>

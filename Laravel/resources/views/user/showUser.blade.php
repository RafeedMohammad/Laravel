<html>
<body>
<table border="2px">


    <tr>
        <th>Id</th>
        <th>UserName</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Action</th>
    </tr>
    @foreach($users as $user)
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->username}}</td>
        <td>{{$user->firstname}}</td>
        <td>{{$user->lastname}}</td>
        <td>{{$user->address}}</td>
        <td>{{$user->phone}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->gender}}</td>
        <td><a href="{{route('user.edit',[$user->id])}}">Edit</a> </td>


    </tr>
        @endforeach
</table>
</body>
</html>
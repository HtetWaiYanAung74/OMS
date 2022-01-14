<h1>Member List</h1>

<table border="1">
    <tr>
        <td>id</td>
        <td>fname</td>
        <td>lname</td>
        <td>username</td>
        <td>email</td>
        <td>password</td>
        <td>employeeid</td>
        <td>role</td>
    </tr> 
    @foreach($users as $user)
    <tr>
        <td>{{$user['id']}}</td>
        <td>{{$user['fname']}}</td>
        <td>{{$user['lname']}}</td>
        <td>{{$user['username']}}</td>
        <td>{{$user['email']}}</td>
        <td>{{$user['password']}}</td>
        <td>{{$user['employeeid']}}</td>
        <td>{{$user['role']}}</td>
        <td><a class="btn btn-warning" href="{{url("/example/delete/$user->id")}}">Delete</a>
        </td>
    </tr>  
    @endforeach
      
</table>
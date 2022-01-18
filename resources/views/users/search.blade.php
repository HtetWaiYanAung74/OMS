@extends("layouts.master")

@section("content")
<div class="main-card mb-3 card">
          
           <form class="form-inline my-2 my-lg-0" type="get" action="{{ url('/search') }}">
               <input class="form-control mr-sm-2" name="query" type="search" placeholder="Search" aria-label="Search">
               <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                 <div class="card-body"><h5 class="card-title">User Accounts Table</h5>
                            <table class="mb-0 table table-hover">
                                <thead>
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
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{$user['id']}}</td>
                                            <td>{{$user['fname']}}</td>
                                            <td>{{$user['lname']}}</td>
                                            <td>{{$user['username']}}</td>
                                            <td>{{$user['email']}}</td>
                                            <td>{{$user['password']}}</td>
                                            <td>{{$user['employee_id']}}</td>
                                            <td>{{$user['role']}}</td>
                                            <td><a class="btn btn-warning" href="{{url("/example/delete/$user->id")}}">Delete</a>
                                            </td>
                                        </tr>  
                                    @endforeach
                                </tbody>
                            </table>
                    </div>
            </div>


@endsection
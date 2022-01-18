@extends("layouts.master")
@section("style")
  <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"> -->  
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
        <link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
        
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
@endsection


@section("content")
                    <div class="container">
                    <h2>User Account Table</h2>
                            <table class="mb-0 table table-hover" id="table">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>fname</th>
                                        <th>lname</th>
                                        <th>email</th>
                                        <th>password</th>
                                        <th>employeeid</th>
                                        <th>role</th>
                                    </tr> 
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{$user['id']}}</td>
                                            <td>{{$user['fname']}}</td>
                                            <td>{{$user['lname']}}</td>
                                            <td>{{$user['email']}}</td>
                                            <td>{{$user['password']}}</td>
                                            <td>{{$user['employee_id']}}</td>
                                            <td>{{$user['role']}}</td>
                                            <td>
                                                

                                            <form method="POST" action="{{ route('users.update', $user->id) }}">
                                                    @csrf
                                                    <input name="_method" type="hidden" value="UPDATE">
                                                    <button class="mb-2 mr-2 btn-transition btn btn-outline-warning"><i class="fa fa-fw"></i>
                                                </button>
                                                </form>
                                                
                                                <form method="POST" action="{{ route('users.delete', $user->id) }}">
                                                    @csrf
                                                    <input name="_method" type="hidden" value="DELETE">
                                                    <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'><i class="fa fa-fw" ></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>  
                                    @endforeach
                                </tbody>
                            </table>
                    </div>
            </div>
@endsection

@section('script')   
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.bootstrap.min.js') }}"></script>

    <script>
         jQuery(function($) {
        //initiate dataTables plugin
        var myTable = 
        $('#table')
        //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
        .DataTable( {
            bAutoWidth: false,
            "aoColumns": [
                null,
                null,
                null,
                null,
                null,
                null,
                null,
                null
            ],
            "aaSorting": [],
            
            
            //"bProcessing": true,
            //"bServerSide": true,
            //"sAjaxSource": "http://127.0.0.1/table.php"   ,
    
            //,
            //"sScrollY": "200px",
            //"bPaginate": false,
    
            //"sScrollX": "100%",
            //"sScrollXInner": "120%",
            //"bScrollCollapse": true,
            //Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
            //you may want to wrap the table inside a "div.dataTables_borderWrap" element
    
            //"iDisplayLength": 50
    
    
                select: {
                    style: 'multi'
                }
            });
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script type="text/javascript">
        $('.show_confirm').click(function(event) {
            var form =  $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({

                title: `Are you sure you want to delete this record?`,
                text: "If you delete this, it will be gone forever.",
                icon: "warning",
                buttons: true,
                dangerMode: true,

            })
            .then((willDelete) => {
                if (willDelete) {
                form.submit();
                }
            });
        });
    </script>

@endsection 



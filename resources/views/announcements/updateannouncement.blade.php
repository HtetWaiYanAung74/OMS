@extends("layouts.master")

@section("content")

            <div class="app-main__outer">
                @if($errors->any())
                    <div class="alert alert-warning">
                    <ol>
                        @foreach($errors->all() as $value)
                        <li>{{$value}}</li>
                        @endforeach
                    </ol>
                    </div>
                @endif
                    <div class="app-main__inner">
                         <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Announcement Form</h5>
                                        <form class="" method="post" action="{{url('/announcements/update/'.$edit['id'])}}">
                                            @csrf
                                            <div class="position-relative row form-group"><label for="admin" class="col-sm-2 col-form-label">Admin</label>
                                                <div class="col-sm-10">
                                                    <input name="admin" id="admin" value="Admin" type="text" class="form-control">

                                                    <p ></p>
                                                </div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="title" class="col-sm-2 col-form-label">Title<span style="color: red">*</span></label>
                                                <div class="col-sm-10">
                                                    <input name="title" id="title" placeholder="please enter title of the content" type="text" class="form-control" required="required" value="{{$edit->title}}">
                                                </div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="content" class="col-sm-2 col-form-label">Announcement<span style="color: red">*</span></label>
                                                <div class="col-sm-10"><textarea name="content" id="content" class="form-control" required="required" rows="8" placeholder="Contents">{{$edit->content}}</textarea></div>
                                            </div>

                                           
                                            
                                            <div class="text-center">
                                            <input type="Submit" class="mb-2 mr-2 btn btn-primary" value="Update" name="submit">
                                            <a href="{{url('/')}}" class="mb-2 mr-2 btn btn-danger">Cancel</a>
                                                
                                            

                                            </div>
                                        </form>
                                    </div>
                                </div>
                    </div>
                    <div class="app-wrapper-footer">
                        <div class="app-footer">
                            <div class="app-footer__inner">
                                <div class="app-footer-left">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                Footer Link 1
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                Footer Link 2
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="app-footer-right">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                Footer Link 3
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                <div class="badge badge-success mr-1 ml-0">
                                                    <small>NEW</small>
                                                </div>
                                                Footer Link 4
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>    </div>
        </div>
    </div>
@endsection


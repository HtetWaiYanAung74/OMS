@extends("layouts.master")

@section("content")

            <!-- <div class="app-main__outer">
                    <div class="app-main__inner"> -->
                         <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Announcement Form</h5>
                                        <form class="" method="post">
                                            @csrf
                                            <div class="position-relative row form-group"><label for="admin" class="col-sm-2 col-form-label">Admin</label>
                                                <div class="col-sm-10">
                                                    <input name="admin" id="admin" value="Admin" type="text" class="form-control">

                                                    <p ></p>
                                                </div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="title" class="col-sm-2 col-form-label">Title<span style="color: red">*</span></label>
                                                <div class="col-sm-10">
                                                    <input name="title" id="title" placeholder="please enter title of the content" type="text" class="form-control" required="required">
                                                </div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="content" class="col-sm-2 col-form-label">Announcement<span style="color: red">*</span></label>
                                                <div class="col-sm-10"><textarea name="content" id="content" class="form-control" required="required" rows="8" placeholder="Contents"></textarea></div>
                                            </div>

                                           
                                            
                                            <div class="text-center">
                                            <input type="Submit" class="mb-2 mr-2 btn btn-primary" value="Upload" name="submit">
                                            <button class="mb-2 mr-2 btn btn-danger" type="reset">Clear</button>
                                            

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
        <!-- </div>
    </div> -->
@endsection


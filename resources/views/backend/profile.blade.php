@extends('layout.layout_backend.app')
@section('content')
    {{-- <div class="main-panel"> --}}
    <div class="container">
        <div class="page-inner">
            <h4 class="page-title">User Profile</h4>
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-profile">
                        <div class="card-header" style="background-image: url('../assets/img/blogpost.jpg')">
                            <div class="profile-picture">
                                <div class="avatar avatar-xl">
                                    <img src="{{ asset('asset_backend') }}/img/profile.jpg" alt="..."
                                        class="avatar-img rounded-circle">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="user-profile text-center">
                                <div class="name">Hizrian, 19</div>
                                <div class="job">Frontend Developer</div>
                                <div class="desc">A man who hates loneliness</div>
                                <div class="social-media">
                                    <a class="btn btn-info btn-twitter btn-sm btn-link" href="#">
                                        <span class="btn-label just-icon"><i class="flaticon-twitter"></i> </span>
                                    </a>
                                    <a class="btn btn-danger btn-sm btn-link" rel="publisher" href="#">
                                        <span class="btn-label just-icon"><i class="flaticon-google-plus"></i> </span>
                                    </a>
                                    <a class="btn btn-primary btn-sm btn-link" rel="publisher" href="#">
                                        <span class="btn-label just-icon"><i class="flaticon-facebook"></i> </span>
                                    </a>
                                    <a class="btn btn-danger btn-sm btn-link" rel="publisher" href="#">
                                        <span class="btn-label just-icon"><i class="flaticon-dribbble"></i> </span>
                                    </a>
                                </div>
                                <div class="view-profile">
                                    <a href="#" class="btn btn-secondary btn-block">View Full Profile</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row user-stats text-center">
                                <div class="col">
                                    <div class="number">125</div>
                                    <div class="title">Post</div>
                                </div>
                                <div class="col">
                                    <div class="number">25K</div>
                                    <div class="title">Followers</div>
                                </div>
                                <div class="col">
                                    <div class="number">134</div>
                                    <div class="title">Following</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card card-with-nav">
                        <div class="card-header">
                            <div class="row row-nav-line">
                                <ul class="nav nav-tabs nav-line nav-color-secondary w-100 pl-3" role="tablist">
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile"
                                            role="tab" aria-selected="false">Profile</a> </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings"
                                            role="tab" aria-selected="false">Ganti Password</a> </li>
                                </ul>
                            </div>
                        </div>
                        <div id="profile" class="card-body">
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="form-group form-group-default">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="name" placeholder="Name"
                                            value="Hizrian">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-group-default">
                                        <label>Email</label>
                                        <input type="email" class="form-control" name="email" placeholder="Name"
                                            value="hello@example.com">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-4">
                                    <div class="form-group form-group-default">
                                        <label>Birth Date</label>
                                        <input type="text" class="form-control" id="datepicker" name="datepicker"
                                            value="03/21/1998" placeholder="Birth Date">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group form-group-default">
                                        <label>Gender</label>
                                        <select class="form-control" id="gender">
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group form-group-default">
                                        <label>Phone</label>
                                        <input type="text" class="form-control" value="+62008765678" name="phone"
                                            placeholder="Phone">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <div class="form-group form-group-default">
                                        <label>Address</label>
                                        <input type="text" class="form-control"
                                            value="st Merdeka Putih, Jakarta Indonesia" name="address"
                                            placeholder="Address">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3 mb-1">
                                <div class="col-md-12">
                                    <div class="form-group form-group-default">
                                        <label>About Me</label>
                                        <textarea class="form-control" name="about" placeholder="About Me" rows="3">A man who hates loneliness</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="text-right mt-3 mb-3">
                                <button class="btn btn-success">Save</button>
                                <button class="btn btn-danger">Reset</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        {{-- </div> --}}
    @endsection

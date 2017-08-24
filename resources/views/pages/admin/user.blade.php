@extends('layouts.dashboard')
@section('content')
    <h1>User</h1>

    {{--<section class="row text-center placeholders">--}}
    {{--<div class="col-6 col-sm-3 placeholder">--}}
    {{--<img src="data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">--}}
    {{--<h4>Label</h4>--}}
    {{--<div class="text-muted">Something else</div>--}}
    {{--</div>--}}
    {{--<div class="col-6 col-sm-3 placeholder">--}}
    {{--<img src="data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">--}}
    {{--<h4>Label</h4>--}}
    {{--<span class="text-muted">Something else</span>--}}
    {{--</div>--}}
    {{--<div class="col-6 col-sm-3 placeholder">--}}
    {{--<img src="data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">--}}
    {{--<h4>Label</h4>--}}
    {{--<span class="text-muted">Something else</span>--}}
    {{--</div>--}}
    {{--<div class="col-6 col-sm-3 placeholder">--}}
    {{--<img src="data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">--}}
    {{--<h4>Label</h4>--}}
    {{--<span class="text-muted">Something else</span>--}}
    {{--</div>--}}
    {{--</section>--}}

    <h4>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addAgent">Add Agent</button>
        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#addAdmin">Add Admin</button>
    </h4>
    <div class="table-responsive">
        <table id="user" class="ui celled table" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Contact No.</th>
                <th>Role</th>
                <th>Status</th>
                <th>Joined On</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($result as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone_number}}</td>
                    <td>{{$user->user_type}}</td>
                    <td>{{$user->id}}</td>
                    <td>{{$user->id}}</td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
    <!-- Add Agent Modal -->
    <div class="modal fade" id="addAgent" tabindex="-1" role="dialog" aria-labelledby="addAgent" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h5 class="modal-title" id="addAgent">Add Agent</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="inputEmail4" class="col-form-label">Email</label>
                                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword4" class="col-form-label">Password</label>
                                <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress" class="col-form-label">Address</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2" class="col-form-label">Address 2</label>
                            <input type="text" class="form-control" id="inputAddress2"
                                   placeholder="Apartment, studio, or floor">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-xs-6">
                                <label for="inputCity" class="col-form-label">City</label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="form-group col-xs-3">
                                <label for="inputState" class="col-form-label">State</label>
                                <select id="inputState" class="form-control">Choose</select>
                            </div>
                            <div class="form-group col-xs-3">
                                <label for="inputZip" class="col-form-label">Zip</label>
                                <input type="text" class="form-control" id="inputZip">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox"> Check me out
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add Agent</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Add Admin Modal -->
    <div class="modal fade" id="addAdmin" tabindex="-1" role="dialog" aria-labelledby="addAdmin" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addAdmin">Add Admin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@stop

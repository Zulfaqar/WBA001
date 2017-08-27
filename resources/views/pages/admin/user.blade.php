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
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_agent">Add Agent</button>
        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#add_admin">Add Admin</button>
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
                    <td>{{$user->agent_id}}</td>
                    <td>{{$user->f_name .' '. $user->l_name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone_number}}</td>
                    <td>{{$user->user_type}}</td>
                    <td>{{$user->status}}</td>
                    <td>{{$user->created_at}}</td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
    <!-- Add Agent Modal -->
    <div class="modal fade" id="add_agent" tabindex="-1" role="dialog" aria-labelledby="add_agent" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="add-agent" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="add_agent">Agent Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="form-row">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="first_name" class="col-form-label">First Name : </label>
                                        <input type="text" class="form-control" id="first_name"
                                               name="first_name">
                                        @if ($errors->first('first_name'))
                                            <div class="invalid-feedback">
                                                <span class="badge badge-danger"> {{ $errors->first('first_name') }}</span>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="last_name" class="col-form-label">Last Name : </label>
                                        <input type="text" class="form-control" id="last_name"
                                               name="last_name">
                                        @if ($errors->first('last_name'))
                                            <div class="invalid-feedback">
                                                <span class="badge badge-danger"> {{ $errors->first('last_name') }}</span>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label for="agent_id" class="col-form-label">Agent ID : </label>
                                        <input type="text" class="form-control" id="agent_id" placeholder="#"
                                               name="agent_id">
                                        @if ($errors->first('agent_id'))
                                            <div class="invalid-feedback">
                                                <span class="badge badge-danger"> {{ $errors->first('agent_id') }}</span>
                                            </div>
                                        @endif
                                        @if ($errors->agent_id->first('agent_id'))
                                            <div class="invalid-feedback">
                                                <span class="badge badge-danger"> Agent id already exist</span>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-form-label">Email : </label>
                                    <input type="email" class="form-control" id="email"
                                           name="email">
                                    @if ($errors->first('email'))
                                        <div class="invalid-feedback">
                                            <span class="badge badge-danger"> {{ $errors->first('email') }}</span>
                                        </div>
                                    @endif
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <label for="ext" class="col-form-label">Ext : </label>
                                        <select id="ext" class="form-control" name="ext">
                                            <option></option>
                                            <option value="010">010</option>
                                            <option value="011">011</option>
                                            <option value="012">012</option>
                                            <option value="013">013</option>
                                            <option value="014">014</option>
                                            <option value="016">016</option>
                                            <option value="017">017</option>
                                            <option value="018">018</option>
                                            <option value="019">019</option>
                                        </select>
                                        @if ($errors->first('ext'))
                                            <div class="invalid-feedback">
                                                <span class="badge badge-danger"> {{ $errors->first('ext') }}</span>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-9">
                                        <label for="phone_number" class="col-form-label">Phone No. : </label>
                                        <input type="number" class="form-control" id="phone_number"

                                               name="phone_number">
                                        @if ($errors->first('phone_number'))
                                            <div class="invalid-feedback">
                                                <span class="badge badge-danger"> {{ $errors->first('phone_number') }}</span>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-form-label">Password : </label>
                                    <input type="password" class="form-control" id="password"
                                           name="password">
                                    @if ($errors->first('password'))
                                        <div class="invalid-feedback">
                                            <span class="badge badge-danger"> {{ $errors->first('password') }}</span>
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="confirm_password" class="col-form-label">Confirm Password : </label>
                                    <input type="password" class="form-control" id="confirm_password"
                                           name="confirm_password">
                                    @if ($errors->first('confirm_password'))
                                        <div class="invalid-feedback">
                                            <span class="badge badge-danger"> {{ $errors->first('confirm_password') }}</span>
                                        </div>
                                    @endif
                                </div>

                            </div>
                            <hr>
                            <div class="form-row">
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="unit" class="col-form-label">Unit</label>
                                        <input type="text" class="form-control" id="unit" name="unit">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="floor" class="col-form-label">Floor</label>
                                        <input type="text" class="form-control" id="floor" name="floor">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="block" class="col-form-label">Block</label>
                                        <input type="text" class="form-control" id="block" name="block">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="address1" class="col-form-label">Address 1 : </label>
                                    <input type="text" class="form-control" id="address1" name="address1">
                                </div>

                                <div class="form-group">
                                    <label for="address2" class="col-form-label">Address 2 : </label>
                                    <input type="text" class="form-control" id="address2" name="address2">
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="zip" class="col-form-label">Zip</label>
                                        <input type="number" class="form-control" id="zip" name="zip">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="state" class="col-form-label">State</label>
                                        <select id="state" class="form-control" name="state">
                                            <option></option>
                                            <option value="jhr">Johor</option>
                                            <option value="kdh">Kedah</option>
                                            <option value="ktn">Kelantan</option>
                                            <option value="mlk">Melaka</option>
                                            <option value="nsn">Negeri Sembilan</option>
                                            <option value="phg">Pahang</option>
                                            <option value="prk">Perak</option>
                                            <option value="pls">Perlis</option>
                                            <option value="png">Penang</option>
                                            <option value="sbh">Sabah</option>
                                            <option value="swk">Sarawak</option>
                                            <option value="sgr">Selangor</option>
                                            <option value="trg">Terengganu</option>
                                            <option value="kul">Kuala Lumpur</option>
                                        </select>
                                    </div>
                                    <div class="form-check col-md-6">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="status" id="status"
                                                   value="1">
                                            Set to active
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" value="agent">Add Agent</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Add Admin Modal -->
    <div class="modal fade" id="add_admin" tabindex="-1" role="dialog" aria-labelledby="add_admin" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="add-admin" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="add_admin">Add Admin</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="form-row">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="first_name" class="col-form-label">First Name : </label>
                                        <input type="text" class="form-control" id="first_name"
                                               name="first_name">
                                        @if ($errors->first('first_name'))
                                            <div class="invalid-feedback">
                                                <span class="badge badge-danger"> {{ $errors->first('first_name') }}</span>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="last_name" class="col-form-label">Last Name : </label>
                                        <input type="text" class="form-control" id="last_name"
                                               name="last_name">
                                        @if ($errors->first('last_name'))
                                            <div class="invalid-feedback">
                                                <span class="badge badge-danger"> {{ $errors->first('last_name') }}</span>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-form-label">Email : </label>
                                    <input type="email" class="form-control" id="email" placeholder="Email"
                                           name="email">
                                    @if ($errors->first('email'))
                                        <div class="invalid-feedback">
                                            <span class="badge badge-danger"> {{ $errors->first('email') }}</span>
                                        </div>
                                    @endif
                                    @if ($errors->email->first('email'))
                                        <div class="invalid-feedback">
                                            <span class="badge badge-danger"> Email id already exist</span>
                                        </div>
                                    @endif
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <label for="ext" class="col-form-label">Ext : </label>
                                        <select id="ext" class="form-control" name="ext">
                                            <option></option>
                                            <option value="010">010</option>
                                            <option value="011">011</option>
                                            <option value="012">012</option>
                                            <option value="013">013</option>
                                            <option value="014">014</option>
                                            <option value="016">016</option>
                                            <option value="017">017</option>
                                            <option value="018">018</option>
                                            <option value="019">019</option>
                                        </select>
                                        @if ($errors->first('ext'))
                                            <div class="invalid-feedback">
                                                <span class="badge badge-danger"> {{ $errors->first('ext') }}</span>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-9">
                                        <label for="phone_number" class="col-form-label">Phone No. : </label>
                                        <input type="number" class="form-control" id="phone_number"

                                               name="phone_number">
                                        @if ($errors->first('phone_number'))
                                            <div class="invalid-feedback">
                                                <span class="badge badge-danger"> {{ $errors->first('phone_number') }}</span>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-form-label">Password : </label>
                                    <input type="password" class="form-control" id="password" name="password">
                                    @if ($errors->first('password'))
                                        <div class="invalid-feedback">
                                            <span class="badge badge-danger"> {{ $errors->first('password') }}</span>
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="confirm_password" class="col-form-label">Confirm Password : </label>
                                    <input type="password" class="form-control" id="confirm_password"
                                           name="confirm_password">
                                    @if ($errors->first('confirm_password'))
                                        <div class="invalid-feedback">
                                            <span class="badge badge-danger"> {{ $errors->first('confirm_password') }}</span>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" value="admin">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

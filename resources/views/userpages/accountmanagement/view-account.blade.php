@extends('userpages.sidebar')

@section('content')

<div class="container rounded bg-white mb-5">
    <a class="btn btn-primary" href="{{ route('account.management') }}" style="width: 100px">Back</a>
    <div class="row">
        <div class="col-md-7 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">User Details</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-4"><label class="labels">Last Name : </label><input type="text" class="form-control" value="{{$data->last_name}}"></div>
                    <div class="col-md-4"><label class="labels">First Name :</label><input type="text" class="form-control" value="{{$data->first_name}}"></div>
                    <div class="col-md-4"><label class="labels">Middle Name :</label><input type="text" class="form-control" value="{{$data->middle_name}}"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-5"><label class="labels">Affiliation :</label><input type="text" class="form-control" value="{{$data->affiliation}}"></div>
                    <div class="col-md-6"><label class="labels">Birthday :</label><input type="date" class="form-control" value="{{$data->birthday}}"></div>
                    <div class="col-md-4">
                        <label class="labels">Gender :</label> 
                        <select name="gender" class="custom-select mb-3">
                            <option class="gender" value="Male">Male</option>  
                            <option class="gender" value="Female">Female</option>
                            <option class="gender" value="Others">Others</option>
                        </select>         
                    </div>
                    <div class="col-md-7">
                        <label class="labels">Civil Status :</label>
                        <select name="civil_status" class="custom-select mb-3">
                            <option class="civil-status" value="Single">Single</option>
                            <option class="civil-status" value="Married">Married</option>
                            <option  class="civil-status" value="Widowed">Widowed</option>
                        </select>                
                    </div>
                    <div class="col-md-12"><label class="labels">Address :</label><input type="text" class="form-control" value="{{$data->address}}"></div>
                    <div class="col-md-12"><label class="labels">Phone No.</label><input type="text" class="form-control" value="{{$data->phone_number}}"></div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="p-3 py-5">
                <div class="col-md-12">
                    <label class="labels">Email</label>
                    <input type="text" class="form-control"  value="{{$data->account->email}}">
                </div> <br>
                <div class="col-md-12">
                    <label class="labels">Password</label>
                    <input type="password" class="form-control" value="{{$data->account->password}}">
                </div><br>
                <div class="col-md-12">
                    <label class="labels">Actions:</label><br>
                    <input type="button" class="btn btn-secondary" value="Suspend" data-toggle="modal" data-target="#suspend-account">
                    <!-- The Modal -->
                    <div class="modal fade" id="suspend-account">
                        <div class="modal-dialog">
                            <div class="modal-content">
                        <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Suspend Account</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <form action="{{ route('suspend.account', $data->account->account_id) }}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col">
                                                <label>Start Suspend start:</label>
                                                <input type="date" class="form-control" name="suspend_start" >
                                            </div>
                                            <div class="col">
                                                <label>End Suspend date :</label>
                                                <input type="date" class="form-control" name="suspend_end" >
                                            </div>
                                        </div>                       
                                </div>
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </form>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>

       

                <input type="button" value="Disable Account" class="btn btn-danger " data-toggle="modal" data-target="#disable-account">
                <!-- The Modal -->
                <div class="modal fade" id="disable-account">
                    <div class="modal-dialog">
                        <div class="modal-content">
                    <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Warning</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                            <!-- Modal body -->
                            <div class="modal-body">
                            <h5 style="text-align: center">Are you sure to disable this account ?</h5>
                            </div>
                    
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <a href="{{route('disable.account', $data->account->account_id)}}" class="btn btn-success">Confirm</a>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<script>
    
    $(document).ready(function(){
        var genderOption = $('.gender');
        for(let i = 0; i <= genderOption.length; i++){    
            let genderIndex = String(genderOption[i].innerHTML);
            if(genderIndex == {!! json_encode($data->gender) !!}){
                $('.gender').eq(i).attr('selected', '');
                break;
            }
        }
        var statusOption = $('.civil-status');
        for(let i = 0; i <= statusOption.length; i++){    
            let statusIndex = String(statusOption[i].innerHTML);
            if(statusIndex == {!! json_encode($data->civil_status) !!}){
                $('.civil-status').eq(i).attr('selected', '');
                break;
            }
        }
    });
</script>
@endsection
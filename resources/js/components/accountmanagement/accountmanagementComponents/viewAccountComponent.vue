<template>
    <div>
        <div class="container rounded bg-white mb-5">
            <a class="btn btn-primary" style="width: 100px">Back</a>
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
                    </div>
                </div>
            </div>   
        </div> 
    </div>
</template>
<script>
export default {
     props:['account_details'],
}
</script>

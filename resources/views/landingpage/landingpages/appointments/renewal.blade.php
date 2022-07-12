@extends('landingpage.navigation.navigation')

@section('content')
    <style>
        label{
            font-weight: 600;
        }
    </style>
    <div class="container-fuild">
        <form action="">
            <h1>Renewal ID</h1>

            <div class="row">
                <div class="col-*.*">
                    <label>PWD Number :</label>
                    <input type="text" class="form-control" placeholder="Enter last name">
                </div>
            </div>






        
            <input type="button" value="Next" class="btn btn-primary " data-toggle="modal" data-target="#select-date">
            <!-- The Modal -->
            <div class="modal fade" id="select-date">
                <div class="modal-dialog">
                    <div class="modal-content">
                <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Select</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                        <!-- Modal body -->
                        <div class="modal-body">
                        <h5 style="text-align: center">Select Appointment Date</h5>
                        
                        <input type="text" id="txtDate" />
                        </div>
                
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <link href="http://code.jquery.com/ui/1.9.2/themes/smoothness/jquery-ui.css" rel="stylesheet" />
    <script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
    <script type="text/javascript">
        $(function () {
            $("#txtDate").datepicker({
                defaultDate: "+1w",
                changeMonth: true,
                numberOfMonths: 1,
                beforeShowDay: $.datepicker.noWeekends
            });
        });
    </script>
@endsection
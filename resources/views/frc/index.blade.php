@extends('layouts.template')
@section('extracss')
    <link href="{{asset('css/jquery.dataTables.min.css')}}" rel="stylesheet">

          <script src="{{asset('js/jquery-1.10.2.min.js')}}"></script>

  <link href="{{asset('css/buttons.dataTables.min.css')}}" rel="stylesheet">

  <link rel="stylesheet" href="{{asset('asset/select2/dist/css/select2.min.css')}}">


@endsection
@section('extrajs')
<script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('js/dataTables.buttons.min.js')}}"></script>

  <script src="{{asset('/vendor/datatables/buttons.server-side.js')}}"></script>

<script src="{{asset('asset/select2/dist/js/select2.min.js')}}"></script>
<script type="text/javascript">
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2();


  });

  </script>

@endsection
@section('content')

<div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header with-border">
              <h3 class="card-title">Large Cash  Manager</h3>

              <div class="card-tools pull-right">

                <div class="btn-group">

                  <a href="/submit-tofrc" class="btn btn-outline-success pull-right"><i class="fa fa-globe"></i>Submit All To FRC</a>
                 <a href="/alert-branch-cash" class="btn btn-primary pull-right">Alert Branches</a>

                </div>

              </div>
            </div>
            	<div class="card-body table-responsive small">

          {!! $dataTable->table(['class'=>'table table-bordered table-striped table-sm small']) !!}

          {!! $dataTable->scripts() !!}


					</div>



           </div>
       </div>
   </div>
@include('frc.updatefrc')


 <script type="text/javascript">
    //display modal form for task editing
     $(document).ready(function(){






    $('body').on("click", '.open-modal', function(e)
    {
var url = "/get-large-cash";
        var task_id = $(this).val();

        $.get(url + '/' + task_id, function (response) {

            var data = response.data;
        var signatory = response.signatory;
            //success data
            console.log("loaded");
          $('#tokens').val(data.id),
          $('#BRANCH_NAME').val(data.BRANCH_NAME),
          $('#BANK_CODE').val(data.BANK_CODE),
          $('#TRN_DT').val(data.TRN_DT),
           $('#CUSTOMER').val(data.NAME_OF_PERSANON_TRANSACTING),
          $('#NAME_OF_PERSANON_TRANSACTING').val(data.NAME_OF_PERSANON_TRANSACTING),
          $('#AC_NO').val(data.AC_NO),
          $('#ID_OF_PERSON_TRANSACTING').val(data.ID_OF_PERSON_TRANSACTING),
          $('#NATIONALITY_OF_PERSON_TRANSACTING').val(data.NATIONALITY_OF_PERSON_TRANSACTING),
          $('#DESCRIPTION_OF_TXN').val(data.DESCRIPTION_OF_TXN),
          $('#NARRATIONS').val(data.NARRATIONS),
          $('#AC_CCY').val(data.AC_CCY),
          $('#LCY_AMOUNT').val(data.LCY_AMOUNT),
          $('#USD_EQUIV').val(data.USD_EQUIV),
          $('#TRN_CODE').val(data.TRN_CODE),
          $('#TRN_REF_NO').val(data.TRN_REF_NO),
          $('#TRANSACTING_CUSTOMER').val(data.TRANSACTING_CUSTOMER),
          $('#CUSTOMER_NAME').val(data.CUSTOMER_NAME),
          $('#EXCH_RATE').val(data.EXCH_RATE),
          $('#PURPOSE_OF_TRANSACTION').val(data.PURPOSE_OF_TRANSACTION),
          $('#SOURCE_OF_FUNDS').val(data.SOURCE_OF_FUNDS),
          $('#NATURE_OF_BUSINESS').val(data.NATURE_OF_BUSINESS),
          $('#PIN_NO_OF_ENTITY').val(data.PIN_NO_OF_ENTITY),
          $('#NAME_OF_SIGNATORIES').val(data.NAME_OF_SIGNATORIES),
          $('#ID_PP_NO_OF_SIGNATORIES').val(data.ID_PP_NO_OF_SIGNATORIES),
          $('#OCCUPATION_OF_SIGNATORIES').val(data.OCCUPATION_OF_SIGNATORIES),
          $('#DOB_OF_SIGNATORIES').val(data.DOB_OF_SIGNATORIES),
          $('#NATIONALITY_OF_SIGNATORIES').val(data.NATIONALITY_OF_SIGNATORIES),
           $('#TRNCODE').val(data.TRNCODES),

          $('#reveiwer').val(data.reveiwer),
           $('#sigs').text(data.signatory),
          $('#cc').val(data.cc),
          $('#status').val(data.status),
            $('#myModal').modal('myModal2');
        })
    });
 });
    //display modal form for task editing
     $(document).ready(function(){

    $('body').on("click", '.open-modal-branch', function(e)
    {

      var url = "/get-branch-cash";

        var task_id = $(this).val();

        $.get(url + '/' + task_id, function (data) {

        //     var data = response.data;
        // var signatory = response.signatory;
            //success data
            console.log(data);
          $('#branchid').val(data.id),
          $('#name').val(data.name),
          $('#code').val(data.code),
          $('#abom').val(data.abom),
          $('#email').val(data.email),
            $('#exampleModal').modal('show');
  })

          });
       });
 </script>
@endsection

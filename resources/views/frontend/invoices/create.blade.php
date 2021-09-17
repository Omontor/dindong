<!DOCTYPE html>
<html lang="en">

@include('layouts.header')

    <body>
        @include('partials.topbar')
        @include('partials.sidebar')


            
        <div class="page-wrapper">
            <!-- Page Content-->
            <div class="page-content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="float-right">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Crovex</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                        <li class="breadcrumb-item active">Invoice</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Invoice</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="card">
                                <div class="card-body invoice-head"> 
                                    <div class="row">
                                        <div class="col-md-3 align-self-center">   

                                            <img src="{{Auth::user()->userinfo->first()->logo ? Auth::user()->userinfo->first()->logo->getUrl() : '/images/letras.jpg'}}" alt="logo-small" class="logo-sm mr-2" style="max-height: 30px;">                                              
                                        </div><!--end col-->    
                                        <div class="col-md-6">
                                                
                                            <ul class="list-inline mb-0 contact-detail float-right">                                               
                                                <li class="list-inline-item">
                                                    <div class="pl-3">
                                                         <p class="text-muted mb-0"><strong>{{$userinfo->legal_name}}</strong></p>
                                                       <center>
                                                        <p class="text-muted mb-0">{{$userinfo->rfc}}</p>
                                                        <p class="text-muted mb-0">{{$userinfo->address_1}}</p>
                                                        <p class="text-muted mb-0">{{$userinfo->address_2}} CP {{$userinfo->postal_code}}</p>   
                                                        <p class="text-muted mb-0">{{$userinfo->municipality->name}}, {{$userinfo->state->name}}</p>                                                        
                                                        <p class="text-muted mb-0">{{$userinfo->country->name}}</p>
                                                        </center>
                                                    </div>                                                
                                                </li>
                          
                              
                                            </ul>
                                        </div><!--end col-->    

                             <div class="col-md-3 align-self-center">   

                                              <ul class="list-inline mb-0 contact-detail float-right">                                               
                                                <li class="list-inline-item">
                                                    <div class="pl-3">
                                                         <p class="text-muted mb-0"><strong>{{$userinfo->legal_name}}</strong></p>
                                                       <center>
                                                        <p class="text-muted mb-0">{{$userinfo->rfc}}</p>
    
                                                        </center>
                                                    </div>                                                
                                                </li>
                          
                              
                                            </ul>                                
                                        </div>

                                    </div><!--end row-->     
                                </div><!--end card-body-->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="">
                                                <h6 class="mb-0"><b>Start Date :</b> 11/05/2019</h6>
                                                <h6 class="mb-0"><b>End Date :</b> 10/06/2019</h6>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-md-6">   
                                            <h6 class="mb-0"><b>Compny :</b> Hubland</h6>
                                            <h6 class="mb-0"><b>Project Name :</b> Trading System</h6>                                         
                                            <h6 class="mb-0"><b>Invoice No :</b> #1240</h6>  
                                        </div><!--end col-->
                                        <div class="col-md-3">
                                            <div class="text-center bg-light p-3 mb-3">
                                                <h5 class="bg-secondary mt-0 p-2 text-white d-sm-inline-block">Payment Methods</h5>
                                                <h6 class="font-13">Paypal & Cards Payments :</h6>
                                                <p class="mb-0 text-muted">CompanyA/c.paypal@gmai.com</p>
                                                <p class="mb-0 text-muted">Visa, Master Card, Chaque</p>
                                            </div>                                              
                                        </div> <!--end col-->                                           
                                    </div><!--end row-->

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="table-responsive project-invoice">
                                                <table class="table table-bordered mb-0">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th>Project Breakdown</th>
                                                            <th>Hours</th>
                                                            <th>Rate</th> 
                                                            <th>Subtotal</th>
                                                        </tr><!--end tr-->
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <h5 class="mt-0 mb-1">Project Design</h5>
                                                                <p class="mb-0 text-muted">It is a long established fact that a reader will be distracted.</p>
                                                            </td>
                                                            <td>60</td>
                                                            <td>$50</td>
                                                            <td>$3000.00</td>
                                                        </tr><!--end tr-->
                                                        <tr>
                                                            <td>
                                                                <h5 class="mt-0 mb-1">Development</h5>
                                                                <p class="mb-0 text-muted">It is a long established fact that a reader will be distracted.</p>
                                                            </td>
                                                            <td>100</td>
                                                            <td>$50</td>
                                                            <td>$5000.00</td>
                                                        </tr><!--end tr-->
                                                        <tr>
                                                            <td>
                                                                <h5 class="mt-0 mb-1">Testing & Bug Fixing</h5>
                                                                <p class="mb-0 text-muted">It is a long established fact that a reader will be distracted.</p>
                                                            </td>
                                                            <td>10</td>
                                                            <td>$20</td>
                                                            <td>$200.00</td>
                                                        </tr><!--end tr-->
                                                        
                                                        <tr>                                                        
                                                            <td colspan="2" class="border-0"></td>
                                                            <td class="border-0 font-14 text-dark"><b>Sub Total</b></td>
                                                            <td class="border-0 font-14 text-dark"><b>$82,000.00</b></td>
                                                        </tr><!--end tr-->
                                                        <tr>
                                                            <th colspan="2" class="border-0"></th>                                                        
                                                            <td class="border-0 font-14 text-dark"><b>Tax Rate</b></td>
                                                            <td class="border-0 font-14 text-dark"><b>$0.00%</b></td>
                                                        </tr><!--end tr-->
                                                        <tr class="bg-black text-white">
                                                            <th colspan="2" class="border-0"></th>                                                        
                                                            <td class="border-0 font-14"><b>Total</b></td>
                                                            <td class="border-0 font-14"><b>$82,000.00</b></td>
                                                        </tr><!--end tr-->
                                                    </tbody>
                                                </table><!--end table-->
                                            </div>  <!--end /div-->                                          
                                        </div>  <!--end col-->                                      
                                    </div><!--end row-->

                                    <div class="row justify-content-center">
                                        <div class="col-lg-6">
                                            <h5 class="mt-4">Terms And Condition :</h5>
                                            <ul class="pl-3">
                                                <li><small class="font-12">All accounts are to be paid within 7 days from receipt of invoice. </small></li>
                                                <li><small class="font-12">To be paid by cheque or credit card or direct payment online.</small ></li>
                                                <li><small class="font-12"> If account is not paid within 7 days the credits details supplied as confirmation of work undertaken will be charged the agreed quoted fee noted above.</small></li>                                            
                                            </ul>
                                        </div> <!--end col-->                                       
                                        <div class="col-lg-6 align-self-end">
                                            <div class="w-25 float-right">
                                                <small>Account Manager</small>
                                                <img src="../assets/images/signature.png" alt="" class="" height="48">
                                                <p class="border-top">Signature</p>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                    <hr>
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-lg-12 col-xl-4 ml-auto align-self-center">
                                            <div class="text-center"><small class="font-12">Thank you very much for doing business with us.</small></div>
                                        </div><!--end col-->
                                        <div class="col-lg-12 col-xl-4">
                                            <div class="float-right d-print-none">
                                                <a href="javascript:window.print()" class="btn btn-gradient-info"><i class="fa fa-print"></i></a>
                                                <a href="#" class="btn btn-gradient-primary">Submit</a>
                                                <a href="#" class="btn btn-gradient-danger">Cancel</a>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row--> 
                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="float-right">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">Din Dong</li>
                                        <li class="breadcrumb-item"> <a href="/home">Inicio</a></li>
                                        <li class="breadcrumb-item"> <a href="{{route('frontend.invoices.index')}}"> Facturación</a></li>
                                        <li class="breadcrumb-item active">Crear</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Crear factura</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->

                    @if(Session::has('message'))
                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{Session::get('message') }}</p>
                    @endif

                    <div class="row">
                        <div class="col-md-12">
                            
                            <div class="card">

                                <div class="card-body">
{{----}}



<div class="row">
    

    <div class="col-3">
        <img src="{{Auth::user()->userinfo->first()->logo ? Auth::user()->userinfo->first()->logo->getUrl() : '/images/letras.jpg'}}" style="max-width:300px;">
    </div>    

    <div class="col-6">

    </div>

</div>


<INPUT type="button" value="Add Row" onclick="addRow('dataTable')" />

            <INPUT type="button" value="Delete Row" onclick="deleteRow('dataTable')" />
        <form action="" method="post" enctype="multipart/form-data">
        invoice:<INPUT type="text" name="invoice id"/>

            <TABLE id="dataTable" width="350px" border="1" style="border-collapse:collapse;">
        <TR>
        <TH>Select</TH>
        <TH>Sr. No.</TH>
        <TH>Item</TH>
        <TH>Qty</TH>
        <TH>Cost</TH>
        <TH formula="cost*qty"summary="sum">Price</TH>
        </TR>
                <TR>
                    <TD><INPUT type="checkbox" name="chk[]"/></TD>
                    <TD> 1 </TD>
                    <TD> <INPUT type="text" name="item[] "/> </TD>
                    <TD> <INPUT type="text" id="qty1" name="qty[]"/> </TD>
                    <TD> <INPUT type="text" id="cost1" name="cost[]" /> </TD>
                    <TD> <INPUT type="text" id="price1" name="price[]" /> </TD>
                </TR>

            </TABLE>
            total: <input type="text" readonly="readonly" id="total" /><br/>
        <input type="button" value="Total" onclick="totalIt()" /><input type="submit" />
 </form>



{{----}}

                    <form method="POST" action="{{ route("frontend.invoices.store") }}" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label class="required" for="user_data_id">{{ trans('cruds.invoice.fields.user_data') }}</label>
                            <select class="form-control select2" name="user_data_id" id="user_data_id" required>
                                @foreach($user_datas as $id => $entry)
                                    <option value="{{ $id }}" {{ old('user_data_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('user_data'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('user_data') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.invoice.fields.user_data_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="name_id">{{ trans('cruds.invoice.fields.name') }}</label>
                            <select class="form-control select2" name="name_id" id="name_id" required>
                                @foreach($names as $id => $entry)
                                    <option value="{{ $id }}" {{ old('name_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.invoice.fields.name_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="emision">{{ trans('cruds.invoice.fields.emision') }}</label>
                            <input class="form-control datetime" type="text" name="emision" id="emision" value="{{ Carbon\Carbon::now() }}" required readonly="">
                            @if($errors->has('emision'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('emision') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.invoice.fields.emision_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="products">{{ trans('cruds.invoice.fields.products') }}</label>
                            <div style="padding-bottom: 4px">
                                <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                                <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                            </div>
                            <select class="form-control select2" name="products[]" id="products" multiple required>
                                @foreach($products as $id => $product)
                                    <option value="{{ $id }}" {{ in_array($id, old('products', [])) ? 'selected' : '' }}>{{ $product }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('products'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('products') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.invoice.fields.products_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="total_letter">{{ trans('cruds.invoice.fields.total_letter') }}</label>
                            <input class="form-control" type="text" name="total_letter" id="total_letter" value="{{ old('total_letter', '') }}" required>
                            @if($errors->has('total_letter'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('total_letter') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.invoice.fields.total_letter_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="paid_form_id">{{ trans('cruds.invoice.fields.paid_form') }}</label>
                            <select class="form-control select2" name="paid_form_id" id="paid_form_id" required>
                                @foreach($paid_forms as $id => $entry)
                                    <option value="{{ $id }}" {{ old('paid_form_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('paid_form'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('paid_form') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.invoice.fields.paid_form_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="payment_method_id">{{ trans('cruds.invoice.fields.payment_method') }}</label>
                            <select class="form-control select2" name="payment_method_id" id="payment_method_id" required>
                                @foreach($payment_methods as $id => $entry)
                                    <option value="{{ $id }}" {{ old('payment_method_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('payment_method'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('payment_method') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.invoice.fields.payment_method_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="cfdi_use_id">{{ trans('cruds.invoice.fields.cfdi_use') }}</label>
                            <select class="form-control select2" name="cfdi_use_id" id="cfdi_use_id" required>
                                @foreach($cfdi_uses as $id => $entry)
                                    <option value="{{ $id }}" {{ old('cfdi_use_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('cfdi_use'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('cfdi_use') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.invoice.fields.cfdi_use_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="currency_id">{{ trans('cruds.invoice.fields.currency') }}</label>
                            <select class="form-control select2" name="currency_id" id="currency_id" required>
                                @foreach($currencies as $id => $entry)
                                    <option value="{{ $id }}" {{ old('currency_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('currency'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('currency') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.invoice.fields.currency_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="taxes_id">{{ trans('cruds.invoice.fields.taxes') }}</label>
                            <select class="form-control select2" name="taxes_id" id="taxes_id" required>
                                @foreach($taxes as $id => $entry)
                                    <option value="{{ $id }}" {{ old('taxes_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('taxes'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('taxes') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.invoice.fields.taxes_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="type_voucher_id">{{ trans('cruds.invoice.fields.type_voucher') }}</label>
                            <select class="form-control select2" name="type_voucher_id" id="type_voucher_id" required>
                                @foreach($type_vouchers as $id => $entry)
                                    <option value="{{ $id }}" {{ old('type_voucher_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('type_voucher'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('type_voucher') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.invoice.fields.type_voucher_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-info" type="submit">
                                {{ trans('global.save') }}
                            </button>
                        </div>
                    </form>


                                </div><!--end card-body-->
                            </div><!--end card-->
                            
                        </div><!-- end col-->
                    </div><!--end row-->


                </div><!-- container -->

              @include('layouts.footer')
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->
     
        @include('layouts.scripts')
<script>
  function calc(idx) {
  var price = parseFloat(document.getElementById("cost"+idx).value)*
              parseFloat(document.getElementById("qty"+idx).value);
  //  alert(idx+":"+price);  
  document.getElementById("price"+idx).value= isNaN(price)?"0.00":price.toFixed(2);
   
}

function totalIt() {
  var qtys = document.getElementsByName("qty[]");
  var total=0;
  for (var i=1;i<=qtys.length;i++) {
    calc(i);  
    var price = parseFloat(document.getElementById("price"+i).value);
    total += isNaN(price)?0:price;
  }
  document.getElementById("total").value=isNaN(total)?"0.00":total.toFixed(2);                        
}      

window.onload=function() {
  document.getElementsByName("qty[]")[0].onkeyup=function() {calc(1)};
  document.getElementsByName("cost[]")[0].onkeyup=function() {calc(1)};
}

var rowCount =0;
    function addRow(tableID) {

        var table = document.getElementById(tableID);

        var rowCount = table.rows.length;
        var row = table.insertRow(rowCount);

        var cell1 = row.insertCell(0);
        var element1 = document.createElement("input");
        element1.type = "checkbox";
        element1.name = "chk[]";
        cell1.appendChild(element1);

        var cell2 = row.insertCell(1);
        cell2.innerHTML = rowCount;

        var cell3 = row.insertCell(2);
        var element3 = document.createElement("input");
        element3.type = "text";
        element3.name = "item[]";
        element3.required = "required";
        cell3.appendChild(element3);

        var cell4 = row.insertCell(3);
        var element4 = document.createElement("input");
        element4.type = "text";
        element4.name = "qty[]";
        element4.id = "qty"+rowCount;
        element4.onkeyup=function() {calc(rowCount);}
        cell4.appendChild(element4);

        var cell5 = row.insertCell(4);
        var element5 = document.createElement("input");
        element5.type = "text";
        element5.name = "cost[]";
        element5.id = "cost"+rowCount;
        element5.onkeyup=function() {calc(rowCount);}
        cell5.appendChild(element5);

        var cell6 = row.insertCell(5);
        var element6 = document.createElement("input");
        element6.type = "text";
        element6.name = "price[]";
        element6.id = "price"+rowCount
        cell6.appendChild(element6);



    }

    function deleteRow(tableID) {
        try {
        var table = document.getElementById(tableID);
        var rowCount = table.rows.length;

        for(var i=0; i<rowCount; i++) {
            var row = table.rows[i];
            var chkbox = row.cells[0].childNodes[0];
            if(null != chkbox && true == chkbox.checked) {
                table.deleteRow(i);
                rowCount--;
                i--;
            }


        }
        }catch(e) {
            alert(e);
        }
    }


</script>
    </body>

</html>

@section('scripts')

@endsection

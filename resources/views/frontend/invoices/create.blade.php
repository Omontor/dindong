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
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="card">
                                <div class="card-body invoice-head"> 
                                    <div class="row">
    
                                        <div class="col-md-3" style="position: relative;">    
                                                <center>
                                             <img src="{{Auth::user()->userinfo->first()->logo ? Auth::user()->userinfo->first()->logo->getUrl() : '/images/letras.jpg'}}" alt="logo-small" class="img-fluid" width="100%" style=" width: 250px;

  background-color: red;
  /* Center vertically and horizontally */
  position: absolute;
  top: 50%;
  left: 25%;
  margin: -25px 0 0 -25px; /* apply negative top and left margins to truly center the element */
"> 
                                             </center>                                             
                                        </div><!--end col-->    
                                        <div class="col-md-6 align-self-center">
                                                <center>
                                            <ul>                                               
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
                                            </center>
                                        </div><!--end col-->    

                                    <div class="col-md-3 align-self-center">   
                                              <ul>                                               
                                                <li class="list-inline-item">
                                                    <div class="pl-3">
                                                    <center>
                                                         <p class="text-muted mb-0" style="font-size: 20pt;"><strong>Folio</strong>

                                                            <br>
                                                            <h2>A2</h2>
                                                         </p>
                                                    </center>
                                                    
                                                    </div>                                                
                                                </li>
                          
                              
                                            </ul>                                
                                        </div>

                                    </div><!--end row-->     
                                </div><!--end card-body-->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="">
                    <form method="POST" action="{{ route("frontend.invoices.store") }}" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                                                <h6 class="mb-0"><b>Selecciona el cliente a quien deseas facturarle</h6>
                                                    <br>
                                                <select class="form-control" name="">
                                                    @forelse(Auth::user()->clientes as $client)

                                                    <option value="{{$client->id}}">
                                                        {{$client->name}} {{$client->rfc}}
                                                    </option>
                                                    @empty
                                                    TIenes que crear un cliente para poder continuar
                                                    @endforelse
                                                </select>
                                            </div>
                                        </div><!--end col-->
                                                                
                                    </div><!--end row-->

                                    <hr>

<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive project-invoice">

<INPUT type="button" value="Add Row" onclick="addRow('dataTable')" />

            <INPUT type="button" value="Delete Row" onclick="deleteRow('dataTable')" />
            <a href="#" class="btn" onclick="totalIt()">Calcular Total</a>
            <hr>    
        <form action="" method="post" enctype="multipart/form-data">

            <table class="table table-bordered mb-0" id="dataTable" width="350px" border="1" style="border-collapse:collapse;">
                <thead class="thead-light">
        <TR>
        <TH></TH>
        <TH>id</TH>
        <TH>Producto</TH>
        <TH>Cantidad</TH>
        <TH>Unitario</TH>
        <TH formula="cost*qty"summary="sum">Subtotal</TH>
         </thead>
         <tbody>
        </TR>
                <TR>
                    <TD><INPUT type="checkbox" name="chk[]"/></TD>
                    <TD> 1 </TD>
                    <TD> <input class="form-control" type="text" name="item[] "/> </TD>
                    <TD> <input class="form-control" type="text" id="qty1" name="qty[]"/> </TD>
                    <TD> <input class="form-control" type="text" id="cost1" name="cost[]" /> </TD>
                    <TD> <input class="form-control" type="text" id="price1" name="price[]" /> </TD>
                </TR>
            </tbody>
            </TABLE>
            <br>
            subtotal: <input class="form-control" type="text" readonly="readonly" id="total" /><br/>
            IVA: <input class="form-control" type="text" readonly="readonly" id="iva" value="16%" /><br/>
            total: <input class="form-control" type="text" readonly="readonly" id="total2" value="" /><br/>
      
          
 </form>
</div>
</div>
</div>
                        
                            <div class="row justify-content-center">
                                        <div class="col-lg-12" style="align-content:center;">
                                            <h5 class="mt-4">Terms And Condition :</h5>
                                            <ul class="pl-3">
                                                <li><small class="font-12">All accounts are to be paid within 7 days from receipt of invoice. </small></li>
                                                <li><small class="font-12">To be paid by cheque or credit card or direct payment online.</small ></li>
                                                <li><small class="font-12"> If account is not paid within 7 days the credits details supplied as confirmation of work undertaken will be charged the agreed quoted fee noted above.</small></li>                                            
                                            </ul>
                                        </div> <!--end col-->                                       
                                        
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
                                        </form>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row--> 

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
  document.getElementById("total").value=isNaN(total)?"0.00": "$" + total.toFixed(2);   
    var total2 = total *= 1.16;

  document.getElementById("total2").value= isNaN(total2)?"0.00":"$" + total.toFixed(2);                      
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
        element1.name = "chk[]";
        cell1.appendChild(element1);

        var cell2 = row.insertCell(1);
        cell2.innerHTML = rowCount;

        var cell3 = row.insertCell(2);
        var element3 = document.createElement("input");
        element3.type = "text";
        element3.name = "item[]";
        element3.required = "required";
        element3.class = "form-control";
        cell3.appendChild(element3);

        var cell4 = row.insertCell(3);
        var element4 = document.createElement("input");
        element4.type = "text";
        element4.name = "qty[]";
        element4.class = "form-control";
        element4.id = "qty"+rowCount;
        element4.onkeyup=function() {calc(rowCount);}
        cell4.appendChild(element4);

        var cell5 = row.insertCell(4);
        var element5 = document.createElement("input");
        element5.type = "text";
        element5.class = "form-control";
        element5.name = "cost[]";
        element5.id = "cost"+rowCount;
        element5.onkeyup=function() {calc(rowCount);}
        cell5.appendChild(element5);

        var cell6 = row.insertCell(5);
        var element6 = document.createElement("input");
        element6.type = "text";
        element6.class = "form-control";
        element6.name = "price[]";
        element6.id = "price"+rowCount
        cell6.appendChild(element6);

        $('input[type=text]').addClass('form-control');


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

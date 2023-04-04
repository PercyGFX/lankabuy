@extends('admin_frame')
@section ('admin_content')



                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <?php
                                $message=Session::get('message');
                                if($message){
            
                                    echo '<div class="alert alert-primary" role="alert">
                                    <p>';
            
                                    echo $message;
            
                                    echo '</p>
                                    </div>';
                                    Session::put('message',null);
                                }   ?>
                                @foreach($view_order_by_id as $view_order)
                                @endforeach
                                <h3 class="title-5 m-b-35">View Order From: {{$view_order->cus_name}} | Order Id : {{$view_order->order_id}} </h3>
                               
                                @if ($view_order->payment_status=="Pending")  

                                    <style>
                                        

                                        </style>
                                <div class="row align-self-center" >
                                        <div class="col-sm">
                                <div class="alert alert-danger" role="alert"> 
                                       This Order Is Not Paid Yet!
                                      </div>
                                    </div>

                                    <div class="col-sm">
                                            <a href="/mark-paid/{{$view_order->order_id}}" class="btn btn-primary">Mark as Paid!</a>
                                    </div>
                                    </div>

                                     
                                      @else

                                      <div class="row align-self-center" >

                                          <div class="col-sm">
                                                <div class="alert alert-success" role="alert"> 
                                                       This Order Is Already Paid!
                                                      </div>
                                                    </div>
                
                                                    <div class="col-sm">
                                                            <a href="/unmark-paid/{{$view_order->order_id}}" class="btn btn-danger">Mark as Not Paid!</a>
                                                    </div>
                                                </div>

                                      @endif


                                      <!-- order status -->

                                      @if ($view_order->order_status=="Pending")  

                                      <style>
                                          
  
                                          </style>
                                  <div class="row align-self-center" >
                                          <div class="col-sm">
                                  <div class="alert alert-danger" role="alert"> 
                                         This Order is not Shipped Yet!
                                        </div>
                                      </div>
  
                                      <div class="col-sm">
                                              <a href="/mark-completed/{{$view_order->order_id}}" class="btn btn-primary">Mark as Shipped</a>
                                      </div>
                                      </div>
  
                                       
                                        @else
  
                                        <div class="row align-self-center" >
  
                                            <div class="col-sm">
                                                  <div class="alert alert-success" role="alert"> 
                                                         This Order Is Already Shipped!
                                                        </div>
                                                      </div>
                  
                                                      <div class="col-sm">
                                                              <a href="/unmark-completed/{{$view_order->order_id}}" class="btn btn-danger">Mark as Not Shipped!</a>
                                                      </div>
                                                  </div>
  
                                        @endif
                                        <div class="alert alert-warning" role="alert">
                                               Check Below Details And Mark Order Above
                                             
                                        <h3>Order Amount Total : Rs {{$view_order->total}}</h3>
                                        </div

                                <div class="table-responsive table-responsive-data2">

                                    <!-- start card -->

                                        <div class="card">
                                                <div class="card-header">User Information</div>
                                                <div class="card-body">
                                               
                                              
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <label class="au-checkbox">
                                                       
                                                        
                                                    </label>
                                                </th>
                                                <th>User Name</th>
                                                <th>Phone</th>
                                                <th>Customer Name</th>
                                               
                                               
                                            </tr>
                                        </thead>

                                        <!-- for each start -->
                                       
                                        <tbody>
                                            <tr class="tr-shadow">
                                                    @foreach($view_order_by_id as $view_order)
                                                    @endforeach
                                                <td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                       
                                                    </label>
                                                </td>
                                                <td>{{$view_order->cus_email}}</td>
                                                <td>
                                                    <span>{{$view_order->cus_mobile}}</span>
                                                </td>
                                               
                                                <td>
                                                        {{$view_order->cus_name}}
                                                </td>
                                            
                                               
                                            
                                            </tr>
                                        </tbody>
                                        <!-- end foreach -->
                                    </table>
                                    </div></div>

                                    <!-- shipping info -->

                                    <div class="card">
                                            <div class="card-header">Shipping Details</div>
                                            <div class="card-body">
                                           
                                          
                                <table class="table table-data2">
                                    <thead>
                                        <tr>
                                            <th>
                                                <label class="au-checkbox">
                                                   
                                                    
                                                </label>
                                            </th>
                                            <th>Shipping Email</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Address</th>
                                            <th>Phone</th>
                                           
                                           
                                        </tr>
                                    </thead>
                                    
                                    <!-- for each start -->
                                 
                                    <tbody>
                                        <tr class="tr-shadow">
                                                @foreach($view_order_by_id as $view_order)
                                                @endforeach
                                            <td>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                   
                                                </label>
                                            </td>
                                            <td>  {{$view_order->shipping_email}}</td>
                                            <td>
                                                <span>  {{$view_order->shipping_fname}}</span>
                                            </td>
                                           
                                            <td>
                                                    {{$view_order->shipping_lname}}
                                            </td>
                                            <td>
                                                    {{$view_order->shipping_address}} ,  {{$view_order->shipping_city}},  {{$view_order->shipping_zipcode}}
                                                </td>
                                        
                                                <td>
                                                        {{$view_order->shipping_phone}}
                                                    </td>
                                                
                                           
                                        
                                        </tr>
                                    </tbody>
                                    <!-- end foreach -->
                                </table>
                                </div></div>

                                <!-- items -->

                                 <!-- start card -->

                                 <div class="card">
                                        <div class="card-header">Order Details</div>
                                        <div class="card-body">
                                       
                                      
                            <table class="table table-data2">
                                <thead>
                                    <tr>
                                        <th>
                                            <label class="au-checkbox">
                                               
                                                
                                            </label>
                                        </th>
                                        <th>Order</th>
                                        <th>Product Name</th>
                                        <th>Product Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                       
                                       
                                    </tr>
                                </thead>

                                <!-- for each start -->
                               
                                <tbody>
                                        @foreach($view_order_by_id as $view_order)
                                    <tr class="tr-shadow">
                                        <td>
                                            <label class="au-checkbox">
                                                <input type="checkbox">
                                               
                                            </label>
                                        </td>
                                        <td>  {{$view_order->order_id}}</td>
                                        <td>
                                            <span>  {{$view_order->product_name}}</span>
                                        </td>
                                       
                                        <td>
                                                {{$view_order->product_price}}
                                        </td>

                                        <td>
                                                {{$view_order->quantity}}
                                        </td>
                                       

                                        <td>
                                           RS {{$view_order->product_price*$view_order->quantity}}
                                        </td>

                                        @endforeach
                                    
                                       
                                    
                                    </tr>
                                </tbody>
                              
                                <!-- end foreach -->
                            </table>
                            </div></div>
                            <br />  

                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                       


@endsection
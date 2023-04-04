@extends('admin_frame')
@section ('admin_content')



                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Manage Orders</h3>
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
                                
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <label class="au-checkbox">
                                                       
                                                        
                                                    </label>
                                                </th>
                                                <th>Order ID</th>
                                                <th>Customer Name</th>
                                                <th>Order Total</th>
                                               
                                                <th>Status</th>
                                              
                                                <th>Actions</th>
                                            </tr>
                                        </thead>

                                        @foreach ($view_order_show as $view_order_show)
                                        <tbody>
                                            <tr class="tr-shadow">
                                                <td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                       
                                                    </label>
                                                </td>
                                                <td>{{$view_order_show->order_id}}</td>
                                                <td>
                                                    <span>{{$view_order_show->cus_name}}</span>
                                                </td>
                                                <td class="desc">RS {{$view_order_show->total}}</td>
                                                
                                                <td>
                                                @if ($view_order_show->order_status=="Pending") 

                                                <span class="badge badge-danger">Processing</span>
                                                

                                                    @else

                                                    <span class="badge badge-success">Completed</span>

                                                    @endif

                                                </td>
                                            
                                                <td>
                                                    <div class="">

                                                   
                                                    
                                                        <a href="{{URL::to('/view-order/'.$view_order_show->order_id)}}" class="btn btn-primary" >
                                                            <p>View Order</p>
                                                        </a>
                                                        <a href="{{URL::to('/delete-order/'.$view_order_show->order_id)}}" class="btn btn-danger delete" id="delete">
                                                            <p>Delete</p>
                                                        </a>
                                                        
                                                    </div>
                                                </td>
                                            
                                            </tr>
                                        </tbody>

                                        @endforeach
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                       


@endsection
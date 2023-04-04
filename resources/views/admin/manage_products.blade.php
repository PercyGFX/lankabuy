@extends('admin_frame')
@section ('admin_content')



                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Manage Categories</h3>
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
                                                
                                                <th>Product Name</th>
                                                <th>Description</th>
                                                <th>Image</th>
                                                <th>Category</th>
                                                <th>Price</th>
                                                <th>Weight</th>
                                                <th>Brand</th>
                                                <th>Status</th>
                                              
                                                <th>Actions</th>
                                            </tr>
                                        </thead>

                                        @foreach ($view_product_show as $view_products)
                                        <tbody>
                                            <tr class="tr-shadow">
                                                <td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                       
                                                    </label>
                                                </td>
                                              
                                                <td>
                                                    <span>{{$view_products->product_name}}</span>
                                                </td>
                                                <td >{{$view_products->product_short_description}}</td>

                                                <td ><img src="{{$view_products->product_image}}" width="50" height="50" ></td>

                                                <td>{{$view_products->category_name}}</td>

                                                <td >${{$view_products->product_price}}</td>

                                                <td >{{$view_products->product_weight}}KG</td>

                                                <td >{{$view_products->product_brand}}</td>
                                                
                                                <td>
                                                @if ($view_products->product_isactive==1) 

                                                
                                                <span class="badge badge-success">Active</span>

                                                    @else

                                                    <span class="badge badge-danger">Not Active</span>

                                                    @endif

                                                </td>
                                                
                                                <td>
                                                    <div class="">

                                                    @if ($view_products->product_isactive==1) 

                                                
                                                    <a href="{{URL::to('/disable-product/'.$view_products->product_id)}}" class="btn btn-warning" >
                                                            <p>Deactivate</p>
                                                        </a>

                                                                @else

                                                                <a href="{{URL::to('/activate-product/'.$view_products->product_id)}}" class="btn btn-success" >
                                                            <p>Active</p>
                                                        </a>

                                                        @endif
                                                    
                                                        <a href="{{URL::to('/edit-products/'.$view_products->product_id)}}" class="btn btn-primary" >
                                                            <p>Edit</p>
                                                        </a>
                                                        <a href="{{URL::to('/delete-product/'.$view_products->product_id)}}" class="btn btn-danger delete" id="delete">
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
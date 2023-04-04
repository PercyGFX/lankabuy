@extends ('admin_frame')
@section('admin_content')

<div class="card">
                                    <div class="card-header">
                                        <strong>Add</strong> Products
                                    </div>
                                    <div class="card-body card-block">
                                   <!-- success message alert-->
                                    
                    <?php
                    $message=Session::get('message');
                    if($message){

                        echo '<div class="alert alert-success" role="alert">
                        <p>';

                        echo $message;

                        echo '</p>
                        </div>';
                        Session::put('message',null);
                    }   ?>
                    
    <!-- success message alert-->
                                        <form action="{{URL::to('/update-products/'.$product_edit->product_id)}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                                        @csrf
                                            <!-- Product name-->
                                            <div class="row form-group">
                                               
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Product Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="product_name" placeholder="Category Name" class="form-control" value="{{$product_edit->product_name}}">
                                                    <small class="form-text text-muted">Enter a name for your product</small>
                                                </div>
                                            </div>
                                             <!-- category drop down-->
                                           

                                            
                                            <!-- product short description-->
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Product Short Description</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="short_description" rows="9" placeholder="Description..." class="form-control">{{$product_edit->product_short_description}}</textarea>
                                                </div>
                                            </div>

                                            <!-- product long description-->

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Product Long Description</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="long_description" rows="9" placeholder="Description..." class="form-control">{{$product_edit->product_long_description}}</textarea>
                                                </div>
                                            </div>

                                               <!-- product price-->
                                               <div class="row form-group">
                                               
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Product Price</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number" id="text-input" name="product_price" placeholder="Product Price" class="form-control" value="{{$product_edit->product_price}}">
                                                    <small class="form-text text-muted">Enter product price in US Dollars</small>
                                                </div>
                                            </div>

                                            <!-- product file input-->

                                          
                                            <div class="row form-group">
                                            <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Product Image</label>
                                                </div>
                                                <div class="col-12 col-md-9">

                                                <img src="../{{$product_edit->product_image}}" width="150" height="150">

                                                     <input type="file" class="form-control" name="product_image" id="imgInp" aria-describedby="inputGroupFileAddon01">
                                                   
                                                     <label class="form-control" for="inputGroupFile01">Select Image</label>
                                                    </div>
                                                    </div>
                                                      <!-- product file input-->

                                                       <!-- product weight-->
                                               <div class="row form-group">
                                               
                                               <div class="col col-md-3">
                                                   <label for="text-input" class=" form-control-label">Product Weight</label>
                                               </div>
                                               <div class="col-12 col-md-9">
                                                   <input type="number" id="text-input" name="product_weight" placeholder="Product Weight" class="form-control" value="{{$product_edit->product_weight}}" >
                                                   <small class="form-text text-muted">Enter weight in KilloGrams</small>
                                               </div>
                                           </div>

                                            <!-- product brands-->
                                            <div class="row form-group">
                                               
                                               <div class="col col-md-3">
                                                   <label for="text-input" class=" form-control-label">Product Brand</label>
                                               </div>
                                               <div class="col-12 col-md-9">
                                                   <input type="text" id="text-input" name="product_brand" placeholder="Product Brand" class="form-control" value="{{$product_edit->product_brand}}">
                                               
                                               </div>
                                           </div>
                                            <!-- is active-->

                                            
                                            
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i>Update Product
                                        </button>
                                        <a href="/manage-products" type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Cancel
                                        </a>
                                   
                                        </form>
                                    </div>
                                    
                                </div>

@endsection
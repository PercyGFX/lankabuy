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
                                        <form action="/route-add-products" method="post" class="form-horizontal" enctype="multipart/form-data">
                                        @csrf
                                            <!-- Product name-->
                                            <div class="row form-group">
                                               
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Product Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="product_name" placeholder="Category Name" class="form-control">
                                                    <small class="form-text text-muted">Enter a name for your product</small>
                                                </div>
                                            </div>
                                             <!-- category drop down-->
                                           

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Product Category</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="product_categoryid" id="select" class="form-control">
                                                        <option value="0">Please select</option>
                                                        <?php
                                            $active_category=DB::table('category')
                                                ->where('category_isactive',1)
                                                ->get();

                                                foreach($active_category as $active_category){?>
                                                        <option value="{{$active_category->category_id}}">{{$active_category->category_name}}</option>

                                                <?php } ?>
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <!-- product short description-->
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Product Short Description</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="short_description" rows="9" placeholder="Description..." class="form-control"></textarea>
                                                </div>
                                            </div>

                                            <!-- product long description-->

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Product Long Description</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="long_description" rows="9" placeholder="Description..." class="form-control"></textarea>
                                                </div>
                                            </div>

                                               <!-- product price-->
                                               <div class="row form-group">
                                               
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Product Price</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number" id="text-input" name="product_price" placeholder="Product Price" class="form-control">
                                                    <small class="form-text text-muted">Enter product price in US Dollars</small>
                                                </div>
                                            </div>

                                            <!-- product file input-->
                                            <div class="row form-group">
                                            <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Product Image</label>
                                                </div>
                                                <div class="col-12 col-md-9">
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
                                                   <input type="number" id="text-input" name="product_weight" placeholder="Product Weight" class="form-control">
                                                   <small class="form-text text-muted">Enter weight in KilloGrams</small>
                                               </div>
                                           </div>

                                            <!-- product brands-->
                                            <div class="row form-group">
                                               
                                               <div class="col col-md-3">
                                                   <label for="text-input" class=" form-control-label">Product Brand</label>
                                               </div>
                                               <div class="col-12 col-md-9">
                                                   <input type="text" id="text-input" name="product_brand" placeholder="Product Brand" class="form-control">
                                               
                                               </div>
                                           </div>
                                            <!-- is active-->

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Is Active ?</label>
                                                </div>
                                                <div class="col col-md-9">
                                                    <div class="form-check">
                                                        <div class="checkbox">
                                                                <input type="hidden" name="product_isactive" value="0">
                                                                <input type="checkbox" id="checkbox1" name="product_isactive" checked value="1" class="form-check-input">
                                                           
                                                        </div>
                                                        
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i>Add Product
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                   
                                        </form>
                                    </div>
                                    
                                </div>

@endsection
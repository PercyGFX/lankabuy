@extends ('admin_frame')
@section('admin_content')

<div class="card">
                                    <div class="card-header">
                                        <strong>Add</strong> Category
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
                                        <form action="/route-add-category" method="post" class="form-horizontal">
                                        @csrf
                                            
                                            <div class="row form-group">
                                               
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Category Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="category_name" placeholder="Category Name" class="form-control">
                                                    <small class="form-text text-muted">Enter a name for product category</small>
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Category Description</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="category_description" rows="9" placeholder="Description..." class="form-control"></textarea>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Is Active ?</label>
                                                </div>
                                                <div class="col col-md-9">
                                                    <div class="form-check">
                                                        <div class="checkbox">
                                                                <input type="hidden" name="category_isactive" value="0">
                                                                <input type="checkbox" id="checkbox1" name="category_isactive" checked value="1" class="form-check-input">
                                                           
                                                        </div>
                                                        
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i>Add Category
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                   
                                        </form>
                                    </div>
                                    
                                </div>

@endsection
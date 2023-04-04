@extends ('admin_frame')
@section('admin_content')

<div class="card">
                                    <div class="card-header">
                                        <strong>Update</strong> Category
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
                                        <form action="{{URL::to('/update-category/'.$category_edit->category_id)}}" method="post" class="form-horizontal">
                                        @csrf
                                            
                                            <div class="row form-group">
                                               
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Category Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="category_name" placeholder="Category Name" class="form-control" value="{{$category_edit->category_name}}">
                                                    <small class="form-text text-muted">Enter a name for product category</small>
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label" >Category Description</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="category_description" rows="9"  class="form-control">{{$category_edit->category_description}}</textarea>
                                                </div>
                                            </div>

                                            
                                            
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i>Update
                                        </button>
                                        <a href="/manage-category" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Cancel
                                        </a>
                                   
                                        </form>
                                    </div>
                                    
                                </div>

@endsection
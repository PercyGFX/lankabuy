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
                                                <th>ID</th>
                                                <th>Category Name</th>
                                                <th>Category Description</th>
                                               
                                                <th>Status</th>
                                              
                                                <th>Actions</th>
                                            </tr>
                                        </thead>

                                        @foreach ($view_category_show as $view_category)
                                        <tbody>
                                            <tr class="tr-shadow">
                                                <td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                       
                                                    </label>
                                                </td>
                                                <td>{{$view_category->category_id}}</td>
                                                <td>
                                                    <span>{{$view_category->category_name}}</span>
                                                </td>
                                                <td class="desc">{{$view_category->category_description}}</td>
                                                
                                                <td>
                                                @if ($view_category->category_isactive==1) 

                                                
                                                <span class="badge badge-success">Active</span>

                                                    @else

                                                    <span class="badge badge-danger">Not Active</span>

                                                    @endif

                                                </td>
                                                
                                                <td>
                                                    <div class="">

                                                    @if ($view_category->category_isactive==1) 

                                                
                                                    <a href="{{URL::to('/disable-category/'.$view_category->category_id)}}" class="btn btn-warning" title="Delete">
                                                            <p>Deactivate</p>
                                                        </a>

                                                                @else

                                                                <a href="{{URL::to('/active-category/'.$view_category->category_id)}}" class="btn btn-success" >
                                                            <p>Active</p>
                                                        </a>

                                                        @endif
                                                    
                                                        <a href="{{URL::to('/edit-category/'.$view_category->category_id)}}" class="btn btn-primary" >
                                                            <p>Edit</p>
                                                        </a>
                                                        <a href="{{URL::to('/delete-category/'.$view_category->category_id)}}" class="btn btn-danger delete" id="delete">
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
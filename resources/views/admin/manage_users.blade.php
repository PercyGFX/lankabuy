@extends('admin_frame')
@section ('admin_content')



                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Manage Users</h3>
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
                                                <th>User Email</th>
                                                <th>User Name</th>
                                                <th>User Phone Number</th>
                                               
                                        
                                              
                                              <!--  <th>Actions</th> -->
                                            </tr>
                                        </thead>

                                        @foreach ($view_users_show as $view_category)
                                        <tbody>
                                            <tr class="tr-shadow">
                                                <td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                       
                                                    </label>
                                                </td>
                                                <td>{{$view_category->cus_id}}</td>
                                                <td>
                                                    <span>{{$view_category->cus_name}}</span>
                                                </td>
                                                <td class="desc">{{$view_category->cus_email}}</td>
                                                
                                                <td>
                                              

                                                <span>{{$view_category->cus_mobile}}</span>

                                                   

                                                </td>
                                                <!--
                                                <td>
                                                    <div class="">

                                               
                                                    
                                                        <a href="" class="btn btn-primary" >
                                                            <p>Edit</p>
                                                        </a>
                                                        <a href="" class="btn btn-danger delete" id="delete">
                                                            <p>Delete</p>
                                                        </a>
                                                        
                                                    </div>
                                                </td>

                                            -->
                                            </tr>
                                        </tbody>

                                        @endforeach
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                       


@endsection
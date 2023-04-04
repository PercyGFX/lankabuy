@extends('admin_frame')
@section('admin_content')
<div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">overview</h2>
                                  
                                        <a href="/add-products" class="au-btn au-btn-icon au-btn--blue zmdi zmdi-plus">add item</a>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                    <p>Welcome to the Lankabuy Admin Dashboard!. Please use sidebar links 
                    </div>
                    <br />  <br />
                </div>
                <div class="container">
                <p>Search For Order Detials </p>
                <div class="row">
                   
                    <div class="col-sm">
                <div class="input-group">
                        <div class="input-group-btn">
                            <form action="/search-order" method="post">
                                @csrf
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-search"></i> Search for Order
                            </button>
                        </div>
                        <input type="number" id="input1-group2" name="search" placeholder="Order Id" class="form-control">
                    </form>
                    </div>
                </div>
                </div>
            </div>

                @endsection
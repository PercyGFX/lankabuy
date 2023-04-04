@extends('layout')
@section('content')

<style>

.profile-env > header {
  position: relative;
  z-index: 20;
  margin-top: 30px;
}
.profile-env > header .profile-picture {
  position: relative;
}
.profile-env > header .profile-picture img {
  float: right;
  -moz-box-shadow: 0px 0px 0px 5px rgba(255, 255, 255, 0.9);
  -webkit-box-shadow: 0px 0px 0px 5px rgba(255, 255, 255, 0.9);
  box-shadow: 0px 0px 0px 5px rgba(255, 255, 255, 0.9);
  -moz-transition: all 300ms ease-in-out;
  -webkit-transition: all 300ms ease-in-out;
  -o-transition: all 300ms ease-in-out;
  transition: all 300ms ease-in-out;
}
.profile-env > header .profile-picture:hover img {
  zoom: 1;
  -webkit-opacity: 0.5;
  -moz-opacity: 0.5;
  opacity: 0.5;
  filter: alpha(opacity=50);
}
.profile-env > header .profile-info-sections {
  margin: 0;
  padding: 0;
  margin-top: 15px;
  padding-left: 0;
  list-style: none;
  margin-left: -5px;
}
.profile-env > header .profile-info-sections > li {
  display: inline-block;
  padding-left: 5px;
  padding-right: 5px;
}
.profile-env > header .profile-info-sections .profile-name strong,
.profile-env > header .profile-info-sections .profile-name span {
  display: block;
}
.profile-env > header .profile-info-sections .profile-name strong {
  font-size: 18px;
  font-weight: normal;
}
.profile-env > header .profile-info-sections .profile-name span {
  font-size: 12px;
  color: #bbbbbb;
}
.profile-env > header .profile-info-sections .profile-name span a {
  color: #bbbbbb;
  -moz-transition: all 300ms ease-in-out;
  -webkit-transition: all 300ms ease-in-out;
  -o-transition: all 300ms ease-in-out;
  transition: all 300ms ease-in-out;
}
.profile-env > header .profile-info-sections .profile-name span a:hover {
  color: #888888;
}
.profile-env > header .profile-info-sections .profile-name .user-status {
  position: relative;
  display: inline-block;
  background: #575d67;
  top: -2px;
  margin-left: 5px;
  width: 6px;
  height: 6px;
  -webkit-border-radius: 6px;
  -webkit-background-clip: padding-box;
  -moz-border-radius: 6px;
  -moz-background-clip: padding;
  border-radius: 6px;
  background-clip: padding-box;
  -moz-transition: all 300ms ease-in-out;
  -webkit-transition: all 300ms ease-in-out;
  -o-transition: all 300ms ease-in-out;
  transition: all 300ms ease-in-out;
}
.profile-env > header .profile-info-sections .profile-name .user-status.is-online {
  background-color: #06b53c;
}
.profile-env > header .profile-info-sections .profile-name .user-status.is-offline {
  background-color: #575d67;
}
.profile-env > header .profile-info-sections .profile-name .user-status.is-idle {
  background-color: #f7d227;
}
.profile-env > header .profile-info-sections .profile-name .user-status.is-busy {
  background-color: #ee4749;
}
.profile-env > header .profile-info-sections .profile-stat h3 {
  font-size: 18px;
  margin-bottom: 5px;
}
.profile-env > header .profile-info-sections .profile-stat span {
  color: #bbbbbb;
}
.profile-env > header .profile-info-sections .profile-stat span a {
  color: #bbbbbb;
  -moz-transition: all 300ms ease-in-out;
  -webkit-transition: all 300ms ease-in-out;
  -o-transition: all 300ms ease-in-out;
  transition: all 300ms ease-in-out;
}
.profile-env > header .profile-info-sections .profile-stat span a:hover {
  color: #888888;
}
.profile-env > header .profile-info-sections > li {
  padding: 0 40px;
  position: relative;
}
.profile-env > header .profile-info-sections > li + li:after {
  content: '';
  display: block;
  position: absolute;
  top: 15px;
  bottom: 0;
  left: 0;
  width: 1px;
  background: #ebebeb;
  margin: 8px 0;
}
.profile-env > header .profile-info-sections > li:first-child {
  padding-left: 0;
}
.profile-env > header .profile-buttons {
  margin-top: 35px;
}
.profile-env > header .profile-buttons a {
  margin: 0 4px;
  -moz-transition: all 300ms ease-in-out;
  -webkit-transition: all 300ms ease-in-out;
  -o-transition: all 300ms ease-in-out;
  transition: all 300ms ease-in-out;
}
.profile-env section {
  position: relative;
  z-index: 10;
}
.profile-env section.profile-info-tabs {
  position: relative;
  background: #f1f1f1;
  margin-left: -20px;
  margin-right: -20px;
  padding: 20px;
  margin-top: -20px;
  margin-bottom: 30px;
}
.profile-env section.profile-info-tabs .user-details {
  padding-left: 0;
  list-style: none;
}
.profile-env section.profile-info-tabs .user-details li {
  margin-bottom: 10px;
}
.profile-env section.profile-info-tabs .user-details li a {
  color: #a0a0a0;
  -moz-transition: all 300ms ease-in-out;
  -webkit-transition: all 300ms ease-in-out;
  -o-transition: all 300ms ease-in-out;
  transition: all 300ms ease-in-out;
}
.profile-env section.profile-info-tabs .user-details li a:hover {
  color: #606060;
}
.profile-env section.profile-info-tabs .user-details li a:hover span {
  color: #e72c28;
}
.profile-env section.profile-info-tabs .user-details li a i {
  margin-right: 5px;
}
.profile-env section.profile-info-tabs .user-details li a span {
  color: #ec5956;
  font-weight: normal;
  -moz-transition: all 300ms ease-in-out;
  -webkit-transition: all 300ms ease-in-out;
  -o-transition: all 300ms ease-in-out;
  transition: all 300ms ease-in-out;
}
.profile-env section.profile-info-tabs .nav-tabs {
  position: relative;
  margin-bottom: -20px;
  border-bottom: 0;
}
.profile-env section.profile-info-tabs .nav-tabs > li:first-child a {
  margin-left: 0;
}
.profile-env section.profile-info-tabs .nav-tabs li {
  margin-bottom: 0;
}
.profile-env section.profile-info-tabs .nav-tabs li a {
  border: none;
  padding: 10px 35px;
  font-size: 13px;
  background: #e1e1e1;
  margin-right: 10px;
}
.profile-env section.profile-info-tabs .nav-tabs li.active a {
  background: #fff;
}
.profile-env section.profile-feed {
  margin-bottom: 15px;
  padding-left: 20px;
  padding-right: 20px;
}
.profile-env section.profile-feed .profile-post-form {
  border: 1px solid #ebebeb;
  margin-bottom: 30px;
  -webkit-border-radius: 3px;
  -webkit-background-clip: padding-box;
  -moz-border-radius: 3px;
  -moz-background-clip: padding;
  border-radius: 3px;
  background-clip: padding-box;
}
.profile-env section.profile-feed .profile-post-form .form-control {
  border: none;
  -moz-box-shadow: none;
  -webkit-box-shadow: none;
  box-shadow: none;
  margin: 0;
  background: #fff;
  min-height: 80px;
  -webkit-border-radius: 3px;
  -webkit-background-clip: padding-box;
  -moz-border-radius: 3px;
  -moz-background-clip: padding;
  border-radius: 3px;
  background-clip: padding-box;
}
.profile-env section.profile-feed .profile-post-form .form-options {
  background: #f3f3f3;
  border-top: 1px solid #ebebeb;
  padding: 10px;
}
.profile-env section.profile-feed .profile-post-form .form-options:before,
.profile-env section.profile-feed .profile-post-form .form-options:after {
  content: " ";
  display: table;
}
.profile-env section.profile-feed .profile-post-form .form-options:after {
  clear: both;
}
.profile-env section.profile-feed .profile-post-form .form-options .post-type {
  float: left;
  padding-top: 6px;
}
.profile-env section.profile-feed .profile-post-form .form-options .post-type a {
  margin-left: 10px;
  font-size: 13px;
  color: #aaaaaa;
  -moz-transition: all 300ms ease-in-out;
  -webkit-transition: all 300ms ease-in-out;
  -o-transition: all 300ms ease-in-out;
  transition: all 300ms ease-in-out;
}
.profile-env section.profile-feed .profile-post-form .form-options .post-type a:hover {
  color: #303641;
}
.profile-env section.profile-feed .profile-post-form .form-options .post-submit {
  float: right;
}
.profile-env section.profile-feed .profile-post-form .form-options .post-submit .btn {
  padding-left: 20px;
  padding-right: 20px;
}
.profile-env section.profile-feed .profile-stories article.story {
  margin: 30px 0;
}
.profile-env section.profile-feed .profile-stories article.story:before,
.profile-env section.profile-feed .profile-stories article.story:after {
  content: " ";
  display: table;
}
.profile-env section.profile-feed .profile-stories article.story:after {
  clear: both;
}
.profile-env section.profile-feed .profile-stories article.story .user-thumb {
  float: left;
  width: 8%;
}
.profile-env section.profile-feed .profile-stories article.story .user-thumb a img {
  -moz-box-shadow: 0px 0px 0px 3px rgba(0, 0, 0, 0.04);
  -webkit-box-shadow: 0px 0px 0px 3px rgba(0, 0, 0, 0.04);
  box-shadow: 0px 0px 0px 3px rgba(0, 0, 0, 0.04);
}
.profile-env section.profile-feed .profile-stories article.story .story-content {
  float: right;
  width: 92%;
}
.profile-env section.profile-feed .profile-stories article.story .story-content header {
  display: block;
  margin-bottom: 10px;
}
.profile-env section.profile-feed .profile-stories article.story .story-content header:before,
.profile-env section.profile-feed .profile-stories article.story .story-content header:after {
  content: " ";
  display: table;
}
.profile-env section.profile-feed .profile-stories article.story .story-content header:after {
  clear: both;
}
.profile-env section.profile-feed .profile-stories article.story .story-content header .publisher {
  float: left;
  color: #9b9fa6;
  font-size: 14px;
}
.profile-env section.profile-feed .profile-stories article.story .story-content header .publisher a {
  color: #303641;
}
.profile-env section.profile-feed .profile-stories article.story .story-content header .publisher em {
  display: block;
  font-style: normal;
  font-size: 12px;
}
.profile-env section.profile-feed .profile-stories article.story .story-content header .story-type {
  float: right;
}
.profile-env section.profile-feed .profile-stories article.story .story-content .story-main-content {
  font-size: 13px;
}
.profile-env section.profile-feed .profile-stories article.story .story-content .story-main-content p {
  font-size: 13px;
}
.profile-env section.profile-feed .profile-stories article.story .story-content footer {
  margin-top: 15px;
}
.profile-env section.profile-feed .profile-stories article.story .story-content footer .liked i {
  color: #ff4e50;
}
.profile-env section.profile-feed .profile-stories article.story .story-content footer > a {
  margin-right: 30px;
  display: inline-block;
}
.profile-env section.profile-feed .profile-stories article.story .story-content footer > a span {
  zoom: 1;
  -webkit-opacity: 0.6;
  -moz-opacity: 0.6;
  opacity: 0.6;
  filter: alpha(opacity=60);
}
.profile-env section.profile-feed .profile-stories article.story .story-content footer .comments {
  list-style: none;
  margin: 0;
  padding: 0;
  margin-top: 30px;
  border-top: 1px solid #ebebeb;
  padding-top: 20px;
}
.profile-env section.profile-feed .profile-stories article.story .story-content footer .comments li {
  display: table;
  vertical-align: top;
}
.profile-env section.profile-feed .profile-stories article.story .story-content footer .comments li:before,
.profile-env section.profile-feed .profile-stories article.story .story-content footer .comments li:after {
  content: " ";
  display: table;
}
.profile-env section.profile-feed .profile-stories article.story .story-content footer .comments li:after {
  clear: both;
}
.profile-env section.profile-feed .profile-stories article.story .story-content footer .comments li + li {
  margin-top: 15px;
}
.profile-env section.profile-feed .profile-stories article.story .story-content footer .comments li .user-comment-thumb,
.profile-env section.profile-feed .profile-stories article.story .story-content footer .comments li .user-comment-content {
  display: table-cell;
  vertical-align: top;
  width: 100%;
}
.profile-env section.profile-feed .profile-stories article.story .story-content footer .comments li .user-comment-thumb {
  width: 1%;
  padding-right: 20px;
}
.profile-env section.profile-feed .profile-stories article.story .story-content footer .comments li .user-comment-content {
  border-bottom: 1px solid #ebebeb;
  padding-bottom: 15px;
}
.profile-env section.profile-feed .profile-stories article.story .story-content footer .comments li .user-comment-content .user-comment-name {
  font-weight: bold;
}
.profile-env section.profile-feed .profile-stories article.story .story-content footer .comments li .user-comment-content .user-comment-meta {
  font-size: 11px;
  margin-top: 15px;
  color: #9b9fa6;
}
.profile-env section.profile-feed .profile-stories article.story .story-content footer .comments li .user-comment-content .user-comment-meta a {
  color: #8d929a;
  margin-right: 5px;
  -moz-transition: all 300ms ease-in-out;
  -webkit-transition: all 300ms ease-in-out;
  -o-transition: all 300ms ease-in-out;
  transition: all 300ms ease-in-out;
}
.profile-env section.profile-feed .profile-stories article.story .story-content footer .comments li .user-comment-content .user-comment-meta a + a {
  margin-left: 5px;
}
.profile-env section.profile-feed .profile-stories article.story .story-content footer .comments li .user-comment-content .user-comment-meta a i {
  zoom: 1;
  -webkit-opacity: 0.8;
  -moz-opacity: 0.8;
  opacity: 0.8;
  filter: alpha(opacity=80);
  -moz-transition: all 300ms ease-in-out;
  -webkit-transition: all 300ms ease-in-out;
  -o-transition: all 300ms ease-in-out;
  transition: all 300ms ease-in-out;
}
.profile-env section.profile-feed .profile-stories article.story .story-content footer .comments li .user-comment-content .user-comment-meta a:hover {
  color: #737881;
}
.profile-env section.profile-feed .profile-stories article.story .story-content footer .comments li .user-comment-content .user-comment-meta a:hover i {
  zoom: 1;
  -webkit-opacity: 1;
  -moz-opacity: 1;
  opacity: 1;
  filter: alpha(opacity=100);
}
.profile-env section.profile-feed .profile-stories article.story .story-content footer .comments li.comment-form .user-comment-content {
  position: relative;
  border-bottom: 0;
  padding-bottom: 0;
}
.profile-env section.profile-feed .profile-stories article.story .story-content footer .comments li.comment-form .user-comment-content .form-control {
  background: #eeeeee;
  border: 0;
}
.profile-env section.profile-feed .profile-stories article.story .story-content footer .comments li.comment-form .user-comment-content .btn {
  position: absolute;
  right: 5px;
  top: 5px;
  border: 0;
  background: transparent;
  color: #737881;
  font-size: 13px;
  zoom: 1;
  -webkit-opacity: 0.7;
  -moz-opacity: 0.7;
  opacity: 0.7;
  filter: alpha(opacity=70);
  -moz-transition: all 300ms ease-in-out;
  -webkit-transition: all 300ms ease-in-out;
  -o-transition: all 300ms ease-in-out;
  transition: all 300ms ease-in-out;
}
.profile-env section.profile-feed .profile-stories article.story .story-content footer .comments li.comment-form .user-comment-content .btn:hover {
  zoom: 1;
  -webkit-opacity: 1;
  -moz-opacity: 1;
  opacity: 1;
  filter: alpha(opacity=100);
}
.profile-env section.profile-feed .profile-stories article.story .story-content hr {
  margin-top: 40px;
}
@media (max-width: 992px) {
  .profile-env > header .profile-picture img {
    width: 90%;
  }
  .profile-env > header .profile-buttons {
    margin-top: 18px;
  }
  .profile-env > header .profile-info-sections .profile-name strong,
  .profile-env > header .profile-info-sections .profile-stat h3 {
    font-size: 16px;
  }
  .profile-env > header .profile-info-sections {
    margin-top: 0;
  }
  .profile-env > header .profile-info-sections > li {
    padding: 0 20px;
  }
  .profile-env section.profile-info-tabs .nav-tabs li a {
    padding-left: 25px;
    padding-right: 25px;
  }
  .profile-env section.profile-feed .profile-stories article.story .user-thumb {
    width: 10%;
  }
  .profile-env section.profile-feed .profile-stories article.story .story-content {
    width: 90%;
  }
}
@media (max-width: 768px) {
  .profile-env section.profile-info-tabs {
    margin-top: 30px;
  }
  .profile-env > header .profile-picture img {
    float: none;
  }
  .profile-env > header .profile-buttons a {
    margin-bottom: 5px;
  }
}
@media (max-width: 601px) {
  .profile-env > header .profile-info-sections {
    margin-bottom: 10px;
  }
  .profile-env > header .profile-info-sections li {
    padding: 15px;
  }
  .profile-env > header .profile-info-sections > li:first-child {
    padding-left: 0;
  }
  .profile-env > header .profile-buttons {
    margin-top: 0;
  }
  .profile-env > header .profile-picture {
    text-align: center;
    display: block;
  }
  .profile-env > header .profile-picture img {
    width: auto;
    float: none;
    display: inline-block;
    margin-bottom: 15px;
  }
  .profile-env section.profile-feed .profile-stories article.story .user-thumb {
    width: 18%;
  }
  .profile-env section.profile-feed .profile-stories article.story .story-content {
    width: 82%;
  }
  .profile-env section.profile-info-tabs .nav-tabs li a {
    padding-left: 15px;
    padding-right: 15px;
    margin-right: 5px;
    font-size: 12px;
  }
  .profile-env section.profile-feed {
    padding: 0;
  }
  .profile-env .col-sm-7,
  .profile-env .col-sm-3 {
    text-align: center;
  }
  .profile-env .col-sm-7 .profile-info-sections,
  .profile-env .col-sm-3 .profile-info-sections,
  .profile-env .col-sm-7 .profile-buttons,
  .profile-env .col-sm-3 .profile-buttons {
    display: inline-block;
  }
  .profile-env > header .profile-info-sections > li + li:after {
    margin: 18px 0;
  }
}
                                    
    </style>

@foreach($view_order_by_id as $view_order)
@endforeach

<div class="container">
    <h3>My Account</h3>
        <div class="profile-env">
            <header class="row">
                <div class="col-sm-2">
                    <a href="#" class="profile-picture">
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="img-responsive img-circle"> </a>
                </div>
                <div class="col-sm-7">
                    <ul class="profile-info-sections">
                        <li>
                            <div class="profile-name">
                                <strong>
                                    <a href="#">{{$view_order->cus_name}}</a>
                                    <a href="#" class="user-status is-online tooltip-primary" data-toggle="tooltip" data-placement="top" data-original-title="Online"></a>
                                </strong>
                                <span>
                                    <a href="#">{{$view_order->cus_email}}</a>
                                </span>
                            </div>
                        </li>
                        <li>
                            <div class="profile-stat">
                                <h3>{{$view_order->cus_mobile}}</h3>
                                <span>
                                    <a href="#">Phone Number</a>
                                </span>
                            </div>
                        </li>
                        
                    </ul>
                </div>
                <div class="col-sm-3">
                    <div class="profile-buttons">
                        <a href="#" class="btn btn-default">
                            Edit
                        </a>
                    </div>
                </div>
            </header>
           <br />
           <br />
            
        </div>
    </div>

    <!-- end -->
<div class="container">
        <h4>My Orders</h4>

        <div class="alert alert-warning" role="alert">
                You can see all of your orders and status below
              </div>

<table class="table table-borderless">
        <thead>
          <tr>
            <th scope="col">Order Id</th>
            <th scope="col">Item Name</th>
            <th scope="col">Quantity</th>
            <th scope="col">Total</th>
            <th scope="col">Order Status</th>
            <th scope="col">Payment Status</th>
          </tr>
        </thead>
        @foreach($view_order_by_id as $view_order)
        <tbody>
          <tr>
            <th scope="row">{{$view_order->order_id}}</th>
            <td>{{$view_order->product_name}}</td>
            <td>{{$view_order->quantity}}</td>
            <td>RS {{$view_order->quantity*$view_order->product_price}}</td>

            @if ($view_order->order_status=="Pending")
            <td> <span class="badge badge-danger">Pending</span></td>

            @else

            <td> <span class="badge badge-primary">Shipped</span></td>

            @endif

            @if ($view_order->payment_status=="Pending")
            <td> <span class="badge badge-danger">Pending</span></td>


            @else

            <td> <span class="badge badge-success">Paid</span></td>


            @endif
          </tr>
          
         
        </tbody>
        
        @endforeach
      </table>

    </div>


  
    
      
        


      @endsection
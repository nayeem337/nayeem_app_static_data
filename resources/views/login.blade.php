@extends('master')

@section('title')
    Login Page
@endsection


@section('body')
   <section class="py-5">
       <div class="container">
           <div class="row">
               <div class="col-md-6 mx-auto">
                   <div class="card">
                       <div class="card-header"> Login Form </div>
                       <div class="card-body">
                           <h4 class="text-center text-bg-warning"> {{session('message')}} </h4>
                           <form action="{{route('login')}}" method="POST">
                               @csrf
                               <div class="row mb-3">
                                   <label class="col-md-3"> Email Address </label>
                                   <div class="col-md-9">
                                       <input type="email" class="form-control" name="email" />
                                   </div>
                               </div>
                               <div class="row mb-3">
                                   <label class="col-md-3"> Password </label>
                                   <div class="col-md-9">
                                       <input type="password" class="form-control" name="password" />
                                   </div>
                               </div>
                               <div class="row mb-3">
                                   <label class="col-md-3"></label>
                                   <div class="col-md-9">
                                       <input type="submit" class="btn btn-success" value="Login" />
                                   </div>
                               </div>
                           </form>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
@endsection


@extends('master')
@push('css')
@endpush 

@section('title','Create Contact')

@section('content')

<div class="content" style="min-height: 1345.31px;">
     <section class="content-header">
       <div class="container-fluid">
         <div class="row mb-2">
           <div class="col-sm-6">
             <h1>Create Contact</h1>
           </div>
           <div class="col-sm-6">
             <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="#">Home</a></li>
               <li class="breadcrumb-item active">Create Contact</li>
             </ol>
           </div>
         </div>
       </div>
     </section>
     @if(Session::has("success"))
     <div class="alert alert-success">
         {{Session::get("success")}}
     </div>
 @elseif(Session::has("failed")) 
     {{Session::get("failed")}}
 @endif
     <section class="content">
       <div class="container-fluid">
         <div class="row">
           <div class="col-md-12">
             <div class="card card-primary">
               <div class="card-header">
                 <h3 class="card-title">Create Contact</h3>
                 <div class="float-right">
                    <a href="{{ url('/') }}" class="btn btn-danger  btn-sm"><i
                         class="fa fa-fast-backward" aria-hidden="true"></i>
                     Back</a>
                 </div>
               </div>
               <form id="quickForm" novalidate="novalidate"  action="{{url('create')}}"
                    method="post" enctype="multipart/form-data" id="regForm">
                    {{ @csrf_field() }}
                 <div class="card-body">
                   <div class="form-group">
                     <label for="exampleInputEmail1">Name <span class="text-danger">*</span></label>
                     <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter Name">
                     @error('name')
                     <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                     </span>
                @enderror
                   </div>
                   <div class="form-group">
                     <label for="exampleInputPassword1">Address <span class="text-danger">*</span></label>
                     <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" id="address" placeholder="Enter Name">
                     @error('address')
                     <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                     </span>
                @enderror
                   </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Email <span class="text-danger">*</span></label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter Email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                    </span>
               @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Phone Number <span class="text-danger">*</span></label>
                    <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" placeholder="Enter Phone Number">
                    @error('phone')
                    <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                    </span>
               @enderror
                  </div>
                 </div>
                 <div class="card-footer">
                   <button type="submit" class="btn btn-primary">Submit</button>
                 </div>
               </form>
             </div>
             </div>
           <div class="col-md-6">
 
           </div>

         </div>
       </div>
     </section>
   </div>

   @endsection

   @push('js')

@endpush 



@extends('master')
@push('css')
@endpush 

@section('title','Adderss Book')

@section('content')

<div class="content">
     <section class="content-header">
       <div class="container-fluid">
         <div class="row mb-2">
           <div class="col-sm-6">
             <h1>Address Book</h1>
           </div>
           <div class="col-sm-6">
             <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="#">Home</a></li>
               <li class="breadcrumb-item active">Address Book</li>
             </ol>
           </div>
         </div>
       </div>
     </section>
 
 
     <section class="content">
       <div class="container-fluid">
           <div class="page-data" id="page-data">
                <div class="row">
                    <div class="col">
                     
                    </div>
                 </div>
         <div class="row">
           <div class="col-12">
 
             <div class="card">
               <div class="card-header">
                 <h3 class="card-title">Adderss Book</h3>
                 <div class="float-right">
                    <a href={{url('/create')}}
                        class="btn btn-success btn-sm  text-white ">
                        <i class="fa fa-plus" aria-hidden="true"></i> Create New
                    </a>
                 </div>
               </div>
               <div class="card-body">
                 <table id="example1" class="table table-bordered table-striped">
                   <thead>
                   <tr>
                     <th>#</th>
                     <th>Name</th>
                     <th>Address</th>
                     <th>Email</th>
                     <th>Phone Number</th>
                     <th>Status</th>
                   </tr>
                   </thead>
                   <tbody>
                     @php
                     $i=0;
                     @endphp
                      @foreach($contacts as $new)
                      <tr>
                         <td>{{ $i=$i+1 }}</td>
                          <td>{{$new->name}}</td>
                          <td width="10%">{{$new->address}}</td>
                          
                          <td width="20%">{{$new->email}}</td>
                          <td>{{$new->phone}}</td>
                          
                     <td>
                          @if($new->active_flag==0)
                          <span class="badge badge-danger">InActive</span>
                          @else
                          <span class="badge badge-success">Active</span>
                          @endif
                     </td>
 
 
                     </tr>
                     @endforeach
                   </tbody>
                 </table>
               </div>
             </div>
           </div>
       </div>
     </section>
   </div>
   @endsection
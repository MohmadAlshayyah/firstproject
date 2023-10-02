@extends('layouts.index')

@section('coupons')
     <!-- Page Sidebar Ends-->

     <style>

.purple-button {
  display: inline-block;
  padding: 10px 20px;
  background-color: #8a2be2; /* اللون البنفسجي */
  color: white;
  text-decoration: none;
  border-radius: 5px;
  font-weight: bold;
  transition: background-color 0.3s ease;
}

.purple-button:hover {
  background-color: #6a1cb7; /* تغيير لون الخلفية عند التحويم */
}
  </style>

<style>

body {
  font-family: Arial, sans-serif;
}

table {
  border-collapse: collapse;
  width: 100%;
  max-width: 400px;
}

table, th, td {
  border: 1px solid #ccc;
}



.toggle-switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.toggle-switch input {
  display: none;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  transition: 0.4s;
  border-radius: 34px;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  transition: 0.4s;
  border-radius: 50%;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:checked + .slider:before {
  transform: translateX(26px);
}

              </style>
     <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-6">
                  <h3>Basic DataTables</h3>
                </div>
                <div class="col-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">                                       <i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Data Tables</li>
                    <li class="breadcrumb-item active">Basic DataTables</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
     <!-- Container-fluid starts-->
     <div class="container-fluid">
            <div class="row">
              <!-- Zero Configuration  Starts-->
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header pb-0">
                    <h2>All Products</h2>

                    <a href="createcoupons" class="purple-button"> + add</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="display" id="basic-1">
                        <thead>
                          <tr>
                            <th></th>
                            <th>Title</th>
                            <th>Code </th>
                            <th>	No. Of Times</th>
                            <th>Discount </th>
                            <th>Status </th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($coupons  as  $cou )
                          <tr>
                          <td><input type="checkbox"></td>
                            <td>{{$cou -> titele }}</td>
                            <td>{{$cou -> code }}</td>
                            <td>{{$cou -> times}}</td>
                            <td>{{$cou -> discount }}</td>
                            <td>
      {{$cou -> getActive()}}
      </td>
                            <td> 
                              <ul class="action"> 
                              <li class="edit"> <a href="{{url('ecommerce/editcoupons/'.$cou -> id)}}"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="{{url('ecommerce/deletecoupons/'.$cou -> id)}}"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                      @endforeach
                     
                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Zero Configuration  Ends-->


@stop
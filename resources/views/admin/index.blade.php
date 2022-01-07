@extends('admin.layout.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Mange Exam Name  </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Tables</a></li>
            <li class="breadcrumb-item active" aria-current="page">Exam Name tables</li>
          </ol>
        </nav>
      </div>
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <table class="table">
                <thead>
                  <tr>
                    <th>Exam Name </th>
                    <th>Description</th>
                    <th>image</th>
                 </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><label class="badge badge-success">Completed</label></td>
                    <td>53275534</td>
                    <td>16 May 2017</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
    
@endsection
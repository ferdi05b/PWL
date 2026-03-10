@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Dashboard</h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="#">
                            <i class="icon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Pages</a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Category Page</a>
                    </li>
                </ul>
            </div>
           <div class="card">
               <div class="card-header">
                   <a href="{{route('category.create') }}" class="btn btn-primary" role="button">Add Category</a>
               </div>
               <div class="card-body">
                   <table class="table table-striped">
                       <thead>
                           <tr>
                               <th>ID</th>
                               <th>Name</th>
                               <th>Description</th>
                               <th>Action</th>
                           </tr>
                       </thead>
                       <tbody>
                           @foreach($categories as $category)
                               <tr>
                                   <td>{{ $category->id }}</td>
                                   <td>{{ $category->name }}</td>
                                   <td>{{ $category->description }}</td>
                                   <td>
                                       <a href="{{route('category.edit', $category->id) }}" class="btn btn-warning" role="button">Edit</a>
                                   </td>
                                   <td>
                                       <form method="post" action="{{route('category.delete', $category->id )}}}}">
                                           @csrf
                                           @method('DELETE')
                                           <button class="btn btn-danger" onclick="return confirm('Are you sure want to delete?')">Delete</button>
                                       </form>
                                   </td>
                               </tr>
                           @endforeach
                       </tbody>
                   </table>
               </div>
           </div>
        </div>
    </div>

@endsection

@section('ExtraCSS')

@endsection

@section('ExtraJS')

@endsection

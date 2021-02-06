@extends('layouts.admin')

@section('title' )
<title>Trang Chu   </title>
@endsection

@section('content')
    
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header', ['name'=> 'category', 'key'=>'add']) 
     {{-- truyền vào đường dẫn  --}}
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <form action="{{route('categories.store')}}" method="post">
                  @csrf
                    <div class="form-group">
                      <label>Tên Danh Mục</label>
                      <input type="text" class="form-control" name="name" 
                       placeholder="Nhập Tên Danh Mục">
                      </div>

                       <div class="form-group">
                        <label>Chọn Danh Mục Cha</label>
                        <select class="form-control" name="parent_id">
                          <option value="0">Chọn Danh Mục Cha</option>
                          {!! $htmlOption !!}
                        </select>
                      </div>
                      
                    
                 
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
            
          

              
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
@endsection


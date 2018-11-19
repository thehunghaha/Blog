@extends('Admin/layouts/_app')
@section('content')

<!-- Display header and sibar  -->
@include('Admin/layouts/_header')

<div id="page-wrapper">
	<br>

	<div class="row">
		<h1 style="float: left;">Bài viết</h1>
		<button type="button" class="btn btn-info add_post" style="padding: 0px;" >Thêm bài viết</button>
		<input type="text" class="form-control" name="search_article" id="seach_article">
		<button type="button" class="btn btn-warning" id="click_search_article">Tìm bài viết</button>
	</div>
	<div class="row">
		<br>
		 <select class="form-control" id="select_action">
		      <option>Tác vụ</option>
		      <option>Bỏ vào thùng rác</option>
	    </select>
	    <button type="button" class="btn btn-primary" id="click_action">Áp dụng</button>
	</div>
	<br>
	<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col"><input type="checkbox" class="form-check-input"></th>
      <th scope="col">Tiêu đề</th>
      <th scope="col">Tác giả</th>
      <th scope="col">Chuyên mục</th>
      <th scope="col">Thẻ</th>
      <th scope="col">Thời gian</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><input type="checkbox" class="form-check-input"></th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td></td>
      <td></td>
      <td class="edit-delete-block">
	     <a href="#" class="edit"><i class="fas fa-edit" title="Edit">&#xE254;</i></a>
	     <a href="#" class="delete"><i class="fas fa-trash-alt" title="Delete">&#xE872;</i></a>
         <input type="hidden" name="name" value="">
	  </td>
    </tr>
  </tbody>
</table>
</div>

<!-- Display footer and script -->
@include('Admin/layouts/_footer')
@include('Admin/layouts/_script')
@endsection
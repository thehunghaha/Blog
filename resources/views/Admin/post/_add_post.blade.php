@extends('Admin/layouts/_app')
@section('content')
@include('Admin/layouts/_header')
	
	<div id="page-wrapper">
		<br>
		<div class="left_box_addPost">
			<h2>Thêm mới bài viết</h2>	
			<input type="text" name="title_input" class="form-control"> 
		</div>
		<div class="right_box_addPost">
			<div class="row right_box_addPost_box1">
				<button type="button" class="btn btn-danger" id="save_drafts">Lưu nháp</button>
				<button type="button" class="btn btn-warning" id="view_post">Xem thử</button>
				<div class="clear"></div>
				<hr>
				<button type="button" class="btn btn-success" id="action_post">Đăng</button>
				<hr>
			</div>

			<div class="row right_box_addPost_box2">
				<h4 style="color:black;">Chọn ảnh đại diện</h4>
			    <input type="file" class="form-control-file" id="avatar_post" >

			   	<div class="tags_input">
				    <ul class="tags">
				       <li class="addedTag">Web Deisgn<span onclick="$(this).parent().remove();" class="tagRemove">x</span><input type="hidden" name="tags[]" value="Web Deisgn"></li>
				 
				        <li class="addedTag">Web Develop<span onclick="$(this).parent().remove();" class="tagRemove">x</span><input type="hidden" name="tags[]" value="Web Develop"></li>
				 
				        <li class="addedTag">SEO<span onclick="$(this).parent().remove();" class="tagRemove">x</span><input type="hidden" name="tags[]" value="SEO"></li>
		                    <li class="tagAdd taglist">
		                         <input type="text" id="search-field">
		                    </li>
					</ul>
				</div>
				<div class="categorys_input">
						
				</div>
			</div>
		</div>
		<div class="clear"></div>

	</div>

@include('Admin/layouts/_footer')
@endsection
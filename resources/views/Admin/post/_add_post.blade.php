@extends('Admin/layouts/_app')
@section('content')
@include('Admin/layouts/_header')
	
	<div id="page-wrapper">
		<br>
		<form method="post" action="{{ route('article.store') }}">
             {{ csrf_field() }}
		<div class="left_box_addPost">
			<h2>Thêm mới bài viết</h2>	
			<input type="text" name="title_input" class="form-control">
			<br> 
			<textarea name="editor1" id="editor1" rows="10" cols="80">
               
            </textarea>

		</div>
		<div class="right_box_addPost">
			<div class="row right_box_addPost_box1">
				<button type="button" class="btn btn-danger" id="save_drafts">Lưu nháp</button>
				<button type="button" class="btn btn-warning" id="view_post">Xem thử</button>
				<div class="clear"></div>
				<hr>
				<button type="submit" class="btn btn-success" id="action_post">Đăng</button>
				<hr>
			</div>

			<div class="row right_box_addPost_box2">
				<h4 style="color:black;">Chọn ảnh đại diện</h4>
			    <input type="file" class="form-control-file" id="avatar_post" >
<hr>
			   	<div class="tags_input">
			   		<h4>Input  Tags </h4>
				    <ul class="tags">
				       <li class="addedTag">Web Deisgn<span onclick="$(this).parent().remove();" class="tagRemove">x</span><input type="hidden" name="tags[]" value="Web Deisgn"></li>
				 
				        <li class="addedTag">Web Develop<span onclick="$(this).parent().remove();" class="tagRemove">x</span><input type="hidden" name="tags[]" value="Web Develop"></li>
				 
				        <li class="addedTag">SEO<span onclick="$(this).parent().remove();" class="tagRemove">x</span><input type="hidden" name="tags[]" value="SEO"></li>
		                    <li class="tagAdd taglist">
		                         <input type="text" id="search-field">
		                    </li>
					</ul>
				</div>
				<hr>
				<div class="categorys_input">
					<h4>Input Categorys</h4>
					<ul class="tags">
				       <li class="addedTag">Web Deisgn<span onclick="$(this).parent().remove();" class="tagRemove">x</span><input type="hidden" name="tags[]" value="Web Deisgn"></li>
				 
				        <li class="addedTag">Web Develop<span onclick="$(this).parent().remove();" class="tagRemove">x</span><input type="hidden" name="tags[]" value="Web Develop"></li>
				 
				        <li class="addedTag">SEO<span onclick="$(this).parent().remove();" class="tagRemove">x</span><input type="hidden" name="tags[]" value="SEO"></li>
		                    <li class="tagAdd taglist">
		                         <input type="text" id="search-field">
		                    </li>
					</ul>
				</div>
			</div>
		</div>
		</form>
		<div class="clear"></div>

	</div>

@include('Admin/layouts/_footer')
@endsection
@extends('layouts/app')
@section('content')
	<!-- Header -->

			@include('layouts/nav')

		<!-- /Header -->

		<!-- section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">	
					<!-- post -->
						@include('layouts/box_one')
					<!-- /post -->

					<!-- post -->

					<!-- /post -->
				</div>
				<!-- /row -->

				<!-- row -->
				

				@include('layouts/box_recent_post')

					<div class="col-md-4">
						<!-- post widget -->
								@include('layouts/side_bar_most_read')

						<!-- /post widget -->


						<!-- post widget -->
						
								@include('layouts/featured_post')
						<!-- /ad -->
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->
		
		<!-- section -->
				@include('layouts/box_three')
		<!-- /section -->

		<!-- section -->
				@include('layouts/box_four')
		<!-- /section -->

		<!-- Footer -->
				@include('layouts/footer')
		<!-- /Footer -->

		<!-- jQuery Plugins -->

		@script

@endsection
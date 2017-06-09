@extends('layouts.app')

@section('content')
Contenido de administrador
<div class="container">
	<div class="row">
		<section class="content">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-success btn-filter" data-target="pagado">Inscrito</button>
								<button type="button" class="btn btn-warning btn-filter" data-target="pendiente">No inscrito</button>
								<button type="button" class="btn btn-danger btn-filter" data-target="cancelado">Administrador</button>
								<button type="button" class="btn btn-default btn-filter" data-target="all">Todos</button>
							</div>
						</div>
						<div class="table-container">
							<table class="table table-filter">
								<tbody>
									@foreach ($users as $user)
										
										<tr data-status="pagado">
										<td>
											<div class="ckbox">
												<input type="checkbox" id="checkbox1">
												<label for="checkbox1"></label>
											</div>
										</td>
										<td>
											<a href="javascript:;" class="star">
												<i class="glyphicon glyphicon-star"></i>
											</a>
										</td>
										<td>
											<div class="media">
												<a href="#" class="pull-left">
													<img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo">
												</a>
												<div class="media-body">
													<span class="media-meta pull-right">{{ $user->created_at}}</span>
													<h4 class="title">
														{{ $user->name }}
														<span class="pull-right pagado">
														<select id={{"sel" . $user->id }}>
															<option value="">Administrador</option>
															<option>Inscrito</option>
															<option>No inscrito</option>
														</select>
														</span>
													</h4>
													<p class="summary">
													<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> {{ $user->email }} <br> 
													<span class="glyphicon glyphicon-phone" aria-hidden="true"> {{ $user->celular }} | 
													<span class="glyphicon glyphicon-globe" aria-hidden="true"> {{ $user->ciudad }}</p>
												</div>
											</div>
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
 </div>
    
      
@endsection
@section('scripts')
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    <script >
$(document).ready(function() {

    $('.star').on('click', function() {
        $(this).toggleClass('star-checked');
    });

    $('.ckbox label').on('click', function() {
        $(this).parents('tr').toggleClass('selected');
    });

    $('.btn-filter').on('click', function() {
        var $target = $(this).data('target');
        if ($target != 'all') {
            $('.table tr').css('display', 'none');
            $('.table tr[data-status="' + $target + '"]').fadeIn('slow');
        } else {
            $('.table tr').css('display', 'none').fadeIn('slow');
        }
    });

});
    </script>
@endsection

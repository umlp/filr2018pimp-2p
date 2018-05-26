@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row" style="background-color:red;"> 
			<div class="col-xs-3" style="background-color:grey;"> col-xs-3 </div>
			<div class="col-xs-6" style="background-color:grey;"> col-xs-6 </div>
			<div class="col-xs-3" style="background-color:grey;"> col-xs-3 </div>
		</div>
		
		<div class="row" style="background-color:green;">
			<div class="col-xs-3" style="background-color:grey;"> col-xs-3 </div>
			<div class="col-xs-6" style="background-color:grey;"> col-xs-6 </div>
			<div class="col-xs-3" style="background-color:grey;"> col-xs-3 </div>
		</div>
		
		<div class="row" style="background-color:blue;"> 
			<p> titre 3 </p>
			<p> Troisieme block </p> 
		</div>
	</div>
@endsection

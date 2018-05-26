@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div>
				<div class="row" style="height:90px;">
					<div class="col-xs-4"> 
						<h2> Facebook </h2>
						<img src="https://s1.qwant.com/thumbr/0x0/8/f/79cf42cf180a109b26f887f1d41aef18b5b2e30c98dadb10dd76ee238a0055/facebook_logos_PNG19753.png?u=http%3A%2F%2Fpngimg.com%2Fuploads%2Ffacebook_logos%2Ffacebook_logos_PNG19753.png&q=0&b=1&p=0&a=1" style="width:50%" alt="application logo" />
					</div>

					<div class="col-xs-8" style="display:flex; justify-content:space-around; flex-direction:column;"> 
						<div style="flex:1;">
							<div class="col-xs-5"> Identifiant : </div>
							<div class="col-xs-7"> unmail@exemple.com </div>
						</div>
						<div style="flex:1;">
							<div class="col-xs-5"> Mot de Passe </div>
							<div class="col-xs-7"> ********* </div>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-xs-3"> </div>
					
					<div class="col-xs-3"> 
						<a href="#"> Supprimer <a/>
					</div>
					
					
					<div class="col-xs-3"> 
						<a href="#"> modifier </a>
					</div>
					
					<div class="col-xs-3"> </div>
				</div>
			</div>
		</div>
		
		
		<div class="row"> 
			<p> titre 3 </p>
			<p> Troisieme block </p> 
		</div>
	</div>
@endsection

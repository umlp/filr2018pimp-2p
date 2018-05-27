@extends('layouts.app')

@section('content')

	<style>
		.row {
			
		}
		
		.blockHeader {
			color : white;
			background-color: grey;
			display: flex;
			flex-direction : row;
			justify-content: space-between;
			padding: 10px;
			padding-left: 20px;
			padding-right: 20px;
			border-radius: 10px 10px 0px 0px;
		}
		
		.information {
			display: flex;
			flex-direction: row;
			min-width:350px;
		}
		
		.dataLabel {
			color: black;
			display: block;
			font-weight: bold;
			padding-left: 20px;
			min-width:150px;
		}
		
		.data {
			display: block;
		}
		
		.logo {
			margin: 10px;
			width : 50%;
		}
		
		.subcontainer {
			margin-top : 10px;
			margin-bottom: 10px;
			border-radius: 14px 14px 10px 10px;
			border: 2px solid grey;
			min-width: 750px;
		}
		
		.applicationTitle {
			font-weight: bold;
			font-size: 16px;
		}
		
	</style>
	
	<div class="container">
		<div class="row subcontainer">
		        <div class="blockHeader">
				  <span class="applicationTitle"> Facebook </span>
				  <a href="#" style="color:white;"> supprimer </a>
			</div>
				
			<div class="information">
				<div class="col-xs-3" style="text-align:center;"> 
				   	<img src="https://upload.wikimedia.org/wikipedia/fr/thumb/c/c8/Twitter_Bird.svg/1259px-Twitter_Bird.svg.png" alt="Logo Facebook" class="logo" />
				</div>
				
				<div class="col-xs-9" style="display:flex; flex-direction:column; justify-content:space-around;">
					<div class="row" style="flex:3;">
						<div class="col-xs-4" style="display:flex; flex-direction:column; justify-content:space-around;">
							<div class="row">
								<div class="dataLabel"> Identifiant : </div>
							</div>

							<div class="row">
								<div class="dataLabel"> Mot de passe : </div>
							</div>
						</div>

						<div class="col-xs-4" style="display:flex; flex-direction:column; justify-content:space-around;">
							<div class="row">
								<div class="data"> unautremail@exemple.fr </div>
							</div>

							<div class="row">
								<div class="data"> *********** </div>
							</div>
						</div>

						<div class="col-xs-4" style="display:flex; flex-direction:column; justify-content:space-around;">
							<div class="row">
								<a href="#" id="emailUpdate" style="color:grey;"> modifier </a>
							</div>

							<div class="row">
								<a href="#" id="passwordUpdate" style="color:grey;"> modifier </a>
							</div>
						</div>
					</div>
					
					<div class="row" style="flex:1;">
						<div class="switch">
							<input type="checkbox">
							<span class="switchLabel">Afficher mot de passe.</span>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
@endsection

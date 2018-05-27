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
		}
		
		.dataLabel {
			color: black;
			display: block;
			font-weight: bold;
			padding-left: 20px;
		}
		
		.data {
			display: block;
		}
		
		.logo {
			margin: 10px;
			width : auto;
		}
		
		.subcontainer {
			margin-top : 10px;
			margin-bottom: 10px;
			border-radius: 14px 14px 10px 10px;
			border: 2px solid grey;
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
				<div class="col-xs-3"> 
				   	<img src="https://upload.wikimedia.org/wikipedia/fr/thumb/c/c8/Twitter_Bird.svg/1259px-Twitter_Bird.svg.png" alt="Logo Facebook" class="logo" />
				</div>
				
				<div class="col-xs-3">
					<div class="row>
						<span class="dataLabel"> Identifiant : </span>
					</div>
					
					<div class="row>
						<span class="dataLabel"> Mot de passe : </span>
					</div>
				</div>
				
				<div class="col-xs-3">
					<div class="row>
						<span class="data"> unautremail@exemple.fr </span>
					</div>
					
					<div class="row>
						<span class="data"> *********** </span>
					</div>
				</div>
				
				<div class="col-xs-3">
					<div class="row>
						<a href="#" id="emailUpdate" style="color:grey;"> modifier </a>
					</div>
					
					<div class="row>
						<a href="#" id="passwordUpdate" style="color:grey;"> modifier </a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
        <div class="card-deck">
            <div class="card">
                <h4 class="card-title text-center">Active Lots</h4>
                <div class="card-body text-center d-flex flex-column">
                <p class="card-text">This are a list of active lots of crops or animals in farm</p>
                <a href="#" class="mt-auto btn btn-primary">Open</a>
                </div>
            </div>
            <div class="card">
                <h4 class="card-title text-center">Inventory</h4>
                <div class="card-body text-center d-flex flex-column">
                <p class="card-text">A simple inventory of farm inputs</p>
                <a href="#" class="mt-auto btn btn-primary">Open</a>
                </div>
            </div>
            <div class="card">
                <h4 class="card-title text-center">Finance</h4>
                <div class="card-body text-center d-flex flex-column">
                <p class="card-text">Show how much has been spent and how much has been earned</p>
                <a href="#" class="mt-auto btn btn-primary">Open</a>
                </div>
            </div>
        </div>
</div>    
</div>
@endsection

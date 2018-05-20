@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card-deck">
            <div class="card">
              <div class="card-body text-center d-flex flex-column">
                <h4 class="card-title text-center">Farmer</h4>
                <p class="card-text">Some text inside the first card</p>   
                <a  href="{{ url('/farmer') }}" class="mt-auto btn btn-primary">Open</a>             
              </div>   
            </div>

            <div class="card">
              <div class="card-body text-center d-flex flex-column">
                <h4 class="card-title text-center">Service providers</h4>
                <p class="card-text">Some text inside the second card</p>   
                <a  href="#" class="mt-auto btn btn-primary">Open</a>             
              </div>
            </div>

            <div class="card">
              <div class="card-body text-center d-flex flex-column">
                <h4 class="card-title text-center">Agro inputs supplier</h4>
                <p class="card-text">Some text inside the third card</p>     
                <a  href="#" class="mt-auto btn btn-primary">Open</a>           
              </div>
            </div>

            <div class="card">
                <div class="card-body text-center d-flex flex-column">
                    <h4 class="card-title text-center">Agro Agents</h4>
                    <p class="card-text">Some text inside the third card</p>   
                    <a  href="#" class="mt-auto btn btn-primary">Open</a>                 
                </div>
            </div>  

            <div class="card">
                <div class="card-body text-center d-flex flex-column">
                    <h4 class="card-title text-center">Consumers</h4>
                    <p class="card-text">Some text inside the third card</p>   
                    <a href="#" class="mt-auto btn btn-primary ">Open</a>                 
                </div>
            </div>
            
          </div>
    </div>
</div>
@endsection

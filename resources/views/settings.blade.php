 @extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="row">
		<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque, maiores!</p>
            <div class="col-md-8 col-md-offset-2">
                <passport-authorized-clients></passport-authorized-clients>
                <passport-clients></passport-clients>
                <passport-personal-access-tokens></passport-personal-access-tokens>
            </div>
        </div>
    </div>
    @endsection

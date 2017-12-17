<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="links">
                    <ul>
                        <li><a href="https://laravel.com/docs">Réserver</a></li>
                        <li><td>{!! link_to_action('UserController@edit', 'Mon compte', ['id' => Auth::User()->id, 'class' => 'btn btn-warning btn-block']) !!}</td></li>
                    
                        <li>Administration
                             <ul>
                                <li>{!! link_to_route('user.index', 'Gestion des utilisateurs', ['class' => 'btn btn-success btn-block']) !!}</li>
                                <li>{!! link_to_route('place.index', 'Gestion des places', ['class' => 'btn btn-success btn-block']) !!}</li>    
                                <li><a href="https://laravel.com/docs"> Gestion Liste d'attente</a></li>          
                                <li><a href="https://laravel.com/docs">Historique des réservations</a></li>      
                            </ul>
                         </li>
                   </ul>
                   
                    
                    
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                </div>
            </div>
        </div>
    </div>
</div>

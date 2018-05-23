<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="links">
                    <ul>
                        <div style="display: none;">{{$user = Auth::user()}}</div>
                        <li>{!! link_to_action('AttenteController@create', 'Réserver une place',['id' => Auth::User()->id, 'class' => 'btn btn-warning btn-block']) !!}</li>
                        <li>{!! link_to_action('AttenteController@show', 'Numéro de réservation de place',['id' => Auth::User()->id, 'class' => 'btn btn-warning btn-block']) !!}</li>
                        <li>{!! link_to_action('UserController@edit', 'Mon compte', ['id' => Auth::User()->id, 'class' => 'btn btn-warning btn-block']) !!}</li>  @if( Auth::user()->Droitsadmin == 1)
                        <li>Administration
                             <ul>
                                <li>{!! link_to_route('user.index', 'Gestion des utilisateurs', ['class' => 'btn btn-success btn-block']) !!}</li>
                                <li>{!! link_to_route('place.index', 'Gestion des places', ['class' => 'btn btn-success btn-block']) !!}</li>    
                                <li>{!! link_to_route('attente.index', 'Gestion des demandes de réservation', ['class' => 'btn btn-success btn-block']) !!}</li>         
                                     
                            </ul>
                         </li>
                         @endif
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

@if(Auth::user()->is_favoriting($micropost->id))
{!! Form::open(['route'=>['unfavorite',$micropost->id],'method'=>'delete']) !!}
{!! Form::submit('Unfavorite',['class'=>'btn btn-success btn-xs']) !!}
{!! Form::close() !!}
@else
{!! Form::open(['route'=>['favorite',$micropost->id]]) !!}
{!! Form::submit('Favorite',['class'=>'btn btn-default btn-xs']) !!}
{!! Form::close() !!}
@endif
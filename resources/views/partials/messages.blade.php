@foreach (['danger', 'warning', 'success', 'info'] as $key)
 @if(Session::has($key))
     <p class="alert alert-{{ $key }}">{{ Session::get($key) }}</p>
 @endif
@endforeach
@if(Auth::user()->userinfo->count() == 0)
<p class="alert alert-info">Para hacer uso de la plataforma debes registrar tus datos primero.</p>
@endif

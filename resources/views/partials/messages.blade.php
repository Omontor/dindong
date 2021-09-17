@foreach (['danger', 'warning', 'success', 'info'] as $key)
 @if(Session::has($key))
<div class="alert alert-{{ $key }} alert-dismissible fade show" role="alert">
  {{ Session::get($key) }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>


 @endif
@endforeach
@if(Auth::user()->userinfo->count() == 0)
<p class="alert alert-info">Para hacer uso de la plataforma debes registrar tus datos primero.</p>
@endif

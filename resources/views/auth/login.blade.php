@extends('layouts.app')

@section('content')
<a href="{{ url('/') }}" class="btn-back"><i class="icofont-arrow-left"></i>Back</a>
<form class="login-form" method="POST" action="{{ route('login') }}" autocomplete="off">
    @csrf

    <h4>{{ $day }}</h4>
    <h2>{{ $date }}</h2>
    <p class="time"></p>

    <div class="txt">
        <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>

        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <span data-placeholder="Username"></span>
    </div>

    <div class="txt">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <span data-placeholder="Password"></span>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-8 offset-md-4">
            <button type="submit" class="logbtn">
                {{ __('Login') }}
            </button>
        </div>
    </div>
</form>
@endsection

@section('jquery')
<script type="text/javascript">
    $(".txt input").on("focus", function(){
      $(this).addClass("focus");
  });
    $(".txt input").on("blur", function(){
      if ($(this).val() == "")
        $(this).removeClass("focus");
});
</script>

<!-- script untuk menampilkan jam berjalan -->
<script type="text/javascript">
    $(document).ready(function(){
      $('.time').load('/time');
      refresh();
  });
    function refresh(){
      setTimeout(function(){
        $('.time').load('/time');
        refresh();
    }, 200);
  }
</script>
@endsection

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="id=edge">
  <link rel="stylesheet" type="text/css" href="{{ asset('login-style.css') }}">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <title>Login</title>
</head>

<body>
  <form action="{{ route('login') }}" class="login-form">
    <h4>{{ $day }}</h4>
    <h2>{{ $date }}</h2>
    <p class="time"></p>

    <div class="txt">
      <input type="text">
      <span data-placeholder="Username"></span>
    </div>
    <div class="txt">
      <input type="password">
      <span data-placeholder="Password"></span>
    </div>
    
    <input type="submit" class="logbtn" value="Login">
  </form>

  <!-- script jquery -->
  <!-- <script src="{{ asset('Personal/assets/vendor/jquery/jquery.min.js') }}"></script> -->
  <script type="text/javascript">
    $(".txt input").on("focus", function(){
      $(this).addClass("focus");
    });
    $(".txt input").on("blur", function(){
      if ($(this).val() == "")
        $(this).removeClass("focus");
    });

    // script untuk menampilkan jam berjalan
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

</body>
</html>
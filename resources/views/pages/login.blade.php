<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iniciar Sesion</title>
    <link rel="stylesheet" href="{{ asset('css/login.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="icon" href="img/icomoon-free--fire.png" type="image/png">

    

</head>
<body>
    <div id="bodyform">
      <form class="form" action="{{route("storelogin")}}" method="post">
        {{-- Para que sera esto... --}}
        @csrf 
        <div>
          <div id="fire">
            <svg xmlns="http://www.w3.org/2000/svg" width="6rem" height="6rem" viewBox="0 0 16 16"><path fill="white" d="M5.016 16c-1.066-2.219-.498-3.49.321-4.688c.897-1.312 1.129-2.61 1.129-2.61s.706.917.423 2.352c1.246-1.387 1.482-3.598 1.293-4.445c2.817 1.969 4.021 6.232 2.399 9.392c8.631-4.883 2.147-12.19 1.018-13.013c.376.823.448 2.216-.313 2.893C9.999 1.002 6.818.002 6.818.002c.376 2.516-1.364 5.268-3.042 7.324c-.059-1.003-.122-1.696-.649-2.656c-.118 1.823-1.511 3.309-1.889 5.135c-.511 2.473.383 4.284 3.777 6.197z"/></svg>          </div>
          <p class="form-title">Iniciar Sesion</p>

          <div class="input-container">
           <input class="inputs" placeholder="Usuario" id="user" name="user" required>
           <span>
            <svg xmlns="http://www.w3.org/2000/svg" width="6rem" height="6rem" viewBox="0 0 24 24"><path fill="#b0b0b0" d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4"/></svg>           </span>
          </div>
          <div class="input-container">
            <input class="inputs" placeholder="Contraseña" type="password" id="password" name="password" required>
  
            <span>
              <svg stroke="currentColor" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
                <path d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
              </svg>
            </span>
          </div>
          <button class="submit" type="submit">
            Iniciar Sesion
          </button>
        </div>
    </form>

    </div>

    <div>
      @if ($errors->any())
        <script>
            Swal.fire({
                icon: "error",
                title: "Error",
                text: "{{ $errors->first() }}",
                showConfirmButton: false,
                timer: 1000
            });
        </script>
      @endif
    </div>




</body>

</html>
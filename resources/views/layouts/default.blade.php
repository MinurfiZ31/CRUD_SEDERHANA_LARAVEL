<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Laravel SEDERHANA</title>

    
    @stack('before-style')
    @include('includes.style')
    @stack('after-style')

</head>
<body class="bg-secondary p-2 text-dark bg-opacity-50">
    <div class="container">
        <div class="row">
            @stack('before-content')
            @yield('content')
            @stack('after-content')
        </div>
    </div>



    @stack('before-script')
    @include('includes.script')
    @stack('after-script')
    
   
    

</body>
</html>
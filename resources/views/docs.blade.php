<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@lang('messages.title')</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">    
</head>
<body>
    <div class="container">
        <br>
        <div class="panel panel-primary">
            <div class="panel-heading">@lang('messages.title')</div>
            <div class="panel-body">
                <span>@lang('messages.select-language')</span>
                <input type="hidden" class="current_language" value={{ Session::get('website_language') }}>
                <div class="btn-group" role="group">
                    <a href="{!! route('docs.change-language', ['en']) !!}" class="btn-en" ><img style="width : 20px" src="https://everbtn.com/wp-content/uploads/2019/07/england.png" alt=""></a>
                    <a href="{!! route('docs.change-language', ['vi']) !!}" class="btn-vi" ><img style="width : 20px" src="https://cdn4.iconfinder.com/data/icons/world-flags-circular/1000/Flag_of_Vietnam_-_Circle-512.png" alt=""></a>
                </div>
                
                {{-- {{ Session::get('website_language') }} --}}

                <h1>@lang('messages.welcome')</h1>
            </div>
          </div>        
    </div>    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{url('/js/custom.js')}}"></script>   
</body>
</html>
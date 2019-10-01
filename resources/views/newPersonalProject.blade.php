<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Laravel</title>
   <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
   <link href="css/app.css" rel="stylesheet">
</head>
<body>
   <div class="flex-center position-ref full-height">
   <div >
                   @if ($errors->any())
                       <p>Complete todos los campos</p>
                   @endif
                   <form action='{{route('personalsprojects.store')}}' method='POST'>
                       {{ csrf_field() }}
                       <p>Form Personal Project</p>
                            <input type='text' placeholder='Title' name='title' required><br>
                            <input type='text' placeholder='Description' name='description' required><br>
                            <input type='text' placeholder='Url GitHub' name='urlgithub' required><br>
                            <label for="public">private</label>
                            <input type='checkbox' placeholder='Url GitHub' name='public' value="1" required><br>
                            <input type='submit' value='Enviar oferta' class="btn buttonmain ml-auto">
                   </form>
                   </div>
</body>
</html>
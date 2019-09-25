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
                   <form action='oferta-trabajo' method='POST'>
                       {{ csrf_field() }}
                       <p> Formulario</p>
                               <input type='text' placeholder='Titulo' name='titulo' required><br>
                               <input type='text' placeholder='Descripción' name='descripcion' required><br>
                               <p>Categoria</p>
                               @include ('_categories')
                               <p>lenguajes</p>
                               @include ('_languages')
                               <br><br>
                               <input type='text' placeholder='Url' name='url' required><br>
                           <input type='submit' value='Enviar oferta' class="btn buttonmain ml-auto">
                   </form>
                   </div>
</body>
</html>
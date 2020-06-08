<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body width="500" style="background-color: #4dc0b5">


<div style="width:50%;background-color: aliceblue; margin: 50px auto; height: 300px; padding: 20px">
    <form action="subir" method="post" accept-charset="utf-8" enctype="multipart/form-data">
        @if (session('status'))
            {{ session('status') }}
        @endif
        @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
        @endif
        @csrf
        <div style="width:50%; margin: 50px auto; text-align: center">
            Subir archivo aquí
        </div>

        <div style="width:50%; margin: 10px auto;">
            <input class="form-control-file"  type="file" name="files[]" id="" multiple>
        </div>
        <div style="width:50%; margin: 15px auto; text-align: center">
            <input type="submit" value="Enviar archivo">
        </div>


    </form>
</div>
</body>
</html>

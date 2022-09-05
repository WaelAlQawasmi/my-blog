<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <p>  hi my name is {{$my_name}} 
    you can contacte with me by this form
  </p>
    <form action="" method="post">
        @csrf
        <div>      
              <input placeholder="your name" type="text">
        </div>
        <textarea name="" placeholder="your maessage" id="" cols="30" rows="10"></textarea>
        <button style="display: block" type="submit"> send</button>
    </form>
</body>
</html>
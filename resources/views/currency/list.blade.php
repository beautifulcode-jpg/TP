<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body style="display: flex;padding:25px;">
        @foreach ($collection as $item)
        <div class="card" style="margin:25px;padding:25px;width:25%;">
            <img class="card-img-top" src="data:image/png;base64,{{$item->CURRENCY_PICTURE}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{$item->CURRENCY_ID}}</h5>
              <p class="card-text">{{$item->CURRENCY_TITLE}}</p>
              <a href="/currency/edit/{{$item->CURRENCY_ID}}" class="btn btn-info">Edit</a>
              <a href="/currency/delete/{{$item->CURRENCY_ID}}" class="btn btn-danger">Delete</a>

            </div>
        </div>
        @endforeach
    </body>
</html>
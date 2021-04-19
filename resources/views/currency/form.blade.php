<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body style="padding:25px">
      @if(isset($currency))
        <form method="POST" enctype="multipart/form-data" action="/currency/store/{{$currency->CURRENCY_ID}}">
      @else
        <form method="POST" enctype="multipart/form-data" action="/currency/new">
      @endif

          @csrf
            <input name="CURRENCY_ID" value="{{$currency->CURRENCY_ID ?? ''}}" class="form-control form-control-lg" type="text" placeholder="CURRENCY_ID">
            <br>
            <input name="CURRENCY_TITLE" value="{{$currency->TITLE ?? ''}}" class="form-control form-control-lg" type="text" placeholder="CURRENCY_TITLE">
            <br>
            <div class="form-group">
              <label>CURRENCY_PICTURE</label>
              @if(isset($currency))
              <img class="card-img-top" src="data:image/jpg;base64,{{$item->CURRENCY_PICTURE}}">
              @endif
              <input name="CURRENCY_PICTURE" type="file" class="form-control-file">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </body>
</html>
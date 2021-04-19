

  <html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body style="padding:25px;">
        <form method="POST" action="/currency/new">
          @csrf
            <input name="CURRENCY_ID" class="form-control form-control-lg" type="text" placeholder="CURRENCY_ID">
            <br>
            <input name="CURRENCY_TITLE" class="form-control form-control-lg" type="text" placeholder="CURRENCY_TITLE">
            <br>
            <div class="form-group">
              <label for="exampleFormControlFile1">CURRENCY_PICTURE</label>
              <input name="CURRENCY_PICTURE" type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </body>
</html>
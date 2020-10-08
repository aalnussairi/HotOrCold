<div class="container text-center">
  <form action="{{ route('userDash.show') }}" method="POST">
    @csrf
    <h1>Room Selection</h1>
    <div class="form-group">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            {{-- For future ref: need to populate buildings and rooms dynamically based on user organisation (Has Many Through?)--}}
            <label for="floor">What Building are you in?</label>
            <select class="form-control floor" id="floor" name="floor">
              <option value="1" selected>Alacrity House</option>
              <option value="2">Cardiff Office</option>
              <option value="3">London Office</option>
              <option value="4">Bristol Office</option>
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="form-group room">
            <label for="room">What room are you in?</label>
            <select  class="form-control room" id="room" name="room">
              <option value="1">The Pit</option>
              <option value="2" selected>Main Teaching Room</option>
              <option value="3">The Presidential Suite</option>
              <option value="4">BoardRoom</option>
            </select>
          </div>
        </div>
      </div>
    </div>
    {{-- <br> --}}
    <hr>
    <div class="form-group room">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-5 my-1">
            <input type="submit" value="Submit" class="btn btn-lg btn-primary btn-block">
          </div>
          <div class="col-md-2 my-1">
            <input type="button" value="Admin" class="btn btn-lg btn-secondary btn-block">
          </div>
          <div class="col-md-5 my-1">
            <a href="{{ route('logout') }}" class="btn btn-lg btn-danger btn-block">Log Out</a>
          </div>
        </div>
      </div>
    </div>
</div>
</form>
</div>

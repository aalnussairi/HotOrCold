@if ($error)

  <h1>{{ $error }}</h1>

  @else
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="text-center">
            {{ $room->name }}
          </h1>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card ">
            <div class="GaugeMeter mx-auto" id="GaugeMeter_1" data-size="100" data-width="20" data-style="Arch"
              data-theme="blue" data-percent="{{ $room->current_vote }}" data-back="#dc3545" data-show-value="false">
            </div>
          </div>
        </div>
        <div class="col-12">
          <form action="{{ route('userDash.vote') }}" method="POST" class=".container-fluid">
            @csrf
            <input type="hidden" name="_room" value="{{ $room->id }}">
            <div class="row">
              <div class="col-12 col-md-4 text-center my-2">
                <input class="btn btn-lg btn-block btn-primary" type="submit" value="Cold!" name="temp">
              </div>
              <div class="col-12 col-md-4 text-center my-2">
                <input class="btn btn-lg btn-block btn-secondary" type="submit" value="Perfect!" name="temp">
              </div>
              <div class="col-12 col-md-4 text-center my-2">
                <input class="btn btn-lg btn-block btn-danger" type="submit" value="Hot!" name="temp">
              </div>
              <div class="col-12 col-md-6">
              <a href="" class="btn btn-block btn-lg my-2 btn-primary">Admin</a>
              </div>
              <div class="col-12 col-md-6">
              <a href="" class="btn btn-block btn-lg my-2 btn-danger">Log Out</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
@endif

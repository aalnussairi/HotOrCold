<form action="{{ route('login.store') }}" method="POST" class="form-signin text-center">
  @csrf
  <img class="mb-4" src="{{URL::asset('tempLogo.png')}}" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Please sign in with your work email</h1>
  <label for="emailIn" class="sr-only">Email address</label>
  <input type="email" id="emailIn" class="form-control" placeholder="Email address" name="email" required autofocus>
  <label for="passwordIn" class="sr-only">Password</label>
  <input type="password" id="passwordIn" class="form-control" placeholder="Password" name="password" required>
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  <p class="mt-5 mb-3 text-muted">Hot or Cold &copy; 2020</p>
</form>

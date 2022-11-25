<form method="POST" action="{{route('users.store')}}">
    @csrf
    <div class="form-group">
        <label for="formGroupExampleInput">Name</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter Nama" name="namaUser">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="emailUser">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pwdUser">
    </div>
    <div class="form-group">
      <legend class="col-form-label col-sm-2 pt-0">Role</legend>
      <div class="col-sm-10">
        @foreach($users as $u)
            @foreach($u->roles as $role)    
                {{$role->name}}
            @endforeach        
        @endforeach
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
          <label class="form-check-label" for="gridRadios1">
            First radio
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
          <label class="form-check-label" for="gridRadios2">
            Second radio
          </label>
        </div>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
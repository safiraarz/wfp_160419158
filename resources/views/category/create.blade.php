<form method="POST" action="{{url('category')}}">
<!-- <form method="POST" action="{{route('category.store')}}"> -->
    @csrf
  <div class="form-group">
    <label for="inputProductName">Name: </label>
    <input class="form-control" id="inputProductName" placeholder="fill with product's name">
  </div>
  <div class="form-group">
    <label for="textAreaDesc">Description</label>
    <textarea class="form-control" id="textAreaDesc" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<div class="container h-100 mt-5">
  <div class="row h-100 justify-content-center align-items-center">
    <div class="col-10 col-md-8 col-lg-6">
      <h3>Update Vehicle</h3>
      <form action="{{ route('vehicle.update', $vehicle->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title" name="title"
            value="{{ $vehicle->name }}" required>
        </div>
        <div class="form-group">
          <label for="body">Body</label>
          <textarea class="form-control" id="body" name="body" rows="3" required>{{ $vehicle->body }}</textarea>
        </div>
        <button type="submit" class="btn mt-3 btn-primary">Update Vehicle</button>
      </form>
    </div>
  </div>
</div>
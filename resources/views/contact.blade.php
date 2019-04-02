<form method="POST" action="{{ url('/contact')}}">
  {{ csrf_field() }}
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="form-group">
        <label>Email</label>
        <textarea name="email" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label>message</label>
        <input type="text" name="message" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary"> Submit </button>
</form>

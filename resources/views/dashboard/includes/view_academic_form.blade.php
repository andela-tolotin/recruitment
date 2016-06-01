<div class="row">
  <div class="col-md-6">
    <h4 style="border-bottom:1px solid #ccc; padding:0 2% 2% 0;">Add Academic Qualification</h4>
    @include('dashboard.includes.error_or_success_message')
    <form class="form" method="POST" action="/dashboard/academic/update/{{ $academic->id }}">
      {{ csrf_field() }}
      <div class="form-group">
        <select name="qualification" id="qualification" class="form-control">
          <option value="" selected="selected">Choose Qualification</option>
          <option value="BSC">BSC</option>
          <option value="PHD">PHD</option>
          <option value="HND">HND</option>
          <option value="ND">ND</option>
          <option value="OLEVEL">OLEVEL</option>
          <option value="SCHOOL LEAVING">SCHOOL LEAVING</option>
        </select>
      </div>
      <div class="form-group">
        <input id="institution" type="date" class="validate form-control" value="{{ $academic->institution }}" name="institution" placeholder="Institution">
      </div>
      <div class="form-group">
        <input id="start-date" type="date" class="validate form-control" value="{{ old('start-date') }}" name="start-date" placeholder="Start Date">
      </div>
      <div class="form-group">
        <input id="end-date" type="date" class="validate form-control" value="{{ old('end-date')}}" name="end-date" placeholder="End Date">
      </div>
      <div class="form-group">
        <input id="grade" type="text" class="validate form-control" name ="grade" value="{{ $academic->grade }}" placeholder="Grade">
      </div>
      <div class="form-group">
        <button class="btn btn-primary" type="submit" name="action">Update</button>
      </div>
    </form>
  </div>
</div>
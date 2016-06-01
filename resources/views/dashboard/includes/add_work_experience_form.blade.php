<div class="row">
  <div class="col-md-6">
    <h4 style="border-bottom:1px solid #ccc; padding:0 2% 2% 0;">Add Work Experience</h4>
    @include('dashboard.includes.error_or_success_message')
    <form class="form" method="POST" action="/dashboard/work/create">
      {{ csrf_field() }}
      <div class="form-group">
        <input id="company" type="text" class="validate form-control" value="{{ old('company')}}" name="company" placeholder="Company">
      </div>
      <div class="form-group">
        <input id="position" type="text" class="validate form-control" name ="position" value="{{ old('position')}}" placeholder="Position">
      </div>
      <div class="form-group">
        <input id="start-date" type="date" class="validate form-control" value="{{ old('start-date')}}" name="start-date" placeholder="Start Date">
      </div>
      <div class="form-group">
        <input id="end-date" type="date" class="validate form-control" value="{{ old('end-date')}}" name="end-date" placeholder="End Date">
      </div>
      <div class="form-group">
        <textarea id="job-description" class="form-control" name="job-description" placeholder="Job Description "></textarea>
      </div>
      <div class="form-group">
        <button class="btn btn-primary" type="submit" name="action">Create</button>
      </div>
    </form>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    @if ($workExperience->count() > 0)
    <table class="table table-bordered">
      <thead>
        <tr>
          <td>SN</td>
          <td>Company</td>
          <td>Position</td>
          <td>Edit</td>
          <td>Delete</td>
        </tr>
      </thead>
      <tbody>
        @foreach($workExperience as $index => $experience)
        <tr>
          <td>{{ $index + 1 }}</td>
          <td>{{ $experience->company }}</td>
          <td>{{ $experience->position }}</td>
          <td><a href="/dashboard/work/edit/{{ $experience->id }}"><i class="fa fa-pencil" aria-hidden="true"></i> Edit </a> </td>
          <td><a href="/dashboard/work/delete/{{ $experience->id }}"> <i class="fa fa-trash" aria-hidden="true"></i> Remove </a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @else
  <h6>No work experience added yet</h6>
  @endif
</div>
</div>
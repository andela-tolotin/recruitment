<div class="row">
  <div class="col-md-6">
    <h4 style="border-bottom:1px solid #ccc; padding:0 2% 2% 0;">Edit Work Experience</h4>
    @include('dashboard.includes.error_or_success_message')
    <form class="form" method="POST" action="/dashboard/work/update/">
      {{ csrf_field() }}
      <div class="form-group">
        <input id="company" type="date" class="validate form-control" value="{{ $workExperience->company }}" name="company" placeholder="Company">
      </div>
      <div class="form-group">
        <input id="position" type="text" class="validate form-control" name ="position" value="{{ $workExperience->position }}" placeholder="Position">
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
        <button class="btn btn-primary" type="submit" name="action">Update</button>
      </div>
    </form>
  </div>
</div>

<div class="row">
  <div class="col-md-6">
    <h4 style="border-bottom:1px solid #ccc; padding:0 2% 2% 0;">
    Edit Interview Criteria
    </h4>
    @include('dashboard.includes.error_or_success_message')
    <form class="form" method="POST" action="/dashboard/interview-criteria/update/{{ $interviewCriteria->id }}">
      {{ csrf_field() }}
      <div class="form-group">
        <select name="interview-type" class="form-control">
          <option selected="selected" value="0">Choose</option>
          @foreach($interviews as $interview)
          <option value="{{ $interview->id }}">{{ $interview->type }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <input id="name" type="text" class="validate form-control" value="{{ $interviewCriteria->name }}" name="name" placeholder="Name">
      </div>
      <div class="form-group">
        <input id="weight" type="text" class="validate form-control" value="{{ $interviewCriteria->weight }}" name="weight" placeholder="Weight">
      </div>
      <div class="form-group">
        <textarea id="description" class="form-control" name="description" placeholder="Description ">{{ $interviewCriteria->description }}</textarea>
      </div>
      <div class="form-group">
        <button class="btn btn-primary" type="submit" name="action">Update</button>
      </div>
    </form>
  </div>
</div>
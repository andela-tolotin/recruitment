<div class="row">
  <div class="col-md-6">
    <h4 style="border-bottom:1px solid #ccc; padding:0 2% 2% 0;">
    Add Interview Criteria
    </h4>
    @include('dashboard.includes.error_or_success_message')
    <form class="form" method="POST" action="/dashboard/interview-criteria/create">
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
        <input id="name" type="text" class="validate form-control" value="{{ old('name')}}" name="name" placeholder="Name">
      </div>
      <div class="form-group">
        <input id="weight" type="text" class="validate form-control" value="{{ old('weight')}}" name="weight" placeholder="Weight">
      </div>
      <div class="form-group">
        <textarea id="description" class="form-control" name="description" placeholder="Description "></textarea>
      </div>
      <div class="form-group">
        <button class="btn btn-primary" type="submit" name="action">Create</button>
      </div>
    </form>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
  @if ($interviewCriteria->count() > 0)
  <table class="table table-bordered">
  <thead>
    <tr>
      <td>SN</td>
      <td>NAME</td>
      <td>WEIGHT</td>
      <td>INTERVIEW TYPE</td>
      <td>EDIT</td>
      <td>DELETE</td>
    </tr>
  </thead>
  <tbody>
  @foreach ($interviewCriteria as $index => $criteria)
    <tr>
      <td>{{ $index + 1 }}</td>
      <td>{{ ucwords($criteria->name) }}</td>
      <td>{{ ucwords($criteria->weight) }}</td>
      <td>{{ ucwords($criteria->interview->type)}}</td>
      <td>
          <a href="/dashboard/interview-criteria/edit/{{ $criteria->id }}">
             <i class="fa fa-pencil" aria-hidden="true"></i> Edit 
          </a>
      </td>
      <td>
        <a href="/dashboard/interview-criteria/delete/{{ $criteria->id }}">
          <i class="fa fa-trash" aria-hidden="true"> Remove 
        </a>
      </td>
    </tr>
    @endforeach
  </tbody>
  </table>
  @else 
  <h5>Interview criteria not yet added!</h5>
  @endif
  </div>
</div>
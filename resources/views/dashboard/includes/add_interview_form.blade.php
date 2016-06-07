<div class="row">
  <div class="col-md-6">
    <h4 style="border-bottom:1px solid #ccc; padding:0 2% 2% 0;">Add Interview Date</h4>
    @include('dashboard.includes.error_or_success_message')
    <form class="form" method="POST" action="/dashboard/interview/create">
      {{ csrf_field() }}
      <div class="form-group">
        <input id="code" type="text" class="validate form-control" value="{{ old('code')}}" name="code" placeholder="Interview Code">
      </div>
      <div class="form-group">
        <input id="date" type="date" class="validate form-control" value="{{ old('date')}}" name="date" placeholder="Interview Date">
      </div>
      <div class="form-group">
        <input id="type" type="text" class="validate form-control" value="" name="type" placeholder="Interview Type">
      </div>
      <div class="form-group">
        <textarea id="description" class="form-control" name="description" placeholder="Interview Description "></textarea>
      </div>
      <div class="form-group">
        <button class="btn btn-primary" type="submit" name="action">Create</button>
      </div>
    </form>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    @if ($interviews->count() > 0)
    @foreach($interviews as $index => $interview)
    <table class="table table-bordered">
      <thead>
        <tr>
          <td>SN</td>
          <td>Code</td>
          <td>Type</td>
          <td>Date</td>
          <td>Edit</td>
          <td>Delete</td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>{{ $index + 1 }}</td>
          <td>{{ $interview->code }}</td>
          <td>{{ $interview->type }}</td>
          <td>{{ $interview->date }}</td>
          <td>
            <a href="/dashboard/interview/edit/{{ $interview->id }}">
              <i class="fa fa-pencil"></i> Edit
            </a>
          </td>
          <td>
            <a href="/dashboard/interview/delete/{{ $interview->id }}">
              <i class="fa fa-trash"></i> Delete
            </a>
          </td>
        </tr>
      </tbody>
    </table>
    @endforeach
    @else
    <h5>Interview dates not yet available</h5>
    @endif
  </div>
</div>
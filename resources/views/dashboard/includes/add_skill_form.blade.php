<div class="row">
  <div class="col-md-6">
    <h4 style="border-bottom:1px solid #ccc; padding:0 2% 2% 0;">Add Skills</h4>
    @include('dashboard.includes.error_or_success_message')
    <form class="form" method="POST" action="/dashboard/skill/create">
      {{ csrf_field() }}
      <div class="form-group">
        <input id="skill" type="date" class="validate form-control" value="{{ old('skill')}}" name="skill" placeholder="Skill e.g Microsoft Word">
      </div>
      <div class="form-group">
        <button class="btn  btn-primary" type="submit" name="action">Create</button>
      </div>
    </form>
  </div>
</div>
<div class="clear-fix"></div>
<div class="row">
  <div class="col-md-12">
    <h4>My Skills</h4>
    @if ($skills->count() > 0)
    <table class="table table-bordered">
      <thead>
        <tr>
          <td>SN</td>
          <td>NAME</td>
          <td>EDIT</td>
          <td>DELETE</td>
        </tr>
        <tbody>
          @foreach($skills as $index => $skill)
          <tr>
            <td>{{ (int) $index + 1 }}</td>
            <td>{{ $skill->name }}</td>
            <td><a href="/dashboard/skill/edit/{{ $skill->id }}"><i class="fa fa-pencil" aria-hidden="true"></i> {{ $skill->name }}</a> </td>
            <td><a href="/dashboard/skill/delete/{{ $skill->id }}"> <i class="fa fa-trash" aria-hidden="true"></i> Remove </a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </thead>
  </table>
  {!! $skills->render() !!}
  @else
  <h6>No skills added yet</h6>
  @endif
</div>
</div>
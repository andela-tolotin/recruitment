<div class="row">
  <div class="col-md-6">
    <h4 style="border-bottom:1px solid #ccc; padding:0 2% 2% 0;">Add Skills</h4>
    @include('dashboard.includes.error_or_success_message')
    <form class="form" method="POST" action="/dashboard/skill/update/{{ $skill->id }}">
      {{ csrf_field() }}
      <div class="form-group">
        <input id="skill" type="text" class="validate form-control" value="{{ $skill->name }}" name="skill" placeholder="Skill e.g Microsoft Word">
      </div>
      <div class="form-group">
        <button class="btn  btn-primary" type="submit" name="action">Update</button>
      </div>
    </form>
  </div>
</div>
<div class="clear-fix"></div>
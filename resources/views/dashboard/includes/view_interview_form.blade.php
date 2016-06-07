<div class="row">
  <div class="col-md-6">
    <h4 style="border-bottom:1px solid #ccc; padding:0 2% 2% 0;">Edit Interview Date</h4>
    @include('dashboard.includes.error_or_success_message')
    <form class="form" method="POST" action="/dashboard/interview/update/{{ $interview->id }}">
      {{ csrf_field() }}
      <div class="form-group">
        <input id="code" type="text" class="validate form-control" value="{{ $interview->code }}" name="code" placeholder="Interview Code">
      </div>
      <div class="form-group">
        <input id="date" type="date" class="validate form-control" value="{{ $interview->date }}" name="date" placeholder="Interview Date">
      </div>
      <div class="form-group">
        <input id="type" type="text" class="validate form-control" value="{{ $interview->type }}" name="type" placeholder="Interview Type">
      </div>
      <div class="form-group">
        <textarea id="description" class="form-control" name="description" placeholder="Interview Description ">{{ $interview->description }}</textarea>
      </div>
      <div class="form-group">
        <button class="btn btn-primary" type="submit" name="action">Create</button>
      </div>
    </form>
  </div>
</div>
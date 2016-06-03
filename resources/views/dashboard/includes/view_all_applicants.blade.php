<div class="row">
<div class="col-md-12">
<h2>View All Applicants</h2>
@if ($users->count() > 0)
  <table class="table table-bordered">
      <thead>
          <tr>
              <td>SN</td>
              <td>NAME</td>
              <td>EMAIL</td>
              <td>MOBILE</td>
              <td>GENDER</td>
              <td>STATE</td>
              <td>CITY</td>
              <td>View CV</td>
              <td>Invite for Interview</td>
          </tr>
      </thead>
      <tbody>
      @foreach ($users as $index => $user)
          <tr>
          <td>{{ $index + 1 }}</td>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <td>{{ $user->otherinfo->phone }}</td>
          <td>{{ $user->otherinfo->gender }}</td>
          <td>{{ $user->otherinfo->state }}</td>
          <td>{{ $user->otherinfo->city }}</td>
          <td><a href="{{ $user->cv_url  }}" title="{{ $user->name }}" target="_blank"> {{ $user->name }}'s CV</a></td>
          <td><button type="submit" id="{{ $user->id }}" class ="invite btn-success" name="invite"> <i class="fa fa-calendar-check-o" aria-hidden="true"></i> Invite</button></td>
          </tr>
      @endforeach
      </tbody>
  </table>
  <p> {!! $users->render() !!}</p>
  @else
  <h4>0 applicant(s) record found</h4>
  @endif
</div>
</div>
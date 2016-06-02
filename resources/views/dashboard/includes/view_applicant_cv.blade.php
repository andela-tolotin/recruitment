<style type="text/css">
h1 {
    border-bottom: 1px solid #ccc;
    padding:2%;
    font-size: 24px;
    font-weight: 400;
}

img {
    float: right;
}

.table {
    width: 100%;
}

td {
    height: 50px;
    vertical-align: bottom;
    padding: 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

tr:hover {
    background-color: #f5f5f5;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

thead {
    background-color: #3c8dbc;
    color: white;
}
</style>

<div class="row">
    <div class="col-md-12">
        <h1> Applicant Details </h1>
        <img src="{{ Auth::user()->picture_url }}" title="{{ Auth::user()->name }}" alt="{{ Auth::user()->name }}" class="img-circle my-pix" height="150" width="150">

        <h1> Applicant Bio Data </h1>
        <table class="table">
            <tbody>
               <tr>
               <td><strong>Marital Status</strong> : {{ Auth::user()->otherinfo->marital_status }} </td>
                 <td><strong>Name</strong> : {{ Auth::user()->name }} </td>
                 <td><strong>Gender</strong> : {{ Auth::user()->otherinfo->gender ? : 'NILL' }} </td>
                 <td><strong>Username</strong> : {{ Auth::user()->username ? : 'NILL' }} </td>
               </tr>
               <tr>
                 <td><strong>Email</strong> : {{ Auth::user()->email }} </td>
                 <td><strong>Mobile</strong> : {{ Auth::user()->otherinfo->phone ? : 'NILL' }} </td>
                 <td><strong>State</strong> : {{ Auth::user()->otherinfo->state ? : 'NILL' }} </td>
                 <td><strong>City</strong> : {{ Auth::user()->otherinfo->city ? : 'NILL' }} </td>
               </tr>

               <tr>
                <td><strong>Date of Birth</strong> : {{ Auth::user()->otherinfo->dateofbirth ? : 'NILL' }} </td>
                 <td><strong>Address</strong> : {{ Auth::user()->otherinfo->address ? : 'NILL' }} </td>
                 <td></td>
                 <td></td>
               </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <h1> Applicant Academics Details </h1>
        @if (Auth::user()->academics->count() > 0)
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>SN</td>
                    <td>Institution</td>
                    <td>Qualification</td>
                    <td>Grade</td>
                </tr>
            </thead>
            <tbody>
                @foreach(Auth::user()->academics as $index => $academic)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ ucwords($academic->institution) }}</td>
                    <td>{{ ucwords($academic->qualification) }}</td>
                    <td>{{ ucwords($academic->grade) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <h6>No academic record added yet</h6>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <h1> Applicant Work Experience Details </h1>
        @if (Auth::user()->experiences->count() > 0)
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>SN</td>
                    <td>Company</td>
                    <td>Position</td>
                </tr>
            </thead>
            <tbody>
                @foreach(Auth::user()->experiences as $index => $experience)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $experience->company }}</td>
                    <td>{{ $experience->position }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <h6>No work experience added yet</h6>
        @endif
    </div>
</div>
<div class="row">
  <div class="col-md-12">
     <h1> Applicant Skills </h1>
    @if (Auth::user()->skills->count() > 0)
    <table class="table table-bordered">
      <thead>
        <tr>
          <td>SN</td>
          <td>NAME</td>
        </tr>
        <tbody>
          @foreach(Auth::user()->skills as $index => $skill)
          <tr>
            <td>{{ (int) $index + 1 }}</td>
            <td>{{ $skill->name }}</td>
        </tr>
        @endforeach
      </tbody>
    </thead>
  </table>
  @else
  <h6>No skills added yet</h6>
  @endif
</div>
</div>
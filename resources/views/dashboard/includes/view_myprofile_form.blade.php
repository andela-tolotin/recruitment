<div class="row">
  <div class="col-md-8">
    <h4>My Profile</h4>
    <form class="form" method="POST" action="/dashboard/profile/update">
      {{ csrf_field() }}
      <div class="form-group">
        @include('dashboard.includes.error_or_success_message')
        <input id="username" type="text" class="validate form-control" value="{{ Auth::user()->username }}" name="username" placeholder="Username" readonly="readonly">
      </div>
      <div class="form-group">
        <input id="email" type="email" class="validate form-control" value="{{ Auth::user()->email }}" name="email" placeholder="Email" readonly="readonly">
      </div>
      <div class="form-group">
        <input id="name" type="text" class="validate form-control" value="{{ Auth::user()->name }}" name="name" placeholder="Names: Firstname first then lastname">
      </div>
      <div class="form-group">
        <input id="phone" type="text" class="validate form-control" value="{{ Auth::user()->otherinfo->phone }}" name="phone" placeholder="Mobile">
      </div>
      <hr/>
      <div class="form-group">
        <input id="dob" type="date" class="validate form-control" value="{{ Auth::user()->otherinfo->dateofbirth }}" name="dob" placeholder="Date of birth">
      </div>
      <div class="form-group">
        <select name="marital" class="form-control">
          <option selected="selected">Choose Marital Status</option>
          <option value="Mr">Single</option>
          <option value="Mrs">Married</option>
        </select>
      </div>
      <div class="form-group">
        <select name="gender" class="form-control">
          <option selected="selected">Choose Gender</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select>
      </div>
      <hr/>
      <div class="form-group">
        <select id="select" name="state" class="form-control">
          <option selected="selected">Choose State</option>
          <option>ABUJA FCT</option>
          <option>ABIA</option>
          <option>ADAMAWA</option>
          <option>AKWA IBOM</option>
          <option>ANAMBRA</option>
          <option>BAUCHI</option>
          <option>BAYELSA</option>
          <option>BENUE</option>
          <option>BORNO</option>
          <option>CROSS RIVER</option>
          <option>DELTA</option>
          <option>EBONYI</option>
          <option>EDO</option>
          <option>EKITI</option>
          <option>ENUGU</option>
          <option>GOMBE</option>
          <option>IMO</option>
          <option>JIGAWA</option>
          <option>KADUNA</option>
          <option>KANO</option>
          <option>KATSINA</option>
          <option>KEBBI</option>
          <option>KOGI</option>
          <option>KWARA</option>
          <option>LAGOS</option>
          <option>NASSARAWA</option>
          <option>NIGER</option>
          <option>OGUN</option>
          <option>ONDO</option>
          <option>OSUN</option>
          <option>OYO</option>
          <option>PLATEAU</option>
          <option>RIVERS</option>
          <option>SOKOTO</option>
          <option>TARABA</option>
          <option>YOBE</option>
          <option>ZAMFARA</option>
        </select>
      </div>
      <div class="form-group">
        <input id="city" type="text" class="validate form-control" value="{{ Auth::user()->otherinfo->city }}" name="city" placeholder="City">
      </div>
      <div class="form-group">
        <textarea id="address" class="form-control" name="address" placeholder="Address ">{{ Auth::user()->otherinfo->address }}</textarea>
      </div>
      <div class="form-group">
        <button class="btn btn-primary" type="submit" name="action">Update
        <i class="material-icons right">update</i>
        </button>
      </div>
    </form>
  </div>
  <div class="col-md-4">
    <h4>Change Picture</h4>
    <form class="form" method="POST" action="/dashboard/picture/update" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="form-group">
        <img src="{{ Auth::user()->picture_url }}" title="myprofile" alt="myprofile" class="img-circle my-pix">
      </div>
      <div class="form-group">
        <input id="picture_url" type="file" class="validate form-control" name="picture_url">
      </div>
      <div class="form-group">
        <button class="btn btn-primary" type="submit" name="action">Upload
        <i class="material-icons right">offline_pin</i>
        </button>
      </div>
    </form>
    <h4>Upload CV</h4>
    <form method="POST" enctype="multipart/form-data" action="/dashboard/upload/cv">
    {{ csrf_field() }}
      <div class="input-group">
        <input id="app_cv" type="file" class="form-control" name="app_cv">
      </div>
      <br/>
      <div class="input-group">
        <button class="btn btn-primary" type="submit" name="action">Upload
        <i class="glyphicon glyphicon-cloud-upload"></i>
        </button>
      </div>
    </form>
    <br/>
    <h4>My CV Preview</h4>
     <a href="{{ Auth::user()->cv_url }}" target="_blank" title="{{ Auth::user()->username }}">
     {{ Auth::user()->username }}
     </a>
  </div>
</div>
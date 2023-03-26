<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Account Settings UI Design</title>
    <meta
      content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
      name="viewport"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" type="text/css" href="profile-settings.css" />
  </head>
  <body>
    <section class="py-5 my-5">
      <div class="container">
        <h1 class="mb-5">Account Settings</h1>
        <div class="bg-white shadow rounded-lg d-block d-sm-flex">
          <div class="profile-tab-nav border-right">
            <div class="p-4">
              <div class="img-circle text-center mb-3">
                <img src="{{ asset('images/user.png') }}" alt="Image" class="shadow" />
              </div>
              <h4 class="text-center">{{ $user['fname']." ".$user['lname'] }}</h4>
            </div>
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link active" id="account-tab" data-toggle="pill" href="#account" role="tab" aria-controls="account" aria-selected="true">
                <i class="fa fa-home text-center mr-1"></i>
                Account
              </a>
              <a class="nav-link" id="password-tab" data-toggle="pill" href="#password" role="tab" aria-controls="password" aria-selected="false">
                <i class="fa fa-key text-center mr-1"></i>
                Password
              </a>
              <a class="nav-link" id="security-tab" data-toggle="pill" href="#security" role="tab" aria-controls="security" aria-selected="false">
                <i class="fa fa-user text-center mr-1"></i>
                Security
              </a>
            </div>
          </div>
          <div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab" >

              <h3 class="mb-4">Account Settings</h3>
              <form action="{{ route('update') }}" method="POST" class="main_form">
                @csrf
              <div class="row">

                <div class="col-md-6">
                  <div class="form-group">
                    <label>First Name</label>
                    <input type="text" class="form-control" value="{{ $user['fname'] }}" name="fname" />
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" class="form-control" value="{{ $user['lname'] }}" name="lname" />
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" value="{{ $user['email'] }}" name="email" />
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label>Phone number</label>
                    <input type="text" class="form-control" value="{{ $user['contact_number'] }}" name="number" />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Company</label>
                    <input type="text" class="form-control" value="" name="company" />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" value="{{ $user['address'] }}" name="address" />
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Bio</label>
                    <textarea class="form-control" rows="4" name="bio" >
Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore vero enim error similique quia numquam ullam corporis officia odio repellendus aperiam consequatur laudantium porro voluptatibus, itaque laboriosam veritatis voluptatum distinctio!</textarea
                    >
                  </div>
                </div>
              </div>
              <div>
                <button type="submit" class="btn btn-primary">Update</button>
                <button type="none" class="btn btn-light">Cancel</button>
              </div>
            </form>

            </div>
            <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab" >
              <h3 class="mb-4">Password Settings</h3>
              <form action="password" method="POST" class="main_form">
                @csrf
                <span class="error-text"></span>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Old password</label>
                      <input type="password" class="form-control" name="oldPassword" />
                    </div>
                  </div>
                </div>

                <div class="row">

                  <div class="col-md-6">
                    <div class="form-group">
                      <label>New password</label>
                      <input type="password" class="form-control" name="newPassword" />
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Confirm new password</label>
                      <input type="password" class="form-control" name="confirmPassword" />
                    </div>
                  </div>

                </div>

                <div>
                  <button type="submit" class="btn btn-primary">Update</button>
                  <button class="btn btn-light">Cancel</button>
                </div>
              </form>

            </div>
            <div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="security-tab" >
              <h3 class="mb-4">Security Settings</h3>
              <form action="">
              @csrf
              <div class="row">

                <div class="col-md-6">
                  <div class="form-group">
                    <label>Login</label>
                    <input type="text" class="form-control" />
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label>Two-factor auth</label>
                    <input type="text" class="form-control" name="2-factor" />
                  </div>
                </div>

                <div class="col-md-6">

                  <div class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="recovery" name="recovery"/>
                      <label class="form-check-label" for="recovery">
                        Recovery
                      </label>
                    </div>
                  </div>

                </div>
              </div>

              <div>
                <button type="submit" class="btn btn-primary">Update</button>
                <button class="btn btn-light">Cancel</button>
              </div>

            </form>

            </div>
            <div class="tab-pane fade" id="application" role="tabpanel" aria-labelledby="application-tab" >
              <h3 class="mb-4">Application Settings</h3>
              <form action="" method="POST">
              @csrf
              <div class="row">
                <div class="col-md-6">

                  <div class="form-group">

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="app-check" />
                      <label class="form-check-label" for="app-check">
                        App check
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" />
                      <label class="form-check-label" for="defaultCheck2">
                        Lorem ipsum dolor sit.
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <button type="submit" class="btn btn-primary">Update</button>
                <button class="btn btn-light">Cancel</button>
              </div>
            </div>
            <div class="tab-pane fade" id="notification" role="tabpanel" aria-labelledby="notification-tab" >
              <h3 class="mb-4">Notification Settings</h3>
              <form action="" method="POST">
              @csrf
              <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="notification1" />
                  <label class="form-check-label" for="notification1">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Dolorum accusantium accusamus, neque cupiditate quis
                  </label>
                </div>
              </div>

              <div class="form-group">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="notification2"
                  />
                  <label class="form-check-label" for="notification2">
                    hic nesciunt repellat perferendis voluptatum totam porro
                    eligendi.
                  </label>
                </div>
              </div>

              <div class="form-group">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="notification3"
                  />
                  <label class="form-check-label" for="notification3">
                    commodi fugiat molestiae tempora corporis. Sed dignissimos
                    suscipit
                  </label>
                </div>
              </div>

              <div>
                <button type="submit" class="btn btn-primary">Update</button>
                <button class="btn btn-light">Cancel</button>
              </div>

            </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>

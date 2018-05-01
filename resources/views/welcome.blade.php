<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
      <a class="navbar-brand" href="#">Document CMD</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home</a>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="container-fluid">
      <div class="row">
          <div class="col-2 pt-3">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">User</a>
              <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Job</a>
              <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Sample</a>
            </div>
          </div>
          <div class="col-10">
            <div class="tab-content" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <p>
                  <div class="alert alert-dark mt-0" role="alert">
                    <h4 class="alert-heading">Register - POST</h4>
                    <hr>
                    <p class="mb-0">http://api.gmon.vn/api/register</p>
                  </div>
                  <h2><span class="badge badge-secondary">Header</span></h2>
                  <table class="table">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Key</th>
                        <th scope="col">Value</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Accept</td>
                        <td>application/json</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Content-Type</td>
                        <td>application/json</td>
                      </tr>
                    </tbody>
                  </table>
                  <h2><span class="badge badge-secondary">Body</span></h2>
                  <table class="table">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Key</th>
                        <th scope="col">Value</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>username</td>
                        <td>admin</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>email</td>
                        <td>admin@gmail.com</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>password</td>
                        <td>iloveyou</td>
                      </tr>
                    </tbody>
                  </table>
                </p>
                <p>
                  <div class="alert alert-dark mt-0" role="alert">
                    <h4 class="alert-heading">Login - POST</h4>
                    <hr>
                    <p class="mb-0">http://api.gmon.vn/oauth/token</p>
                  </div>
                  <h2><span class="badge badge-secondary">Header</span></h2>
                  <table class="table">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Key</th>
                        <th scope="col">Value</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Accept</td>
                        <td>application/json</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Content-Type</td>
                        <td>application/json</td>
                      </tr>
                    </tbody>
                  </table>
                  <h2><span class="badge badge-secondary">Body</span></h2>
                  <table class="table">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Key</th>
                        <th scope="col">Value</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>client_id</td>
                        <td>2</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>client_secret</td>
                        <td>WZc0bLFoiedjG8fNw99asoOX7fZUXqj3vAf2rwBB</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>grant_type</td>
                        <td>password</td>
                      </tr>
                      <tr>
                        <th scope="row">4</th>
                        <td>username</td>
                        <td>tuantt@cmd.local</td>
                      </tr>
                      <tr>
                        <th scope="row">5</th>
                        <td>password</td>
                        <td>iloveyou</td>
                      </tr>
                    </tbody>
                  </table>
                </p>
              </div>
              <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <p>
                  <div class="alert alert-dark mt-0" role="alert">
                    <h4 class="alert-heading">List Job - GET</h4>
                    <hr>
                    <p class="mb-0">http://api.gmon.vn/api/jobs/</p>
                  </div>
                </p>
                <p>
                  <div class="alert alert-dark mt-0" role="alert">
                    <h4 class="alert-heading">Get Job - GET</h4>
                    <hr>
                    <p class="mb-0">http://api.gmon.vn/api/jobs/1</p>
                  </div>
                  <h2><span class="badge badge-secondary">Header</span></h2>
                  <table class="table">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Key</th>
                        <th scope="col">Value</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Accept</td>
                        <td>application/json</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Content-Type</td>
                        <td>application/json</td>
                      </tr>
                    </tbody>
                  </table>
                </p>
                <p>
                  <div class="alert alert-dark mt-0" role="alert">
                    <h4 class="alert-heading">Store Job - POST</h4>
                    <hr>
                    <p class="mb-0">http://api.gmon.vn/api/jobs</p>
                  </div>
                  <h2><span class="badge badge-secondary">Header</span></h2>
                  <table class="table">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Key</th>
                        <th scope="col">Value</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Accept</td>
                        <td>application/json</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Content-Type</td>
                        <td>application/json</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Authorization</td>
                        <td>Bearer { access_token }</td>
                      </tr>
                    </tbody>
                  </table>
                  <h2><span class="badge badge-secondary">Body</span></h2>
                  <table class="table">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Key</th>
                        <th scope="col">Value</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>date_plan</td>
                        <td>2018-08-01 10:30:00</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>start_at</td>
                        <td>2018-08-02 10:30:00</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>done_at</td>
                        <td>2018-08-02 10:30:00</td>
                      </tr>
                      <tr>
                        <th scope="row">4</th>
                        <td>status</td>
                        <td>1</td>
                      </tr>
                      <tr>
                        <th scope="row">5</th>
                        <td>plan_id</td>
                        <td>1</td>
                      </tr>
                    </tbody>
                  </table>
                </p>
              </div>
              <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <p>
                  <div class="alert alert-dark mt-0" role="alert">
                    <h4 class="alert-heading">List Sample - GET</h4>
                    <hr>
                    <p class="mb-0">http://api.gmon.vn/api/samples/</p>
                  </div>
                </p>
                <p>
                  <div class="alert alert-dark mt-0" role="alert">
                    <h4 class="alert-heading">Get Sample - GET</h4>
                    <hr>
                    <p class="mb-0">http://api.gmon.vn/api/samples/1</p>
                  </div>
                  <h2><span class="badge badge-secondary">Header</span></h2>
                  <table class="table">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Key</th>
                        <th scope="col">Value</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Accept</td>
                        <td>application/json</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Content-Type</td>
                        <td>application/json</td>
                      </tr>
                    </tbody>
                  </table>
                </p>
                <p>
                  <div class="alert alert-dark mt-0" role="alert">
                    <h4 class="alert-heading">Store Sample - POST</h4>
                    <hr>
                    <p class="mb-0">http://api.gmon.vn/api/samples</p>
                  </div>
                  <h2><span class="badge badge-secondary">Header</span></h2>
                  <table class="table">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Key</th>
                        <th scope="col">Value</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Accept</td>
                        <td>application/json</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Content-Type</td>
                        <td>application/json</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Authorization</td>
                        <td>Bearer { access_token }</td>
                      </tr>
                    </tbody>
                  </table>
                  <h2><span class="badge badge-secondary">Body</span></h2>
                  <table class="table">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Key</th>
                        <th scope="col">Value</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>date_plan</td>
                        <td>2018-08-01 10:30:00</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>start_at</td>
                        <td>2018-08-02 10:30:00</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>done_at</td>
                        <td>2018-08-02 10:30:00</td>
                      </tr>
                      <tr>
                        <th scope="row">4</th>
                        <td>status</td>
                        <td>1</td>
                      </tr>
                      <tr>
                        <th scope="row">5</th>
                        <td>plan_id</td>
                        <td>1</td>
                      </tr>
                    </tbody>
                  </table>
                </p>
              </div>
            </div>
          </div>
        </div>
    </main>
</body>
</html>
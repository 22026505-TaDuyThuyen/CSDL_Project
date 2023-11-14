<!DOCTYPE html>
<html>
  <head>
    <title>Registration Page</title>
    <link rel="stylesheet" type="text/css" href="../asset/css/bootstrap.css" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link rel="stylesheet" href="../asset/css/register.css">
  </head>
  <body>
    <div class="container-fluid">
        <div class="col-md-4" style="display : flex">
            <img src="../asset/img/VNA_logo_vn.webp" alt="" style="height: 80px;width:50%">
            <img src="../asset/img/skyteam.webp" alt="" style="height: 40px; width: 50px ;margin-top : 15px">
        </div>
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>Registration</h1>
          </div>
          <div class="panel-body">
            <form action="connect.php" method="post">
              <div class="form-group">
                <label for="firstName">Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="name"
                  name="name"
                />
              </div>
              <div class="form-group">
                <label for="gender">Gender</label>
                <div>
                  <label for="male" class="radio-inline"
                    ><input
                      type="radio"
                      name="gender"
                      value="m"
                      id="male"
                    />Male</label
                  >
                  <label for="female" class="radio-inline"
                    ><input
                      type="radio"
                      name="gender"
                      value="f"
                      id="female"
                    />Female</label
                  >
                  <label for="others" class="radio-inline"
                    ><input
                      type="radio"
                      name="gender"
                      value="o"
                      id="others"
                    />Others</label
                  >
                </div>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input
                  type="text"
                  class="form-control"
                  id="email"
                  name="email"
                />
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input
                  type="password"
                  class="form-control"
                  id="password"
                  name="password"
                />
              </div>
              <div class="form-group">
                <div class="form-item">
                    <button class="btn btn-primary w-100 py-2" type="submit">Submit</button>
                </div>
            </div>
              <div class="form-group user-register">
                <div class="col-sm-12 col-md-12 col-lg-12 form-item text-center">
                    <br/> Do Have an Account ? 
                    <a href="#">LOGIN</a>
                </div>
            </div>
            </form>
          </div>
          <div class="panel-footer text-right">
            <small>&copy; VietNamAirLine</small>
          </div>
        </div>
      </div>
    </div>
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
    <img src="..." class="rounded mr-2" alt="...">
    <strong class="mr-auto">Bootstrap</strong>
    <small>11 mins ago</small>
    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="toast-body">
    Hello, world! This is a toast message.
  </div>
</div>
  </body>
</html>
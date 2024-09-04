<!DOCTYPE html>
<html>
  <head>
    <title>Contact Form</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  </head>
  <body>
    <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>Contact Form</h1>
          </div>
          <div class="panel-body">
            <form action="connect.php" method="post">
              <div class="form-group">
                <label for="Nama">Nama</label><input
                  type="text" class="form-control" id="Nama" name="Nama"/>
              </div>
              <div class="form-group">
                <label for="NIM">NIM</label><input
                  type="text" class="form-control" id="NIM"  name="NIM"/>
              </div>
              <div class="form-group"><label for="Gender">Gender</label>
                <div>
                  <label for="male" class="radio-inline"><input
                      type="radio"  name="Gender"  value="m"
                      id="male"/>Male</label>
                  <label for="female" class="radio-inline"><input
                      type="radio" name="Gender"  value="f" id="female"/>Female</label>
                  <label for="others" class="radio-inline"><input
                      type="radio" name="Gender" value="o" id="others"/>Others</label>
                </div>
              </div>
              <div class="form-group"><label for="Kelas">Kelas</label><input
                  type="text" class="form-control" id="Kelas" name="Kelas"/>
              </div>
              <div class="form-group"><label for="Email">Email</label>
                <input type="text" class="form-control" id="Email" name="Email"/>
              </div>
              <div class="form-group"><label for="Saran">Saran</label>
                <input type="text" class="form-control" id="Saran" name="Saran"/>
              </div>
              <input type="submit" class="btn btn-primary" />
            </form>
          </div>
          <div class="panel-footer text-right">
            <small>&copy; Azizah Istiqomah</small>
          </div>
        </div>
      </div>
    </div>
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
  </div>
  <center>
  <div class="toast-body">
    Universitas Brawijaya - Pemrograman Web Framework
  </div>
  </center>
</div>
  </body>
</html>
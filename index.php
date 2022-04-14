<!DOCTYPE html>
<html lang="en">

<head>

      <!--  |---------------------------|
       |      Meta Tags Here       |
       |---------------------------| -->
      <!--turn off IE compatibility mode -->
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Charecter set -->
      <meta charset="utf-8">
      <!-- View Port -->
      <meta name="viewport" content="width=device-width, minimum-scale=1" />

      <!--  |---------------------------|
       |    Website Onpage SEO     |
       |---------------------------| -->

      <!-- this is title -->
      <title>HOME</title>
      <!-- Keyword -->
      <meta name="Keyword" content=" No more than 10 keyword mdmajidulislam,">
      <!-- Meta Description -->
      <meta name="description" content="160 characters">

      <!--  |---------------------------|
       |    All Css File Here      |
       |---------------------------| -->

      <!--Raleway fonts CSS -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">
      <!--Montserrat fonts CSS -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;500;700&display=swap" rel="stylesheet">

      <!-- css for bootstrap -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- css for Fontawesome -->
      <link rel="stylesheet" type="text/css" href="css/all.min.css">
      <!-- table css -->
      <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
      <!-- my css file -->
      <link rel="stylesheet" type="text/css" href="style.css">


</head>

<body>

      <!--   |.....................................|
       |============Content Here=============|
       |.....................................| -->


      <?php include 'insert.php' ?>
      <section>
            <div class="container bg-light p-5">
                  <div class="row">
                        <div class="col-md-4 mt-5">

                              <form method="post">
                                    <div class="form-group">
                                          <label for="exampleInputEmail1">Name</label>
                                          <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
                                    </div>
                                    <div class="form-group">
                                          <label for="exampleInputPassword1">User Name</label>
                                          <input type="text" class="form-control" name="username" id="exampleInputPassword1" placeholder="Enter User Name">
                                    </div>
                                    <div class="form-group">
                                          <label for="exampleInputPassword1">Email</label>
                                          <input type="email" class="form-control" name="email" id="exampleInputPassword1" placeholder="Enter Email">
                                    </div>
                                    <div class="form-group">
                                          <label for="exampleInputPassword1">Phone Number</label>
                                          <input type="tel" class="form-control" name="phone" id="exampleInputPassword1" placeholder="Enter Phone Number">

                                    </div>

                                    <div class="form-group">
                                          <select class="form-group" aria-label="Default select example" name="status">
                                                <option selected>Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                          </select>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-danger">Submit</button>
                              </form>

                        </div>
                        <div class="col-md-8">
                              <?php
                              $row1 = showitems($con);
                              $count = mysqli_num_rows($row1); //mysqli_num_rows($row1);
                              ?>
                              <table id="table_id" class="display">
                                    <thead>
                                          <tr>
                                                <th>No.</th>
                                                <th>name</th>
                                                <th>username</th>
                                                <th>email</th>
                                                <th>phone</th>
                                                <th>status</th>
                                          </tr>
                                    </thead>
                                    <tbody>
                                          <?php
                                          while ($count > 0) {
                                                $result = mysqli_fetch_assoc($row1);
                                          ?>
                                                <tr>
                                                      <?php foreach ($result as $key => $value) { ?>
                                                            <td><?php echo "$value"; ?></td>
                                                      <?php } ?>
                                                </tr>
                                          <?php
                                                $count--;
                                          }  ?>
                                    </tbody>
                              </table>
                        </div>
                  </div>
            </div>
      </section>

      <?php print_r($result); ?>


      <!--|---------------------------|
       |    All Js File Here       |
       |---------------------------| -->
      <!-- jQuery 3.5.1 Verson File -->
      <script type="text/javascript" src="js/jquery-3.5.1.js"></script>
      <!-- table js -->
      <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
      <!-- js for popper -->
      <script type="text/javascript" src="js/popper.js"></script>
      <!-- js fo bootstrap -->
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <!-- js for fontawesome -->
      <script type="text/javascript" src="js/all.min.js"></script>
      <script>
            $(document).ready(function() {
                  $('#table_id').DataTable();
            });
      </script>


</body>

</html>
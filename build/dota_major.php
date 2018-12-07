<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
<?php require('CSS_meta.php'); ?>

</head>
<body>

  <?php require('Header.php'); ?>

  <main role="main">
  <div class="container">
    <div class="row">

      <?php include('Menu.php'); ?>

      <div class="col-md order-md-1 h-100 content">
        <h1>
          First we should tell something about how to get to the TI2019
        </h1>
        <p> Through the season we will be able to watch 5 minors and 5 majors. Each team participating on any of those events will be able conquer points. Before TI 2019 12 teams whith the highest score will
            be able to play directly in main event. Remaining spots will be filled by winners of regional qualifiers.<p>
        <span>
        <h2>
          Here's a list of majors/minors in this season
        </h2>
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Date</th>
              <th scope="col">Status</th>
              <th scope="col">Place</th>
              <th scope="col">prize pool</th>
              <th scope="col">Points</th>
              <th scope="col">Organizer</th>
            </tr>
          <tbody>
            <tr>
              <th scope="row">Oct29-Nov 4</th>
              <td>Minor</td>
              <td>Sweden</td>
              <td>$300,000</td>
              <td>500</td>
              <td>
                  <img class="AF_logo" src="Assets/Images/dream.png" alt="dream">
              </td>
            </tr>
            <tr>
              <th scope="row">Nov 9-18</th>
              <td>Major</td>
              <td>Malesia</td>
              <td>$1,000,000</td>
              <td>15000</td>
              <td>
                  <img class="AF_logo" src="Assets/Images/pgl.png" alt="pgl">
              </td>
            </tr>
            <tr>
              <th scope="row">Jan 7-13</th>
              <td>Minor</td>
              <td>Romania</td>
              <td>$300,000</td>
              <td>500</td>
              <td>
                  <img class="AF_logo" src="Assets/Images/pgl.png" alt="pgl">
              </td>
            </tr>
            <tr>
              <th scope="row">Jan 17-27</th>
              <td>Major</td>
              <td>China</td>
              <td>$1,000,000</td>
              <td>15000</td>
              <td>
                  <img class="AF_logo" src="Assets/Images/star.png" alt="star">
              </td>
            </tr>
            <tr>
              <th scope="row">Mar 4-10</th>
              <td>Minor</td>
              <td>TBA</td>
              <td>$300,000</td>
              <td>500</td>
              <td> TBA
              </td>
            </tr>
            <tr>
              <th scope="row">Mar 14-24</th>
              <td>Major</td>
              <td>Sweden</td>
              <td>$1,000,000</td>
              <td>15000</td>
              <td>
                  <img class="AF_logo" src="Assets/Images/dream.png" alt="dream">
              </td>
            </tr>
            <tr>
              <th scope="row">Apr 22-28</th>
              <td>Minor</td>
              <td>Croatia</td>
              <td>$300,000</td>
              <td>500</td>
              <td>
                  <img class="AF_logo" src="Assets/Images/pit.png" alt="pit">
              </td>
            </tr>
            <tr>
              <th scope="row">May 2-12</th>
              <td>Major</td>
              <td>TBA</td>
              <td>$1,000,000</td>
              <td>15000</td>
              <td>
                  TBA
              </td>
            </tr>
            <tr>
              <th scope="row">June 10-16</th>
              <td>Minor</td>
              <td>Ukraine</td>
              <td>$300,000</td>
              <td>500</td>
              <td>
                  <img class="AF_logo" src="Assets/Images/star.png" alt="star">
              </td>
            </tr>
            <tr>
              <th scope="row">June 20-30</th>
              <td>Major</td>
              <td>TBA</td>
              <td>$1,000,000</td>
              <td>15000</td>
              <td>
                  TBA
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <?php include('footer.php'); ?>

  </main>

  <?php require('JScript_meta.php'); ?>
</body>
</html>

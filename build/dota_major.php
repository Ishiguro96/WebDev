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
        <h1 class="text-center">
          First we should tell something about how to get to the TI2019
        </h1>
        <br>
        <p> Through the season we will be able to watch 5 minors and 5 majors. Each team participating on any of those events will be able conquer points. Before TI 2019 12 teams whith the highest score will
            be able to play directly in main event. Remaining spots will be filled by winners of regional qualifiers.
        </p>
        <br>
        <p class="text-center">
          If you would like to learn more about TI 2019 informations click   <a class="Team" id="link" href="https://www.dota2.com/procircuit">here</a>
        <h2 class="text-center">
          Here's a list of majors/minors in this season
        </h2>
        <br>
        <div class="table-responsive table-dark major-dota "  style="text-align: center;">
          <table class="table"  >
            <thead>
              <tr>
                <th class="align-middle" scope="col">Date</th>
                <th class="align-middle" scope="col">Status</th>
                <th class="align-middle" scope="col">Place</th>
                <th class="align-middle" scope="col">prize pool</th>
                <th class="align-middle" scope="col">Points</th>
                <th class="align-middle" scope="col">Organizer</th>
              </tr>
            <tbody>
              <tr>
                <th class="align-middle" scope="row">Oct29-Nov 4</th>
                <td class="align-middle">Minor</td>
                <td class="align-middle">Sweden</td>
                <td class="align-middle">$300,000</td>
                <td class="align-middle">500</td>
                <td class="align-middle">
                    <img class="AF_logo" src="Assets/Images/dream.png" alt="dream">
                </td>
              </tr>
              <tr>
                <th class="align-middle" scope="row">Nov 9-18</th>
                <td class="align-middle">Major</td>
                <td class="align-middle">Malesia</td>
                <td class="align-middle">$1,000,000</td>
                <td class="align-middle">15000</td>
                <td class="align-middle">
                    <img class="AF_logo" src="Assets/Images/pgl.png" alt="pgl">
                </td>
              </tr>
              <tr>
                <th class="align-middle" scope="row">Jan 7-13</th>
                <td class="align-middle">Minor</td>
                <td class="align-middle">Romania</td>
                <td class="align-middle">$300,000</td>
                <td class="align-middle">500</td>
                <td class="align-middle">
                    <img class="AF_logo" src="Assets/Images/pgl.png" alt="pgl">
                </td>
              </tr>
              <tr>
                <th class="align-middle" scope="row">Jan 17-27</th>
                <td class="align-middle">Major</td>
                <td class="align-middle">China</td>
                <td class="align-middle">$1,000,000</td>
                <td class="align-middle">15000</td>
                <td class="align-middle">
                    <img class="AF_logo" src="Assets/Images/star.png" alt="star">
                </td>
              </tr>
              <tr>
                <th class="align-middle" scope="row">Mar 4-10</th>
                <td class="align-middle">Minor</td>
                <td class="align-middle">TBA</td>
                <td class="align-middle">$300,000</td>
                <td class="align-middle">500</td>
                <td class="align-middle"> TBA
                </td>
              </tr>
              <tr>
                <th class="align-middle" scope="row">Mar 14-24</th>
                <td class="align-middle">Major</td>
                <td class="align-middle">Sweden</td>
                <td class="align-middle">$1,000,000</td>
                <td class="align-middle">15000</td>
                <td class="align-middle">
                    <img class="AF_logo" src="Assets/Images/dream.png" alt="dream">
                </td>
              </tr>
              <tr>
                <th class="align-middle" scope="row">Apr 22-28</th>
                <td class="align-middle">Minor</td>
                <td class="align-middle">Croatia</td>
                <td class="align-middle">$300,000</td>
                <td class="align-middle">500</td>
                <td class="align-middle">
                    <img class="AF_logo" src="Assets/Images/pit.png" alt="pit">
                </td>
              </tr>
              <tr>
                <th class="align-middle" scope="row">May 2-12</th>
                <td class="align-middle">Major</td>
                <td class="align-middle">TBA</td>
                <td class="align-middle">$1,000,000</td>
                <td class="align-middle">15000</td>
                <td class="align-middle">
                    TBA
                </td>
              </tr>
              <tr>
                <th class="align-middle" scope="row">June 10-16</th>
                <td class="align-middle">Minor</td>
                <td class="align-middle">Ukraine</td>
                <td class="align-middle">$300,000</td>
                <td class="align-middle">500</td>
                <td class="align-middle">
                    <img class="AF_logo" src="Assets/Images/star.png" alt="star">
                </td>
              </tr>
              <tr>
                <th class="align-middle" scope="row">June 20-30</th>
                <td class="align-middle">Major</td>
                <td class="align-middle">TBA</td>
                <td class="align-middle">$1,000,000</td>
                <td class="align-middle">15000</td>
                <td class="align-middle">
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

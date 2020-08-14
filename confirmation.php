
      <?php
      include('header.php');
  include('class/classConfirmation.php');
  $confirmation=new confirmation();
  $data=$confirmation->afficheReservation();
   ?>
   <div class="col-12 d-flex justify-content-center mt-5">
    <table border= 2px solid black;>
    <tr>
    <th>nom : </th>
    <td><?php echo $data[0]['nom'] ?> </td>
  </tr>
  <tr>
    <th>prenom :</th>
    <td><?php echo $data[0]['prenom'] ?></td>
  </tr>
  <tr>
    <th>address :</th>
    <td><?php echo $data[0]['adress'] ?></td>
  </tr>
  <tr>
    <th>id de reservation : </th>
    <td><?php echo $data[0]['idReservation'] ?></td>
  </tr>
  <tr>
    <th>la data de reservation : </th>
    <td><?php echo $data[0]['dateResr'] ?></td>
  </tr>
 
  <tr>
    <th>lieu de depart : </th>
    <td><?php echo $data[0]['lieuDepart'] ?></td>
  </tr>
  <tr>
    <th>destination : </th>
    <td><?php echo $data[0]['destination'] ?></td>
  </tr>
  <tr>
    <th>date vole : </th>
    <td><?php echo $data[0]['dateVole'] ?></td>
  </tr>
  <tr>
    <th>prix : </th>
    <td><?php echo $data[0]['prix'] ?></td>
  </tr>
  <tr>
    <th>numero de telephone :</th>
    <td><?php echo $data[0]['numTelephone'] ?></td>
  </tr>
  <tr>
    <th>email :</th>
    <td><?php echo $data[0]['email'] ?></td>
  </tr>
  <tr>
    <th>passport :</th>
    <td><?php echo $data[0]['passport'] ?></td>
  </tr>
    </table>
</div>
    <?php include('footer.php'); ?>
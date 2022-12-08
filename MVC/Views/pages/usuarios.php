<p>Usuarios</p>



<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>E-Mail</th>
      <th>Role</th>
    </tr>
  </thead>
  <tfoot>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>E-Mail</th>
      <th>Role</th>
    </tr>
  </tfoot>
  <tbody>
  <?php foreach ($all_usuarios as $row) {?>
  <tr>
      <th><?= $row["id"]?></th>
      <th><?= $row["name"]?></th>
      <th><?= $row["email"]?></th>
      <th><?= $row["role"]?></th>
          </tr>
    <?php }?>
  </tbody>
</table>
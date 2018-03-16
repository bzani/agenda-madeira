<?php 
    require_once 'global.php';
    include(ST_TM_HEADER); 
?>

<h2><?php echo LBL_TT_ABOUT;?></h2>

<div class="container text-center">    
  <br><br>
  <div class="row">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-3">
      <img src="img/wood.jpeg" class="img-responsive" style="width:100%" alt="Madeira">
    </div>
    <div class="col-sm-5"> 
      <p align='left'>
        A Agenda Telefonica Madeira possui funcionalidades de cadastro e manutenção de contatos
        em uma interface amigável e responsiva, em formato de agenda de contatos, além disso, conta com recursos gráficos para aprimorar a análise e gestão de sua base de dados.<br>
        Para seu desenvolvimento, foram utilizadas as ferramentas:
        <ul>
          <li align='left'> Ambiente XAMPP (Apache, mySQL, PHP7)</li>
          <li align='left'> Editor de texto Sublime Text 3</li>
          <li align='left'> Framework front-end Bootstrap e jQuery</li>
        </ul>
      </p>
    </div>
    <div class="col-sm-2">
    </div>
  </div>
</div><br>

<?php include(ST_TM_FOOTER); ?>
<script>
    $(document).ready(function () {
         $("#navbar_menu").hide();
    });
</script>
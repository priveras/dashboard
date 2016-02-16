<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Dashboard
    <small>Version 2.0</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
  </ol>
</section>

<section class="content">
  <div class="row">
    <div class="col-sm-4">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Stripe by Day</h3>
        </div><!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tr>
              <th>Date</th>
              <th># Paid</th>
              <th>Paid Value</th>
            </tr>
            <?php foreach ($stripe_day as $row):?>
            <tr>
              <td><?php echo $row['date']?></td>
              <td><?php echo number_format($row['transactions'],2)?></td>
              <td><?php echo number_format($row['value'],2)?></td>
            </tr>
            <?php endforeach ?>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div>
  </div>
</section>
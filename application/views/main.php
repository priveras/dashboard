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
    <div class="col-sm-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Stripe by Month</h3>
        </div><!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tr>
              <td><b>Status</b></td>
              <?php foreach($stripe_month['months'] as $month):?>
              <td>
                <b>
                  <?php 
                  list($y,$m) = explode("_",  $month);
                  echo date('M', mktime(0, 0, 0, $m, 10))."'".substr($y,2);
                  ?>
                </b>
              </td>
              <?php endforeach;?>
            </tr>
            <?php  foreach($stripe_month['info'] as $type => $info): ?>
            <tr>
              <td colspan="<?php echo count($stripe_month['months'])+1?>"> 
                <?php echo $type?>
              </td>
            </tr>
            <tr>
              <td style="padding-left:20px;">Transactions</td>
              <?php  foreach ($stripe_month['months'] as $month): ?>
              <td>
                <?php echo isset($info[$month]) ?$info[$month]['transactions']: '-'?>
              </td>
              <?php endforeach;?>
            </tr>
            <tr>
              <td style="padding-left:20px;">Value</td>
              <?php  foreach ($stripe_month['months'] as $month): ?>
              <td>
                <?php echo isset($info[$month]) ? '$'.number_format($info[$month]['value'],2): '-'?>
              </td>
              <?php endforeach;?>
            </tr>
            <?php endforeach;?>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div>
  </div>
  <div class="row">
    <div class="col-sm-4">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Stripe Summary</h3>
        </div><!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tr>
              <th>Status</th>
              <th>Transactions</th>
              <th>Value</th>
            </tr>
            <?php foreach($stripe_summary as $row): ?>
            <tr>
              <td><?php echo $row['status']?></td>
              <td><?php echo number_format($row['total_transactions'])?></td>
              <td><?php echo number_format($row['total_value'],2)?></td>
            </tr>
            <?php endforeach ?>
            <tr>
              <td>Disputed</td>
              <?php foreach($stripe_disputes as $row): ?>
              <td><?php echo number_format($row['total_disputes'])?></td>
              <td><?php echo number_format($row['total_disputes_value'],2)?></td>
              <?php endforeach ?>
            </tr>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div>
    <div class="col-sm-8">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Stripe Cards</h3>
        </div><!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tr>
              <th>Status</th>
              <th>Card Type</th>
              <th>Transactions</th>
              <th>Value</th>
            </tr>
            <?php foreach($stripe_cards as $row): ?>
            <tr>
              <td><?php echo $row['status']?></td>
              <td><?php echo $row['card_brand']?></td>
              <td><?php echo number_format($row['count'])?></td>
              <td><?php echo number_format($row['value'],2)?></td>
            </tr>
            <?php endforeach ?>
              <?php foreach($stripe_cards_disputes as $row): ?>
              <tr>
                <td>Disputed</td>
                <td><?php echo $row['card_brand']?></td>
                <td><?php echo number_format($row['count'],2)?></td>
                <td><?php echo number_format($row['value'],2)?></td>
              </tr>
              <?php endforeach ?>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div>
      <div class="col-sm-3">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Stripe Paid</h3>
          </div><!-- /.box-header -->
          <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
              <tr>
                <th>Status</th>
                <th>Transactions</th>
                <th>Value</th>
              </tr>
              <?php foreach($stripe_paid_time as $row): ?>
              <tr>
                <td><?php echo $row['hour']?>:00</td>
                <td><?php echo number_format($row['transactions'])?></td>
                <td><?php echo number_format($row['value'])?></td>
              </tr>
              <?php endforeach ?>
            </table>
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div>
      <div class="col-sm-3">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Stripe Failed</h3>
          </div><!-- /.box-header -->
          <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
              <tr>
                <th>Status</th>
                <th>Transactions</th>
                <th>Value</th>
              </tr>
              <?php foreach($stripe_failed_time as $row): ?>
              <tr>
                <td><?php echo $row['hour']?>:00</td>
                <td><?php echo number_format($row['transactions'])?></td>
                <td><?php echo number_format($row['value'])?></td>
              </tr>
              <?php endforeach ?>
            </table>
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div>
      <div class="col-sm-3">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Stripe Disputed</h3>
          </div><!-- /.box-header -->
          <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
              <tr>
                <th>Status</th>
                <th>Transactions</th>
                <th>Value</th>
              </tr>
              <?php foreach($stripe_disputed_time as $row): ?>
              <tr>
                <td><?php echo $row['hour']?>:00</td>
                <td><?php echo number_format($row['transactions'])?></td>
                <td><?php echo number_format($row['value'])?></td>
              </tr>
              <?php endforeach ?>
            </table>
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div>
      <div class="col-sm-3">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Stripe Refunded</h3>
          </div><!-- /.box-header -->
          <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
              <tr>
                <th>Status</th>
                <th>Transactions</th>
                <th>Value</th>
              </tr>
              <?php foreach($stripe_refunded_time as $row): ?>
              <tr>
                <td><?php echo $row['hour']?>:00</td>
                <td><?php echo number_format($row['transactions'])?></td>
                <td><?php echo number_format($row['value'])?></td>
              </tr>
              <?php endforeach ?>
            </table>
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div>
    </div>
  </div>
</section>
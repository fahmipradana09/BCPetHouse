<?= $this->extend('layout/templates'); ?>
<?= $this->Section('content'); ?>
<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h4>Rawat Inap</h4>
        </div>
        <?php if (session()->getFlashdata('message')):?>
            <div class="alert alert-success alert-dismissible text-white fade show mx-5 mt-3" role="alert">
            <?= session()->getFlashdata('message'); ?>
            <button type="button" class="btn-close text-white" data-dismiss="alert" aria-label="Close"></button>
            </div>
          <?php endif;?>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0 m-5">
            <table id="rawatInap" class="table display compact" style="width:100%">
              <thead>
                  <tr>
                      <th>No</th>
                      <th>Pet Name</th>
                      <th>Owner Name</th>
                      <th>Address</th>
                      <th>Time Checkup</th>
                      <th>Status</th>
                      <th class="text-center">Action</th>
                  </tr>
              </thead>
              
              <tbody>
                <?php $i = 1; ?>
                <?php foreach ($dataInap as $r): ?>
                  <tr class="clickable-row" data-href="<?= base_url('/RawatInap/detail/') . $r['id'] ?>" data-flag="edit">
                      <td class="align-middle text-center justify-content-center">
                        <?= $i++; ?>
                      </td>

                      <td class="align-middle justify-content-center col-2">
                        <?= $r['name']?>
                      </td>

                      <td class="align-middle justify-content-center col-2">
                        <?= $r['owner_name']?>
                      </td>

                      <td class="align-middle justify-content-center col-3 text-truncate">
                        <?= $r['address']?>
                      </td>

                      <td class="align-middle justify-content-center col-3">
                        <?= $r['date_in_hospitalized']?>
                      </td>

                      <td class="align-middle justify-content-center col-2">
                        <?= $r['status']?>
                      </td>
                      
                      <td class="align-middle justify-content-center">
                        <div class="d-flex">
                            <form action="<?= base_url('/RawatInap/detail/'). $r['id']?>" method="get" class="d-inline mr-2">
                                <?= csrf_field();?>
                                <button type="submit" class="btn btn-primary btn-sm">Edit</button>
                            </form>
                            <div style="margin-right: 6px;"></div>
                            <form action="<?= base_url('/RawatInap/delete/'). $r['id']?>" method="post" class="d-inline">
                                <?= csrf_field();?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger text-white btn-sm" onclick="return confirm('Apakah anda yakin menghapus <?=$r['name']?>?');">
                                    Delete
                                </button>
                            </form>
                        </div>
                      </td>
                  </tr>
                  <?php endforeach ;?>

              </tbody>
          </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>
<?= $this->extend('layout/templates'); ?>
<?= $this->Section('content'); ?>
<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h4>List Ambulatoir</h4>
        </div>
        <a class="btn bg-primary mb-0 text-white m-5"  href='<?= base_url('/Ambulatoir/create');?>'>
          New Ambulatoir
        </a>
        <?php if (session()->getFlashdata('message')):?>
            <div class="alert alert-success alert-dismissible text-white fade show mx-5 mt-3" role="alert">
            <?= session()->getFlashdata('message'); ?>
            <button type="button" class="btn-close text-white" data-dismiss="alert" aria-label="Close"></button>
            </div>
          <?php endif;?>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0 m-5">
            <table id="ambulatoir" class="table row-border hover" style="width:100%">
            <thead>
                  <tr>
                      <th class="text-center">No</th>
                      <th>Date Checkup</th>
                      <th class="col-2">Pet Name</th>
                      <th class="col-2">Amnesa</th>
                      <th class="col-2">Status Finding</th>
                      <th class="col-2">Clinical Finding</th>
                      <th class="col-2">Medication</th>
                      <th class="text-center">Action</th>
                  </tr>
              </thead>
              
              <tbody>
                <?php $i = 1; ?>
                <?php foreach ($ambulatoir as $p): ?>
                  <tr>
                      <td class="text-center">
                        <?= $i++; ?>
                      </td>

                      <td>
                        <?= $p['date_checkup']?>
                      </td>
                      <td class="col-2 text-truncate">
                        <?= $p['name']?>
                      </td>

                      <td class="col-2 text-truncate">
                        <?= $p['amnesa']?>
                      </td>

                      <td class="col-2 text-truncate">
                        <?= $p['status_present']?>
                      </td>

                      <td class="col-2 text-truncate">
                        <?= $p['clinical_finding']?>
                      </td>

                      <td class="col-2 text-truncate">
                        <?= $p['medication']?>
                      </td>

                      <td class="align-middle justify-content-center">
                        <div class="d-flex">
                            <form action="<?= base_url('/Ambulatoir/detail/'). $p['id']?>" method="get" class="d-inline">
                                <?= csrf_field();?>
                                <button type="submit" class="btn btn-primary btn-sm">Edit</button>
                            </form>
                            <div style="margin-right: 6px;"></div>
                            <form action="<?= base_url('/PetList/delete/'). $p['id']?>" method="post" class="d-inline">
                                <?= csrf_field();?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger text-white btn-sm" onclick="return confirm('Apakah anda yakin menghapus <?=$p['name']?>?');">
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
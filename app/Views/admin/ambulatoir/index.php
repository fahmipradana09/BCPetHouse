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
                      <th>No</th>
                      <th>Date Checkup</th>
                      <th>Pet Name</th>
                      <th>Amnesa</th>
                      <th>Status Finding</th>
                      <th>Clinical Finding</th>
                      <th>Medication</th>
                      <th>Action</th>
                  </tr>
              </thead>
              
              <tbody>
                <?php $i = 1; ?>
                <?php foreach ($ambulatoir as $p): ?>
                  <tr>
                      <td><?= $i++; ?></td>
                      <td><?= $p['date_checkup']?></td>
                      <td><?= $p['pet_id']?></td>
                      <td><?= $p['amnesa']?></td>
                      <td><?= $p['status_present']?></td>
                      <td><?= $p['clinical_finding']?></td>
                      <td><?= $p['medication']?></td>
                      <td class="align-middle text-center">
                      <div class="d-grid gap-2 d-md-block">
                        <a class="btn btn-primary btn-sm" href='<?= base_url('/PetList/detail/'). $p['id']?>'>
                        Edit
                        </a>
                        <form action="<?= base_url('/PetList/delete/'). $p['id']?>" method="post" class="d-inline">
                          <?= csrf_field();?>
                          <input type="hidden" name="_method" value="DELETE">
                          <button type="submit" class="btn btn-danger text-white btn-sm" onclick="return confirm('Apakah anda yakin menghapus <?=$p['pet_id']?>?');">
                            Delete
                          </button>
                        </form>
                        
                      </div>
                    </td>
                  </tr>
                  <?php endforeach ;?>

              </tbody>

              <tfoot>
                  <tr>
                      <th>No</th>
                      <th>Date Checkup</th>
                      <th>Pet Name</th>
                      <th>Amnesa</th>
                      <th>Status Finding</th>
                      <th>Clinical Finding</th>
                      <th>Medication</th>
                      <th>Action</th>
                  </tr>
              </tfoot>
          </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalCreate" tabindex="-1"  data-bs-backdrop="static" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Create Position</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <!--Body-->
      <div class="modal-body">
        <form class="row">
            <div class="col-md-6 mt-3">
              <label for="inputOwnerName" class="form-label">Owner Name</label>
              <div class="input-group input-group-outline">
                  <input type="text" class="form-control" id="inputOwnerName" placeholder="Type Here....">
              </div>
            </div>

            <div class="col-md-6 mt-3">
              <label for="inputPetName" class="form-label text-truncate">Pet Name</label>
              <div class="input-group input-group-outline">
                  <input type="text" class="form-control" id="inputPetName" placeholder="Type Here....">
              </div>
            </div>

            <div class="col-md-12 mt-3">
              <label for="inputAddress" class="form-label text-truncate">Address</label>
              <div class="input-group input-group-outline">
                <textarea class="form-control" id="inputAddress" rows="3"></textarea>
              </div>
            </div>

            <div class="col-md-6 mt-3">
              <label for="inputPetName" class="form-label text-truncate">Pet Name</label>
              <div class="input-group input-group-outline">
                  <input type="text" class="form-control" id="inputPetName" placeholder="Type Here....">
              </div>
            </div>

        </form>
      </div>
      <!--end Body-->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Create</button>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>
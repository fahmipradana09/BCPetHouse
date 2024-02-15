<?= $this->extend('layout/templates'); ?>
<?= $this->Section('content'); ?>
<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h4>Pet List</h4>
        </div>
        <?php if (session()->getFlashdata('message')):?>
            <div class="alert alert-success alert-dismissible text-white fade show mx-5 mt-3" role="alert">
            <?= session()->getFlashdata('message'); ?>
            <button type="button" class="btn-close text-white" data-dismiss="alert" aria-label="Close"></button>
            </div>
          <?php endif;?>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0 m-5">
            <table id="petlist" class="table display compact" style="width:100%">
              <thead>
                  <tr>
                      <th>No</th>
                      <th>Pet Name</th>
                      <th>Owner Name</th>
                      <th>Address</th>
                      <th>Phone Number</th>
                      <th>Pet Gender</th>
                      <th>Color</th>
                      <th>Race</th>
                      <th class="text-center">Action</th>
                  </tr>
              </thead>
              
              <tbody>
                <?php $i = 1; ?>
                <?php foreach ($pet as $p): ?>
                  <tr class="clickable-row" data-href="<?= base_url('/PetList/detail/') . $p['id'] ?>" data-flag="edit">
                      <td class="align-middle justify-content-center text-center">
                        <?= $i++; ?>
                      </td>

                      <td class="align-middle justify-content-center col-2">
                        <?= $p['name']?>
                      </td>

                      <td class="align-middle justify-content-center col-2">
                        <?= $p['owner_name']?>
                      </td>

                      <td class="align-middle justify-content-center col-3 text-truncate">
                        <?= $p['address']?>
                      </td>

                      <td class="align-middle justify-content-center col-2">
                        <?= $p['phone']?>
                      </td>

                      <td class="align-middle justify-content-center col-2">
                        <?= $p['gender']?>
                      </td>

                      <td class="align-middle justify-content-center col-2">
                        <?= $p['color']?>
                      </td>
                      
                      <td class="align-middle justify-content-center col-2">
                        <?= $p['race']?>
                      </td>
                      
                      <td class="align-middle justify-content-center">
                        <div class="d-flex">
                            <form action="<?= base_url('/PetList/detail/'). $p['id']?>" method="get" class="d-inline mr-2">
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
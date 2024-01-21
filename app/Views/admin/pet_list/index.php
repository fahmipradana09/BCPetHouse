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
            <table id="rawatinap" class="table row-border hover" style="width:100%">
              <thead>
                  <tr>
                      <th>No</th>
                      <th>Pet Name</th>
                      <th>Owner Name</th>
                      <th>Address</th>
                      <th>Phone Number</th>
                      <th>Pet Gender</th>
                      <th>Fur Color</th>
                      <th>Race</th>
                      <th>Action</th>
                  </tr>
              </thead>
              
              <tbody>
                <?php $i = 1; ?>
                <?php foreach ($pet as $p): ?>
                  <tr>
                      <td><?= $i++; ?></td>
                      <td><?= $p['name']?></td>
                      <td><?= $p['owner_name']?></td>
                      <td><?= $p['address']?></td>
                      <td><?= $p['phone']?></td>
                      <td><?= $p['gender']?></td>
                      <td><?= $p['fur_color']?></td>
                      <td><?= $p['race']?></td>
                      <td class="align-middle text-center">
                      <div class="d-grid gap-2 d-md-block">
                        <a class="btn btn-primary btn-sm" href='<?= base_url('/PetList/detail/'). $p['id']?>'>
                        Edit
                        </a>
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

              <tfoot>
                  <tr>
                      <th>No  </th>
                      <th>Pet Name</th>
                      <th>Owner Name</th>
                      <th>Address</th>
                      <th>Phone Number</th>
                      <th>Pet Gender</th>
                      <th>Fur Color</th>
                      <th>Race</th>
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
<?= $this->endSection(); ?>
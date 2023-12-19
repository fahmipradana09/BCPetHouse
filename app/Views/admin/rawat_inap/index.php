<?= $this->extend('layout/templates'); ?>
<?= $this->Section('content'); ?>
<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h4>Pasien Rawat Inap</h4>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0 m-5">
            <table id="rawatinap" class="table row-border hover" style="width:100%">
              <thead>
                  <tr>
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
                  <tr>
                      <td>Tiger Nixon</td>
                      <td>System Architect</td>
                      <td>Edinburgh</td>
                      <td>61</td>
                      <td>2011-04-25</td>
                      <td>$320,800</td>
                      <td>$320,800</td>
                      <td class="align-middle text-center">
                        <button type="button" class="btn btn-danger text-white btn-sm" href="#">
                        Delete
                        </button>
                    </td>
                  </tr>
              </tbody>
              <tfoot>
                  <tr>
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
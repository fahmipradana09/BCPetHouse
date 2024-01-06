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
                  <tr>
                      <td>Garrett Winters</td>
                      <td>Accountant</td>
                      <td>Tokyo</td>
                      <td>63</td>
                      <td>2011-07-25</td>
                      <td>$170,750</td>
                      <td>$320,800</td>
                      <td class="align-middle text-center">
                        <button type="button" class="btn btn-danger text-white btn-sm" href="#">
                        Delete
                        </button>
                    </td>
                      
                  </tr>
                  <tr>
                      <td>Ashton Cox</td>
                      <td>Junior Technical Author</td>
                      <td>San Francisco</td>
                      <td>66</td>
                      <td>2009-01-12</td>
                      <td>$86,000</td>
                      <td>$320,800</td>
                      <td class="align-middle text-center">
                        <button type="button" class="btn btn-danger text-white btn-sm" href="#">
                        Delete
                        </button>
                    </td>

                  </tr>
                  <tr>
                      <td>Cedric Kelly</td>
                      <td>Senior Javascript Developer</td>
                      <td>Edinburgh</td>
                      <td>22</td>
                      <td>2012-03-29</td>
                      <td>$433,060</td>
                      <td>$320,800</td>
                      <td class="align-middle text-center">
                        <button type="button" class="btn btn-danger text-white btn-sm" href="#">
                        Delete
                        </button>
                    </td>
                  </tr>
                  <tr>
                      <td>Airi Satou</td>
                      <td>Accountant</td>
                      <td>Tokyo</td>
                      <td>33</td>
                      <td>2008-11-28</td>
                      <td>$162,700</td>
                      <td>$320,800</td>
                      <td class="align-middle text-center">
                        <button type="button" class="btn btn-danger text-white btn-sm" href="#">
                        Delete
                        </button>
                    </td>
                  </tr>
                  <tr>
                      <td>Brielle Williamson</td>
                      <td>Integration Specialist</td>
                      <td>New York</td>
                      <td>61</td>
                      <td>2012-12-02</td>
                      <td>$372,000</td>
                      <td>$320,800</td>
                      <td class="align-middle text-center">
                        <button type="button" class="btn btn-danger text-white btn-sm" href="#">
                        Delete
                        </button>
                    </td>
                  </tr>
                  <tr>
                      <td>Herrod Chandler</td>
                      <td>Sales Assistant</td>
                      <td>San Francisco</td>
                      <td>59</td>
                      <td>2012-08-06</td>
                      <td>$137,500</td>
                      <td>$320,800</td>
                      <td class="align-middle text-center">
                        <button type="button" class="btn btn-danger text-white btn-sm" href="#">
                        Delete
                        </button>
                    </td>
                  </tr>
                  <tr>
                      <td>Rhona Davidson</td>
                      <td>Integration Specialist</td>
                      <td>Tokyo</td>
                      <td>55</td>
                      <td>2010-10-14</td>
                      <td>$327,900</td>
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
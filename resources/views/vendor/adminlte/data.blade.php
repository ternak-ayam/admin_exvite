
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header bg-success">
                <h3 class="card-title">Last Orders</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Order Name</th>
                    <th>Orders Type</th>
                    <th>Date</th>
                    <th>Payment</th>
                    <th>Price</th>
                    <th>Status</th>
                    <th width="30">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($orders as $o)
                  <tr>
                    <td>{{ $o->order_name }}</td>
                    <td>{{ $o->order_type }}</td>
                    <td>{{ date('M j', strtotime($o->created_at)) }}</td>
                    <td>{{ $o->payment_type }}</td>
                    <td>IDR {{ number_format($o->order_price, 2) }}</td>
                    <td>
                      @if($o->status == 'success')
                        <span class="badge badge-pill badge-success">{{ $o->status }}</span>
                      @elseif($o->status == 'pending')
                        <span class="badge badge-pill badge-warning">{{ $o->status }}</span>
                      @elseif($o->status == 'canceled')
                        <span class="badge badge-pill badge-danger">{{ $o->status }}</span>
                      @endif
                    </td>
                    <td><span type="button" class="badge badge-success" data-toggle="modal" 
                    data-target="#exampleModal" data-whatever="{{ $o->id }}" data-name="{{ $o->order_name }}">
                      <i class="fa fa-eye"></i>
                    </span></td>
                  </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Name</th>
                    <th>Orders</th>
                    <th>Date</th>
                    <th>Payment</th>
                    <th>Price</th>
                    <th>Status</th>
                    <th width="30">Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Order Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      </div>
    </div>
  </div>
</div>
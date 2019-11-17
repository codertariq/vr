@extends('layouts.app')
@section('css')
@parent
<link href="{{ asset('assets/css/components.min.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('content')
<div class="container mt-3 mb-3">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header header-elements-inline">
					<h5 class="card-title">Room Details</h5>

				</div>
				<div class="card-body">
					The <code>DataTables</code> is a highly flexible tool, based upon the foundations of progressive enhancement, and will add advanced interaction controls to any HTML table. DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function. Searching, ordering, paging etc goodness will be immediately added to the table, as shown in this example. <strong>Datatables support all available table styling.</strong>
				</div>
				<table class="table datatable-basic">
					<thead>
						<tr>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Job Title</th>
							<th>DOB</th>
							<th>Status</th>
							<th class="text-center">Actions</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Marth</td>
							<td><a href="#">Enright</a></td>
							<td>Traffic Court Referee</td>
							<td>22 Jun 1972</td>
							<td><span class="badge badge-success">Active</span></td>
							<td class="text-center">
								<div class="list-icons">
									<div class="dropdown">
										<a href="#" class="list-icons-item" data-toggle="dropdown">
											<i class="icon-menu9"></i>
										</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
											<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
											<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
										</div>
									</div>
								</div>
							</td>
						</tr>

					</tbody>
				</table>
			</div>
		</div>
	</div>
	<!-- Basic datatable -->
	<!-- /basic datatable -->
</div>
@endsection

@push('js')

	<!-- Theme JS files -->
	<script src="{{ asset('/global_assets/js/plugins/tables/datatables/datatables.min.js') }}"></script>
	<script src="{{ asset('/global_assets/js/plugins/forms/selects/select2.min.js') }}"></script>
	<script src="{{ asset('/js/page/room.js') }}"></script>
@endpush
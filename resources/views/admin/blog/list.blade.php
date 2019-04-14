@extends('layouts.app')
@section('content')

<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
		<div class="col-lg-12">
			{{ csrf_field() }}
			<div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Blog List</h5>
                        <div class="ibox-tools">
                        	<a href="{{ route('add-blog') }}" class="btn btn-primary dim" ><i class="fa fa-plus"> Add</i></a>
                        </div>
                    </div>
                    <div class="ibox-content">
                    	<div class="table-responsive">
                    		<table class="table table-striped table-bordered table-hover blog-list" id="blog-list">
                    			<thead>
                    				<tr>
                    					<th>#id</th>
                    					<th>Title</th>
                    					<th>Description</th>
                    					<th>Status</th>
                                        <th>Date</th>
                    					<th>Action</th>
                    				</tr>
                    			</thead>
                    			<tbody>
                    			</tbody>
                    		</table>
                    	</div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    <script type="text/javascript">

    </script>
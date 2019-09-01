@extends('includes.theme')




@section('content')


<div id="content-wrapper">

	<div class="container-fluid">
  <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Project Member</h2>
                                    {{-- <button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>add item</button> --}}
                                </div>
                            </div>
                        </div>
		<!-- Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="#">Creat</a>
			</li>
			<li class="breadcrumb-item active">Project Member</li>
		</ol>

		
	</div>
</div>



{{-- ??????????????????????????????????????????????????????????????????????????????? --}}

<form action="{{url('project_member')}}" method="post" novalidate="novalidate">
	@csrf
		<div class="row form-group">

                    		<div class="col-12 col-md-12">
                    			<label class="control-label mb-1">Project Id</label>
                    			<select name="project_id" id="select" class="form-control">
                    				<option value="select">Select</option>
                    				@foreach($pr as $p)
                    				<option value="{{$p->project_id}}">{{$p->project_id}}</option>
                    				@endforeach
                    			</select>
                    		</div>
                    	</div>
		<div class="row form-group">

                    		<div class="col-12 col-md-12">
                    			<label class="control-label mb-1">Module Id</label>
                    			<select name="module_id" id="select" class="form-control">
                    				<option value="select">Select</option>
                    				@foreach($pm as $m)
                    				<option value="{{$m->module_id}}">{{$m->module_id}}</option>
                    				@endforeach
                    			</select>
                    		</div>
                    	</div>
		<div class="row form-group">

                    		<div class="col-12 col-md-12">
                    			<label class="control-label mb-1">Member Id</label>
                    			<select name="member_id" id="select" class="form-control">
                    				<option value="select">Select</option>
                    				@foreach($mb as $c)
                    				<option value="{{$c->member_id}}">{{$c->member_id}}</option>
                    				@endforeach
                    			</select>
                    		</div>
                    	</div>
		<div class="row form-group">

                    		<div class="col-12 col-md-12">
                    			<label class="control-label mb-1">Member Name</label>
                    			<select name="member_name" id="select" class="form-control">
                    				<option value="select">Select</option>
                    				@foreach($mb as $c)
                    				<option value="{{$c->member_name}}">{{$c->member_name}}</option>
                    				@endforeach
                    			</select>
                    		</div>
                    	</div>
	<div class="form-group">
		<label class="control-label mb-1">Member Type</label>
		<input id="" name="member_type" type="text" class="form-control"  value="">
	</div>
	<div class="form-group">
		<label class="control-label mb-1">Message</label>
		<input id="" name="message" type="text" class="form-control"  value="">
	</div>
	
	
	<div>
		<button type="submit" class="btn btn-lg btn-info btn-block">
			<i class="fa fa-box fa-lg"></i>&nbsp;
			
		</button>
	</div>
</form>


{{-- ????????????????????????????????????????????????????????????????????????????? --}}




</div>

</div>




@endsection()
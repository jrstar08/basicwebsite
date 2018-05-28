@extends('layouts.app')

@section('content')
<h2>Zafirah Solutions</h2>
<h4>Liquidation Report</h4>

{!! Form::open(['url' => 'schedule/submit']) !!}
<div class="form-group">
    {{FORM::label('name', 'Name')}}
    {{FORM::text('name', '', ['class'=> 'form-control','style'=>'width:200px;', 'placeholder'=> 'Enter Name'])}}
</div>

<div class="form group">
{{FORM::label('date', 'Date')}}
 {{FORM::date('date', '', ['class'=> 'form-control','style'=>'width:200px; margin-bottom:10px;'])}}
</div>

<div class="table100 ver1">
					<table data-vertable="ver1" id="editable" class="pure-table pure-table-bordered">
						<thead>
							<tr class="row100 head" style="align-content:center;">
								<th class="column100 column2" data-column="column2">ESTABLISHMENT VISITED</th>
								<th class="column100 column3" data-column="column3">PURSOSE</th>
								<th class="column100 column4" data-column="column4">EXPENSE</th>
								
							</tr>
						</thead>
						<tbody>
							<tr class="row100">
								<td class="column100 column2" data-column="column2"></td>
								<td class="column100 column3" data-column="column3"></td>
								<td class="column100 column4" data-column="column4"></td>
							</tr>

							<tr class="row100">
							    <td class="column100 column2" data-column="column2"></td>
								<td class="column100 column3" data-column="column3"></td>
								<td class="column100 column4" data-column="column4"></td>
							</tr>

							<tr class="row100">
							    <td class="column100 column2"  data-column="column2"></td>
								<td class="column100 column3"  data-column="column3"></td>
								<td class="column100 column4"  data-column="column4"></td>
							</tr>

							<tr class="row100">
							<td class="column100 column2" data-column="column2"></td>
								<td class="column100 column3" data-column="column3"></td>
								<td class="column100 column4" data-column="column4"></td>
							</tr>

							<tr class="row100">
								<td class="column100 column2" data-column="column2"></td>
								<td class="column100 column3" data-column="column3"></td>
								<td class="column100 column4" data-column="column4"></td>
							</tr>
						</tbody>
					</table>
				</div>
				<button class="btn btn-primary" style="margin-top:10px">Print</button>

<!--<table id="editable" class="pure-table pure-table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Make</th>
            <th>Model</th>
            <th>Year</th>
        </tr>
    </thead>
     <tbody>
         <tr>
             <td>1</td>
             <td>Honda</td>
             <td>Accord</td>
             <td>2009</td>
         </tr>
         <tr>
             <td>2</td>
             <td>Toyota</td>
             <td>Camry</td>
             <td>2012</td>
         </tr>
         <tr>
             <td>3</td>
             <td>Hyundai</td>
             <td>Elantra</td>
             <td>2010</td>
         </tr>
    </tbody>
</table>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script> 
<script src="js/mindmup-editable.js"></script>

<script>
    $('#editable').editableTableWidget();
</script>
@endsection
@extends('layouts.app')

@section('content')
<style>
#venue, #venue:focus{
    border:transparent;
}

</style>
<h2>Captivate Solutions</h2>
<h4>Liquidation Report</h4>

{!! Form::open(['url' => 'schedule/submit']) !!}
<div class="form-group">
    {{FORM::label('name', 'Name')}}
    {{FORM::text('name', '', ['class'=> 'form-control','style'=>'width:200px;', 'placeholder'=> 'Enter Name'])}}
</div>

<div class="form group">
{{FORM::label('date', 'Date')}}
 {{FORM::date('date', '', ['class'=> 'form-control','style'=>'width:200px; margin-bottom:20px;'])}}
</div>

<div class="table100 ver1">
					<table data-vertable="ver1">
						<thead>
							<tr class="row100 head">
								<th class="column100 column2" data-column="column2">ESTABLISHMENT VISITED</th>
								<th class="column100 column3" data-column="column3">PURSOSE</th>
								<th class="column100 column4" data-column="column4">EXPENSE</th>
								
							</tr>
						</thead>
						<tbody>
							<tr class="row100">
								<td class="column100 column2" data-column="column2"><input type="text" name="venue" id="venue"></td>
								<td class="column100 column3" data-column="column3"><input type="text" name="venue" id="venue"></td>
								<td class="column100 column4" data-column="column4"><input type="text" name="venue" id="venue"></td>
							</tr>

							<tr class="row100">
							    <td class="column100 column2" data-column="column2"><input type="text" name="venue" id="venue"></td>
								<td class="column100 column3" data-column="column3"><input type="text" name="venue" id="venue"></td>
								<td class="column100 column4" data-column="column4"><input type="text" name="venue" id="venue"></td>
							</tr>

							<tr class="row100">
							    <td class="column100 column2"  data-column="column2"><input type="text" name="venue" id="venue"></td>
								<td class="column100 column3"  data-column="column3"><input type="text" name="venue" id="venue"></td>
								<td class="column100 column4"  data-column="column4"><input type="text" name="venue" id="venue"></td>
							</tr>

							<tr class="row100">
							<td class="column100 column2" data-column="column2"><input type="text" name="venue" id="venue"></td>
								<td class="column100 column3" data-column="column3"><input type="text" name="venue" id="venue"></td>
								<td class="column100 column4" data-column="column4"><input type="text" name="venue" id="venue"></td>
							</tr>

							<tr class="row100">
								<td class="column100 column2" data-column="column2"><input type="text" name="venue" id="venue"></td>
								<td class="column100 column3" data-column="column3"><input type="text" name="venue" id="venue"></td>
								<td class="column100 column4" data-column="column4"><input type="text" name="venue" id="venue"></td>
							</tr>
						</tbody>
					</table>
				</div>

@endsection
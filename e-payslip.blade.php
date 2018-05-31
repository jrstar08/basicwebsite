@extends ('layouts.app')


<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<div class="container">
    <div class="table100 ver1" style="margin-top: 100px;">
        <table data-vertable="ver1">
                <thead>
                <tr class="header">
                    <div id="company">ZAFIRA PHILIPPINES</div>
                    <div id="payslip">PAYSLIP</div>
                </tr>
                </thead>
                <tr class="column100">
                    <td class="column100 column1" data-column="column1" >
                        <strong>Name :
                    </td>
                    <td class="column100 column1" data-column="column1">
                        Juan dela Cruz
                    </td>
                    <td class="column100 column1" data-column="column1">
                        <strong>Date :
                    </td>
                    <td class="column100 column1" data-column="column1">
                        February 16, 2018
                    </td>
                </tr>

                <tr class="column100">
                    <td class="column100 column1" data-column="column1">
                        <strong>Salary for the period of :
                    </td>
                    <td class="column100 column1" data-column="column1">
                        February 15, 2018
                    </td>
                    <td class="column100 column1" data-column="column1">
                        <strong>Amount :
                    </td>
                    <td class="column100 column1" data-column="column1">
                        Php 100,000.00
                    </td>
                </tr>

                <tr class="column100">
                    <td colspan="4" class="column100 column1" data-column="column1">
                    <strong>Net Pay :</strong>  Php 100,000.00
                    </td>
                </tr>
        </table>
    </div>
</div>
<style>
table {
  font-family: "sans-serif";
  border-collapse: collapse;
}

td, th {
  padding: 5px;
}

td{
cursor: pointer;
}

*//////////////////////////////////////////////////////////////////
[ Table ]*/

* {
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
}

.limiter {
  width: 100%;
  margin: 0 auto;
}

.container-table100 {
  width: 100%;
  min-height: 100vh;
  background: #e6e6ff;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
  padding: 33px 30px;
}

.wrap-table100 {
    width: 1300px;
}
/*//////////////////////////////////////////////////////////////////
[ Table ]*/
table {
  width:50%;
  background-color: #e6e6ff;
  margin: auto;
}

th, td {
  font-weight: unset;
  padding-right: 10px;
}

.column100 {
  width: 30%;
  padding-left: 10px;
}

.column100.column1 {
  width: 25%;
  padding-top: 15px;
}


/*==================================================================
[ Ver1 ]*/
#company{
    background: #e6e6ff;
    color: #000033;
    width: 41.2em;
    padding: 10px;
    margin: auto;
    text-align: center;
    font-size: 18px;
    font-weight: 600;
    letter-spacing: 3;
    max-width: 1300px;
}

#payslip{
    background: #000033;
    color: #fff;
    width: 49.5em;
    padding: 5px;
    margin:auto;
    text-align: center;
    font-size: 15px;
    letter-spacing: 3;
    max-width: 1300px;
}

.table100 {
    width: 53em;
    margin: 0 auto;
}

.table100.ver1 td {
  font-size: 14px;
  color: #000;
  line-height: 1.4;
  border: #000033 1px solid;
}

/* .table100.ver1 th {
  font-size: 12px;
  color: #fff;
  line-height: 1.4;
  text-transform: uppercase;
  background-color: #061a41e3;
} */

.table100.ver1 .column100 td:hover {
  background-color:  #105ac250;
  color: #000;
}
</style>


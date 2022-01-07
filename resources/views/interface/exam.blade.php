@extends('interface.layout.master')
@section('content')
<div class="containerr mt-sm-5 my-1">
    <div class="questionn ml-sm-5 pl-sm-5 pt-2">
        <div class="py-2 h5">
            <b>Q. which option best describes your job role?</b>
        </div>
        <div class="ml-md-3 ml-sm-3 pl-md-5 pt-sm-0 pt-3" id="optionss"> 
            <label class="optionss">Small Business Owner or Employee 
                <input type="radio" name="radio"> <span class="checkmarkk"></span>
            </label>
            <label class="optionss">Nonprofit Owner or Employee 
                <input type="radio" name="radio"> <span class="checkmarkk"></span>
            </label> 
            <label class="optionss">Nonprofit Owner or Employee 
                <input type="radio" name="radio"> <span class="checkmarkk"></span>
            </label>
            <label class="optionss">Nonprofit Owner or Employee 
                <input type="radio" name="radio"> <span class="checkmarkk"></span>
            </label>
          
        </div>
    </div>
    <div class="d-flex align-items-center pt-3">
        <div class="ml-auto mr-sm-5"> 
            <button class="btn btn-success">Next</button>
         </div>
    </div>
</div>
@endsection
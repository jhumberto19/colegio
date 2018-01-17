<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Materia $materia
  */
?>


<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">
<div class="container">
    <h2>Checkboxes</h2>
    <form role="form">
        <div class="row">
            <div class="col-md-4">
                <fieldset>
                    <legend>
                        Basic
                    </legend>
                    <p>
                        Supports bootstrap brand colors: <code>.checkbox-primary</code>, <code>.checkbox-info</code> etc.
                    </p>
                    <div class="checkbox">
                        <input id="checkbox1" type="checkbox">
                        <label for="checkbox1">
                            Default
                        </label>
                    </div>
                    <div class="checkbox checkbox-primary">
                        <input id="checkbox2" type="checkbox" checked="">
                        <label for="checkbox2">
                            Primary
                        </label>
                    </div>
                    <div class="checkbox checkbox-success">
                        <input id="checkbox3" type="checkbox">
                        <label for="checkbox3">
                            Success
                        </label>
                    </div>
                    <div class="checkbox checkbox-info">
                        <input id="checkbox4" type="checkbox">
                        <label for="checkbox4">
                            Info
                        </label>
                    </div>
                    <div class="checkbox checkbox-warning">
                        <input id="checkbox5" type="checkbox" checked="">
                        <label for="checkbox5">
                            Warning
                        </label>
                    </div>
                    <div class="checkbox checkbox-danger">
                        <input id="checkbox6" type="checkbox" checked="">
                        <label for="checkbox6">
                            Check me out
                        </label>
                    </div>
          
          <!-- ----------------------------------------------- -->
          
                    <p><strong>Inline checkboxes</strong></p>
                    <div class="checkbox checkbox-inline checkbox-primary">
                        <input type="checkbox" id="inlineCheckbox1" value="option1">
                        <label for="inlineCheckbox1"> Inline One </label>
                    </div>
                    <div class="checkbox checkbox-success checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="option1" checked="">
                        <label for="inlineCheckbox2"> Inline Two </label>
                    </div>
                    <div class="checkbox checkbox-inline checkbox-danger">
                        <input type="checkbox" id="inlineCheckbox3" value="option1">
                        <label for="inlineCheckbox3"> Inline Three </label>
                    </div>
          <div class="checkbox checkbox-inline checkbox-info">
                        <input type="checkbox" id="inlineCheckbox4" value="option1">
                        <label for="inlineCheckbox4"> Inline Three </label>
                    </div>
          
          
          <!-- ----------------------------------------------------- -->
                </fieldset>
            </div>
            <div class="col-md-4">
                <fieldset>
                    <legend>
                        Circled
                    </legend>
                    <p>
                        <code>.checkbox-circle</code> for roundness.
                    </p>
                    <div class="checkbox checkbox-circle">
                        <input id="checkbox7" type="checkbox">
                        <label for="checkbox7">
                            Simply Rounded
                        </label>
                    </div>
                    <div class="checkbox checkbox-info checkbox-circle">
                        <input id="checkbox8" type="checkbox" checked="">
                        <label for="checkbox8">
                            Me too
                        </label>
                    </div>
                </fieldset>
            </div>
            <div class="col-md-4">
                <fieldset>
                    <legend>
                        Disabled
                    </legend>
                    <p>
                        Disabled state also supported.
                    </p>
                    <div class="checkbox">
                        <input id="checkbox9" type="checkbox" disabled="">
                        <label for="checkbox9">
                            Can't check this
                        </label>
                    </div>
                    <div class="checkbox checkbox-success">
                        <input id="checkbox10" type="checkbox" disabled="" checked="">
                        <label for="checkbox10">
                            This too
                        </label>
                    </div>
                    <div class="checkbox checkbox-warning checkbox-circle">
                        <input id="checkbox11" type="checkbox" disabled="" checked="">
                        <label for="checkbox11">
                            And this
                        </label>
                    </div>
                </fieldset>
            </div>
        </div>
    </form>
    <h2>Radios</h2>
    <form role="form">
        <div class="row">
            <div class="col-md-4">
                <fieldset>
                    <legend>
                        Basic
                    </legend>
                    <p>
                        Supports bootstrap brand colors: <code>.radio-primary</code>, <code>.radio-danger</code> etc.
                    </p>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="radio">
                                <input type="radio" name="radio1" id="radio1" value="option1" checked="">
                                <label for="radio1">
                                    Small
                                </label>
                            </div>
                            <div class="radio">
                                <input type="radio" name="radio1" id="radio2" value="option2">
                                <label for="radio2">
                                    Big
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="radio radio-danger">
                                <input type="radio" name="radio2" id="radio3" value="option1">
                                <label for="radio3">
                                    Next
                                </label>
                            </div>
                            <div class="radio radio-danger">
                                <input type="radio" name="radio2" id="radio4" value="option2" checked="">
                                <label for="radio4">
                                    One
                                </label>
                            </div>
                        </div>
                    </div>
                    <p>Inline radios</p>
                    <div class="radio radio-info radio-inline">
                        <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked="">
                        <label for="inlineRadio1"> Inline One </label>
                    </div>
                    <div class="radio radio-inline">
                        <input type="radio" id="inlineRadio2" value="option1" name="radioInline">
                        <label for="inlineRadio2"> Inline Two </label>
                    </div>
                </fieldset>
            </div>
            <div class="col-md-4">
                <fieldset>
                    <legend>
                        Disabled
                    </legend>
                    <p>
                        Disabled state also supported.
                    </p>
                    <div class="radio radio-danger">
                        <input type="radio" name="radio3" id="radio5" value="option1" disabled="">
                        <label for="radio5">
                            Next
                        </label>
                    </div>
                    <div class="radio">
                        <input type="radio" name="radio3" id="radio6" value="option2" checked="" disabled="">
                        <label for="radio6">
                            One
                        </label>
                    </div>
                </fieldset>
            </div>
        </div>
    </form>
</div>

<style type="text/css">
  .checkbox {
  padding-left: 20px; }
  .checkbox label {
    display: inline-block;
    position: relative;
    padding-left: 5px; }
    .checkbox label::before {
      content: "";
      display: inline-block;
      position: absolute;
      width: 17px;
      height: 17px;
      left: 0;
      margin-left: -20px;
      border: 1px solid #cccccc;
      border-radius: 3px;
      background-color: #fff;
      -webkit-transition: border 0.15s ease-in-out, color 0.15s ease-in-out;
      -o-transition: border 0.15s ease-in-out, color 0.15s ease-in-out;
      transition: border 0.15s ease-in-out, color 0.15s ease-in-out; }
    .checkbox label::after {
      display: inline-block;
      position: absolute;
      width: 16px;
      height: 16px;
      left: 0;
      top: 0;
      margin-left: -20px;
      padding-left: 3px;
      padding-top: 1px;
      font-size: 11px;
      color: #555555; }
  .checkbox input[type="checkbox"] {
    opacity: 0; }
    .checkbox input[type="checkbox"]:focus + label::before {
      outline: thin dotted;
      outline: 5px auto -webkit-focus-ring-color;
      outline-offset: -2px; }
    .checkbox input[type="checkbox"]:checked + label::after {
      font-family: 'FontAwesome';
      content: "\f00c"; }
    .checkbox input[type="checkbox"]:disabled + label {
      opacity: 0.65; }
      .checkbox input[type="checkbox"]:disabled + label::before {
        background-color: #eeeeee;
        cursor: not-allowed; }
  .checkbox.checkbox-circle label::before {
    border-radius: 50%; }
  .checkbox.checkbox-inline {
    margin-top: 0; }

.checkbox-primary input[type="checkbox"]:checked + label::before {
  background-color: #428bca;
  border-color: #428bca; }
.checkbox-primary input[type="checkbox"]:checked + label::after {
  color: #fff; }

.checkbox-danger input[type="checkbox"]:checked + label::before {
  background-color: #d9534f;
  border-color: #d9534f; }
.checkbox-danger input[type="checkbox"]:checked + label::after {
  color: #fff; }

.checkbox-info input[type="checkbox"]:checked + label::before {
  background-color: #5bc0de;
  border-color: #5bc0de; }
.checkbox-info input[type="checkbox"]:checked + label::after {
  color: #fff; }

.checkbox-warning input[type="checkbox"]:checked + label::before {
  background-color: #f0ad4e;
  border-color: #f0ad4e; }
.checkbox-warning input[type="checkbox"]:checked + label::after {
  color: #fff; }

.checkbox-success input[type="checkbox"]:checked + label::before {
  background-color: #5cb85c;
  border-color: #5cb85c; }
.checkbox-success input[type="checkbox"]:checked + label::after {
  color: #fff; }

.radio {
  padding-left: 20px; }
  .radio label {
    display: inline-block;
    position: relative;
    padding-left: 5px; }
    .radio label::before {
      content: "";
      display: inline-block;
      position: absolute;
      width: 17px;
      height: 17px;
      left: 0;
      margin-left: -20px;
      border: 1px solid #cccccc;
      border-radius: 50%;
      background-color: #fff;
      -webkit-transition: border 0.15s ease-in-out;
      -o-transition: border 0.15s ease-in-out;
      transition: border 0.15s ease-in-out; }
    .radio label::after {
      display: inline-block;
      position: absolute;
      content: " ";
      width: 11px;
      height: 11px;
      left: 3px;
      top: 3px;
      margin-left: -20px;
      border-radius: 50%;
      background-color: #555555;
      -webkit-transform: scale(0, 0);
      -ms-transform: scale(0, 0);
      -o-transform: scale(0, 0);
      transform: scale(0, 0);
      -webkit-transition: -webkit-transform 0.1s cubic-bezier(0.8, -0.33, 0.2, 1.33);
      -moz-transition: -moz-transform 0.1s cubic-bezier(0.8, -0.33, 0.2, 1.33);
      -o-transition: -o-transform 0.1s cubic-bezier(0.8, -0.33, 0.2, 1.33);
      transition: transform 0.1s cubic-bezier(0.8, -0.33, 0.2, 1.33); }
  .radio input[type="radio"] {
    opacity: 0; }
    .radio input[type="radio"]:focus + label::before {
      outline: thin dotted;
      outline: 5px auto -webkit-focus-ring-color;
      outline-offset: -2px; }
    .radio input[type="radio"]:checked + label::after {
      -webkit-transform: scale(1, 1);
      -ms-transform: scale(1, 1);
      -o-transform: scale(1, 1);
      transform: scale(1, 1); }
    .radio input[type="radio"]:disabled + label {
      opacity: 0.65; }
      .radio input[type="radio"]:disabled + label::before {
        cursor: not-allowed; }
  .radio.radio-inline {
    margin-top: 0; }

.radio-primary input[type="radio"] + label::after {
  background-color: #428bca; }
.radio-primary input[type="radio"]:checked + label::before {
  border-color: #428bca; }
.radio-primary input[type="radio"]:checked + label::after {
  background-color: #428bca; }

.radio-danger input[type="radio"] + label::after {
  background-color: #d9534f; }
.radio-danger input[type="radio"]:checked + label::before {
  border-color: #d9534f; }
.radio-danger input[type="radio"]:checked + label::after {
  background-color: #d9534f; }

.radio-info input[type="radio"] + label::after {
  background-color: #5bc0de; }
.radio-info input[type="radio"]:checked + label::before {
  border-color: #5bc0de; }
.radio-info input[type="radio"]:checked + label::after {
  background-color: #5bc0de; }

.radio-warning input[type="radio"] + label::after {
  background-color: #f0ad4e; }
.radio-warning input[type="radio"]:checked + label::before {
  border-color: #f0ad4e; }
.radio-warning input[type="radio"]:checked + label::after {
  background-color: #f0ad4e; }

.radio-success input[type="radio"] + label::after {
  background-color: #5cb85c; }
.radio-success input[type="radio"]:checked + label::before {
  border-color: #5cb85c; }
.radio-success input[type="radio"]:checked + label::after {
  background-color: #5cb85c; }
</style>
<?php
# @Author: John Carlo M. Ramos
# @Date:   2019-09-25T12:27:16+01:00
# @Email:  !!!!!---CTRL + ALT + C = Colour Picker---!!!!!
# @Last modified by:   John Carlo M. Ramos
# @Last modified time: 2019-09-25T12:30:24+01:00




namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
  public function hello()
  {
    return view('hellohome');
  }
}

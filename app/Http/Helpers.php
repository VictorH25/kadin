<?php
namespace App\Helpers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
class Helper{
  public static function global_variables(){
    $internal_settings['name'] = DB::table('internal_settings')
    ->where('key','company_name')
    ->select('value')
    ->first();
    $internal_settings['logo'] = DB::table('internal_settings')
      ->where('key','logo')
      ->select('value')
      ->first();
    $internal_settings['monitor'] = DB::table('internal_settings')
      ->where('key','monitor')
      ->select('value')
      ->first();
    $internal_settings['desk'] = DB::table('internal_settings')
      ->where('key','desk')
      ->select('value')
      ->first();
    $internal_settings['number_of_tables'] = DB::table('internal_settings')
      ->where('key','number_of_tables')
      ->select('value')
      ->first();
    $internal_settings['monitor'] = DB::table('internal_settings')
      ->where('key','monitor')
      ->select('value')
      ->first();
    $internal_settings['logo_phi'] = DB::table('internal_settings')
      ->where('key','logo_phi')
      ->select('value')
      ->first();
    $keys = [];   
    View::share('keys', $keys);
    View::share('internal_settings', $internal_settings);       
  }
}


?>
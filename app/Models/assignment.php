<?php
namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Model;
 
class assignment extends Model {
   
   protected $table = 'assignment';
   
   public static function assignmentval($id) { 
     return DB::table('assignment')->select('nid', 'category')->where('category', '=', $id)->get();
     //return DB::select("SELECT 'title', 'nid' FROM assignment where category=". $id);
   }
   //protected $fillable = ['id','title', 'nid', 'weight', 'category', 'showhide'];
   
   //public static function assignmentData($cat){
     //echo "dsd";
     //$data = drupal_json_decode(file_get_contents("php://input"), TRUE);
     //$data = json_encode(file_get_contents("php://input"));
     //return DB::select("SELECT * FROM assignment where category=". $cat);
    //return $query->select('id','title', 'nid', 'weight', 'category', 'showhide')
     //             ->where('category', '=', $cat);
   //}
   
 
}
 
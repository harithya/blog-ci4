<?php 
namespace App\Models;
use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table      = 'mahasiswa';
    protected $primaryKey = 'id';

    public static function getAll()
    {
    	return "hello World";
    } 
}
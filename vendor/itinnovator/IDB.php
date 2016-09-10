<?php

namespace itinnovator;

use Illuminate\Database\Capsule\Manager as Capsule;

class IDB
{
    public $table_name;

    protected $table;

    public $db;

    public function __construct($table)
    {
        $this->table = $table;
        $this->Connect();
    }

    public function Connect()
    {
        $this->db = new Capsule;

        $this->db->addConnection(array(
            'driver'    => 'mysql',
            'host'      => Config::get('database.DB_SERVER'),
            'database'  => Config::get('database.DB'),
            'username'  => Config::get('database.DB_USER'),
            'password'  => Config::get('database.DB_PASSWORD'),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => ''
        ));

        $this->db->setAsGlobal();
        $this->db->bootEloquent();
    }

    public function ifColumnExists($column, $data)
    {
        $d = $this->db->table($this->table)->where($column, $data)->pluck($column);
        if ($d)
            return true;
        else
            return false;
    }

    /*
    | This function fetch bunch of particular column from database
    | i.e SELECT name FROM users
    */
    public function ExecuteS($data)
    {
        $d = $this->db->table($this->table)->where($data)->get();
        if ($d)
            return $d;
        else
            return false;
    }

    public function ExecutePaginate($data, $number)
    {
        $d = $this->db->table($this->table)->where($data)->paginate($number);
        if ($d)
            return $d;
        else
            return false;
    }

    public function ExecuteC($where, $column)
    {
        $d = $this->db->table($this->table)
        ->select($column)
        ->where($where)
        ->get();

        if ($d)
            return $d;
        else
            return false;
    }

    /*
    | This function fetch all data from users
    | i.e. SELECT * FROM users
    */
    public function getAll()
    {
        return $this->db->table($this->table)->get();
    }

    /*
    | This function fetch single row of matched valued
    | i.e SELECT * FROM users where id = "2"
    */
    public function getSingleRow($where)
    {
        return $this->db->table($this->table)->where($where)->first();
    }

    public function getVar($var, $where)
    {
        return $this->db->table($this->table)->select($var)->where($where)->first();
    }

    public function get_var($var, $where)
    {
        $data = $this->db->table($this->table)->select($var)->where($where)->first();
        if ($data)
            return $data->$var;
    }

    /*
    | This function insert defined Data
    */
    public function insert($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    /*
    | this function insert given data and respond inserted ID:
    */
    public function insertGetId($data)
    {
        return $this->db->table($this->table)->insertGetId($data);
    }

    public function InsertId($data)
    {
        return $this->db->table($this->table)->insertGetId($data);
    }

    public function deleteW($data)
    {
        return $this->db->table($this->table)->where($data)->delete();
    }

    /*
    | this function update given data and respond with updated id:
    */
    public function Updates($data, $id)
    {
        return $this->db->table($this->table)->where('id', $id)->update($data);
    }

    /*
    |
    */
    public function updateQ($data, $where)
    {
        return $this->db->table($this->table)->where($where)->update($data);
    }

    /*
    | this function will return all single column
    */
    public function getSingleColumn($column)
    {
        return $this->db->table($this->table)->pluck($column);
    }

    /*
    | this function will return values where is not equal data like id = 1 it will  not give 1 number of record
    */

    public function getUnmathingData($which, $value)
    {
        return $this->db->table($this->table)
                     ->where($which, '!=', $value)
                     ->get();
    }

    public function createTable($table, $columns)
    {
        return $this->db->schema()->create($table, function ($data) {
            $data->increments('id');
        });
    }
}

<?php

// CLASS MODEL
class model
{
    public $db;
    public $result;
    protected $tableName;
    public $tabelName = null;

    public function __construct($table)
    {
        $this->db = new database();
        // $this->result = new resultset();
        $this->tabelName = $table;

    }

    public function rows()
    {

        // return $this->tabelName;
        //return $this->db->getAll($this->tabelName)->numRows();

        return mysqli_num_rows($this->db->getAll($this->tabelName));
    }

    public function dataArray()
    {
        $data = array();
        $result = $this->db->getAll($this->tabelName);

        /**
                if($this->db->getAll($this->tabelName)) {
        **/
        while ($record = $result->fetch_assoc()) {
            // printf("%s (%s)\n", $record['judul'], $record['tanggal']);
            array_push($data, $record);
        }
        /**
                }
                **/
        //return mysqli_fetch_assoc($this->db->getAll($this->tabelName));

        return $data;
    }

    public function dataGetWhere($where = array())
    {

        $data = array();
        $result = $this->db->getWhere($this->tabelName, $where);


        while ($record = $result->fetch_assoc()) {
            // printf("%s (%s)\n", $record['judul'], $record['tanggal']);
            array_push($data, $record);
        }
        //var_dump($data);
        return $data;

    }
}
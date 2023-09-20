<?php 

namespace SQL;
use SQL\ConnectDB;
use PDOException;

class QueryBuilder extends ConnectDB {
    protected $table;
    protected $select = [];
    protected $where = [];
    protected $orderBy = [];
    protected $limit; 
    protected $unionQueries = []; 

    public function setTable($table) {
        $this->table = $table;
        return $this;
    }

    public function all() {
        $this->select('*');
        return $this;  
    }

    public function select($columns) {
        $this->select = is_array($columns) ? $columns : func_get_args();
        return $this;
    }

    public function where($conditions, $operator = 'AND') {
        $conditionsClause = '';
        $conditionStrings = [];
        
        foreach ($conditions as $condition) {
            $column = $condition[0];
            $operator = $condition[1];
            $value = $condition[2];
            $conditionStrings[] = "{$column} {$operator} '{$value}'";
        }
    
        if (!empty($conditionStrings)) {
            $conditionsClause = implode(" {$operator} ", $conditionStrings);
            $conditionsClause = "WHERE {$conditionsClause}";
        } 
        return $this;
    }

    public function orderBy($column, $direction = 'asc') {
        $this->orderBy[] = compact('column', 'direction');
        return $this;
    }

    public function limit($limit) {
        $this->limit = $limit;
        return $this;
    }

    public function join($table, $column1, $operator, $column2) {
        $join = " JOIN $table ON $column1 $operator $column2";
        $this->table .= $join; // Append the join to the existing table
        
        return $this;
    }

    public function union(QueryBuilder $queryBuilder) {
        $this->unionQueries[] = $queryBuilder;
        return $this;
    }

    public function query($sql, $params = []) {
        try {
            $statement = ConnectDB::$conn->prepare($sql);
            $statement->execute($params);

            return $statement->fetchAll();
        } catch (PDOException $e) {
            echo "Query Execution Error: " . $e->getMessage();
            return [];
        }
    }

    public function build() {
        $query = "SELECT " . implode(', ', $this->select) . " FROM " . $this->table;

        if (!empty($this->where)) {
            $query .= " WHERE ";
            $conditions = [];

            foreach ($this->where as $condition) {
                $conditions[] = "{$condition['column']} {$condition['operator']} '{$condition['value']}'";
            }

            $query .= implode(' AND ', $conditions);
        }

        if (!empty($this->orderBy)) {
            $query .= " ORDER BY ";
            $orderClauses = [];

            foreach ($this->orderBy as $orderBy) {
                $orderClauses[] = "{$orderBy['column']} {$orderBy['direction']}";
            }

            $query .= implode(', ', $orderClauses);
        }

        if ($this->limit) {
            $query .= " LIMIT {$this->limit}";
        }

        if ($this->unionQueries) { 
            foreach ($this->unionQueries as $unionQuery) {
                $query .= " UNION " . $unionQuery->build();
            }
        }

        return $query;
    }

    public function execute() {
        $query = $this->build();
        
        try {
            $statement = ConnectDB::$conn->prepare($query);
            $statement->execute();

            return $statement->fetchAll();
        } catch (PDOException $e) {
            echo "Query Execution Error: " . $e->getMessage();
            return [];
        }
    }
}  
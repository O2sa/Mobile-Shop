 <?php
    //use to fetch product data
    class Product
    {
        public $db = null;
        public function __construct(DBController $db)
        {
            if (!isset($db->conn)) return null;
            $this->db = $db;
        }
        public function getData($table = 'product')
        {
            $result = $this->db->conn->query(query: "SELECT * FROM {$table}");
            $resultArr = array();
            while ($item = mysqli_fetch_array($result, mode: MYSQLI_ASSOC)) {
                $resultArr[] = $item;
            }

            return $resultArr;
        }
        // get product using item id
        public function getProduct($item_id = null, $table = 'product')
        {
            if (isset($item_id)) {
                $result = $this->db->conn->query("SELECT * FROM {$table} WHERE item_id={$item_id}");

                $resultArray = array();

                // fetch product data one by one
                while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    $resultArray[] = $item;
                }
                return $resultArray;
            }
        }
    }


    ?>
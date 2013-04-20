<?php
/*
	This SQL query will create the table to store your object.

	CREATE TABLE `lends_user` (
	`lends_userid` int(11) NOT NULL auto_increment,
	`wp_user` bigint(20) NOT NULL,
	`idclientip` VARCHAR(255) NOT NULL,
	`idcountry` VARCHAR(255) NOT NULL,
	`idscanstatus` VARCHAR(255) NOT NULL,
	`idtype` VARCHAR(255) NOT NULL,
	`jumioidscanreference` VARCHAR(255) NOT NULL,
	`merchantidscanreference` VARCHAR(255) NOT NULL,
	`verificationstatus` VARCHAR(255) NOT NULL,
	`customerid` VARCHAR(255) NOT NULL,
	`idfirstname` VARCHAR(255) NOT NULL,
	`idlastname` VARCHAR(255) NOT NULL,
	`iddob` VARCHAR(255) NOT NULL,
	`idexpiry` VARCHAR(255) NOT NULL,
	`idnumber` VARCHAR(255) NOT NULL,
	`idscanimage` VARCHAR(255) NOT NULL,
	`idscanimagebackside` VARCHAR(255) NOT NULL,
	`stripe_token` VARCHAR(255) NOT NULL, PRIMARY KEY (`lends_userid`)) ENGINE=MyISAM;
*/

/**
 * <b>lends_user</b> class with integrated CRUD methods.
 * @author Php Object Generator
 * @version POG 3.2 / PHP5.1 MYSQL
 * @see http://www.phpobjectgenerator.com/plog/tutorials/45/pdo-mysql
 * @copyright Free for personal & commercial use. (Offered under the BSD license)
 * @link http://www.phpobjectgenerator.com/?language=php5.1&wrapper=pdo&pdoDriver=mysql&objectName=lends_user&attributeList=array+%28%0A++0+%3D%3E+%27wp_user%27%2C%0A++1+%3D%3E+%27idclientIp%27%2C%0A++2+%3D%3E+%27idCountry%27%2C%0A++3+%3D%3E+%27idScanStatus%27%2C%0A++4+%3D%3E+%27idType%27%2C%0A++5+%3D%3E+%27jumioIdScanReference%27%2C%0A++6+%3D%3E+%27merchantIdScanReference%27%2C%0A++7+%3D%3E+%27verificationStatus%27%2C%0A++8+%3D%3E+%27customerId%27%2C%0A++9+%3D%3E+%27idFirstName%27%2C%0A++10+%3D%3E+%27idLastName%27%2C%0A++11+%3D%3E+%27idDob%27%2C%0A++12+%3D%3E+%27idExpiry%27%2C%0A++13+%3D%3E+%27idNumber%27%2C%0A++14+%3D%3E+%27idScanImage%27%2C%0A++15+%3D%3E+%27idScanImageBackside%27%2C%0A++16+%3D%3E+%27stripe_token%27%2C%0A%29&typeList=array%2B%2528%250A%2B%2B0%2B%253D%253E%2B%2527bigint%252820%2529%2527%252C%250A%2B%2B1%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B2%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B3%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B4%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B5%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B6%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B7%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B8%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B9%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B10%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B11%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B12%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B13%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B14%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B15%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B16%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2529&classList=array+%28%0A++0+%3D%3E+%27%27%2C%0A++1+%3D%3E+%27%27%2C%0A++2+%3D%3E+%27%27%2C%0A++3+%3D%3E+%27%27%2C%0A++4+%3D%3E+%27%27%2C%0A++5+%3D%3E+%27%27%2C%0A++6+%3D%3E+%27%27%2C%0A++7+%3D%3E+%27%27%2C%0A++8+%3D%3E+%27%27%2C%0A++9+%3D%3E+%27%27%2C%0A++10+%3D%3E+%27%27%2C%0A++11+%3D%3E+%27%27%2C%0A++12+%3D%3E+%27%27%2C%0A++13+%3D%3E+%27%27%2C%0A++14+%3D%3E+%27%27%2C%0A++15+%3D%3E+%27%27%2C%0A++16+%3D%3E+%27%27%2C%0A%29
 */
class lends_user extends POG_Base
{
    public $lends_userId = '';

    /**
     * @var bigint(20)
     */
    public $wp_user;

    /**
     * @var VARCHAR(255)
     */
    public $idclientIp;

    /**
     * @var VARCHAR(255)
     */
    public $idCountry;

    /**
     * @var VARCHAR(255)
     */
    public $idScanStatus;

    /**
     * @var VARCHAR(255)
     */
    public $idType;

    /**
     * @var VARCHAR(255)
     */
    public $jumioIdScanReference;

    /**
     * @var VARCHAR(255)
     */
    public $merchantIdScanReference;

    /**
     * @var VARCHAR(255)
     */
    public $verificationStatus;

    /**
     * @var VARCHAR(255)
     */
    public $customerId;

    /**
     * @var VARCHAR(255)
     */
    public $idFirstName;

    /**
     * @var VARCHAR(255)
     */
    public $idLastName;

    /**
     * @var VARCHAR(255)
     */
    public $idDob;

    /**
     * @var VARCHAR(255)
     */
    public $idExpiry;

    /**
     * @var VARCHAR(255)
     */
    public $idNumber;

    /**
     * @var VARCHAR(255)
     */
    public $idScanImage;

    /**
     * @var VARCHAR(255)
     */
    public $idScanImageBackside;

    /**
     * @var VARCHAR(255)
     */
    public $stripe_token;

    public $pog_attribute_type = array(
        "lends_userId" => array('db_attributes' => array("NUMERIC", "INT")),
        "wp_user" => array('db_attributes' => array("NUMERIC", "BIGINT", "20")),
        "idclientIp" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
        "idCountry" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
        "idScanStatus" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
        "idType" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
        "jumioIdScanReference" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
        "merchantIdScanReference" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
        "verificationStatus" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
        "customerId" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
        "idFirstName" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
        "idLastName" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
        "idDob" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
        "idExpiry" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
        "idNumber" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
        "idScanImage" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
        "idScanImageBackside" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
        "stripe_token" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
    );
    public $pog_query;


    /**
     * Getter for some private attributes
     * @return mixed $attribute
     */
    public function __get($attribute)
    {
        if (isset($this->{"_".$attribute}))
        {
            return $this->{"_".$attribute};
        }
        else
        {
            return false;
        }
    }

    function lends_user($wp_user='', $idclientIp='', $idCountry='', $idScanStatus='', $idType='', $jumioIdScanReference='', $merchantIdScanReference='', $verificationStatus='', $customerId='', $idFirstName='', $idLastName='', $idDob='', $idExpiry='', $idNumber='', $idScanImage='', $idScanImageBackside='', $stripe_token='')
    {
        $this->wp_user = $wp_user;
        $this->idclientIp = $idclientIp;
        $this->idCountry = $idCountry;
        $this->idScanStatus = $idScanStatus;
        $this->idType = $idType;
        $this->jumioIdScanReference = $jumioIdScanReference;
        $this->merchantIdScanReference = $merchantIdScanReference;
        $this->verificationStatus = $verificationStatus;
        $this->customerId = $customerId;
        $this->idFirstName = $idFirstName;
        $this->idLastName = $idLastName;
        $this->idDob = $idDob;
        $this->idExpiry = $idExpiry;
        $this->idNumber = $idNumber;
        $this->idScanImage = $idScanImage;
        $this->idScanImageBackside = $idScanImageBackside;
        $this->stripe_token = $stripe_token;
    }


    /**
     * Gets object from database
     * @param integer $lends_userId
     * @return object $lends_user
     */
    function Get($lends_userId)
    {
        $connection = Database::Connect();
        $this->pog_query = "select * from `lends_user` where `lends_userid`='".intval($lends_userId)."' LIMIT 1";
        $cursor = Database::Reader($this->pog_query, $connection);
        while ($row = Database::Read($cursor))
        {
            $this->lends_userId = $row['lends_userid'];
            $this->wp_user = $this->Unescape($row['wp_user']);
            $this->idclientIp = $this->Unescape($row['idclientip']);
            $this->idCountry = $this->Unescape($row['idcountry']);
            $this->idScanStatus = $this->Unescape($row['idscanstatus']);
            $this->idType = $this->Unescape($row['idtype']);
            $this->jumioIdScanReference = $this->Unescape($row['jumioidscanreference']);
            $this->merchantIdScanReference = $this->Unescape($row['merchantidscanreference']);
            $this->verificationStatus = $this->Unescape($row['verificationstatus']);
            $this->customerId = $this->Unescape($row['customerid']);
            $this->idFirstName = $this->Unescape($row['idfirstname']);
            $this->idLastName = $this->Unescape($row['idlastname']);
            $this->idDob = $this->Unescape($row['iddob']);
            $this->idExpiry = $this->Unescape($row['idexpiry']);
            $this->idNumber = $this->Unescape($row['idnumber']);
            $this->idScanImage = $this->Unescape($row['idscanimage']);
            $this->idScanImageBackside = $this->Unescape($row['idscanimagebackside']);
            $this->stripe_token = $this->Unescape($row['stripe_token']);
        }
        return $this;
    }


    /**
     * Returns a sorted array of objects that match given conditions
     * @param multidimensional array {("field", "comparator", "value"), ("field", "comparator", "value"), ...}
     * @param string $sortBy
     * @param boolean $ascending
     * @param int limit
     * @return array $lends_userList
     */
    function GetList($fcv_array = array(), $sortBy='', $ascending=true, $limit='')
    {
        $connection = Database::Connect();
        $sqlLimit = ($limit != '' ? "LIMIT $limit" : '');
        $this->pog_query = "select * from `lends_user` ";
        $lends_userList = Array();
        if (sizeof($fcv_array) > 0)
        {
            $this->pog_query .= " where ";
            for ($i=0, $c=sizeof($fcv_array); $i<$c; $i++)
            {
                if (sizeof($fcv_array[$i]) == 1)
                {
                    $this->pog_query .= " ".$fcv_array[$i][0]." ";
                    continue;
                }
                else
                {
                    if ($i > 0 && sizeof($fcv_array[$i-1]) != 1)
                    {
                        $this->pog_query .= " AND ";
                    }
                    if (isset($this->pog_attribute_type[$fcv_array[$i][0]]['db_attributes']) && $this->pog_attribute_type[$fcv_array[$i][0]]['db_attributes'][0] != 'NUMERIC' && $this->pog_attribute_type[$fcv_array[$i][0]]['db_attributes'][0] != 'SET')
                    {
                        if ($GLOBALS['configuration']['db_encoding'] == 1)
                        {
                            $value = POG_Base::IsColumn($fcv_array[$i][2]) ? "BASE64_DECODE(".$fcv_array[$i][2].")" : "'".$fcv_array[$i][2]."'";
                            $this->pog_query .= "BASE64_DECODE(`".$fcv_array[$i][0]."`) ".$fcv_array[$i][1]." ".$value;
                        }
                        else
                        {
                            $value =  POG_Base::IsColumn($fcv_array[$i][2]) ? $fcv_array[$i][2] : "'".$this->Escape($fcv_array[$i][2])."'";
                            $this->pog_query .= "`".$fcv_array[$i][0]."` ".$fcv_array[$i][1]." ".$value;
                        }
                    }
                    else
                    {
                        $value = POG_Base::IsColumn($fcv_array[$i][2]) ? $fcv_array[$i][2] : "'".$fcv_array[$i][2]."'";
                        $this->pog_query .= "`".$fcv_array[$i][0]."` ".$fcv_array[$i][1]." ".$value;
                    }
                }
            }
        }
        if ($sortBy != '')
        {
            if (isset($this->pog_attribute_type[$sortBy]['db_attributes']) && $this->pog_attribute_type[$sortBy]['db_attributes'][0] != 'NUMERIC' && $this->pog_attribute_type[$sortBy]['db_attributes'][0] != 'SET')
            {
                if ($GLOBALS['configuration']['db_encoding'] == 1)
                {
                    $sortBy = "BASE64_DECODE($sortBy) ";
                }
                else
                {
                    $sortBy = "$sortBy ";
                }
            }
            else
            {
                $sortBy = "$sortBy ";
            }
        }
        else
        {
            $sortBy = "lends_userid";
        }
        $this->pog_query .= " order by ".$sortBy." ".($ascending ? "asc" : "desc")." $sqlLimit";
        $thisObjectName = get_class($this);
        $cursor = Database::Reader($this->pog_query, $connection);
        while ($row = Database::Read($cursor))
        {
            $lends_user = new $thisObjectName();
            $lends_user->lends_userId = $row['lends_userid'];
            $lends_user->wp_user = $this->Unescape($row['wp_user']);
            $lends_user->idclientIp = $this->Unescape($row['idclientip']);
            $lends_user->idCountry = $this->Unescape($row['idcountry']);
            $lends_user->idScanStatus = $this->Unescape($row['idscanstatus']);
            $lends_user->idType = $this->Unescape($row['idtype']);
            $lends_user->jumioIdScanReference = $this->Unescape($row['jumioidscanreference']);
            $lends_user->merchantIdScanReference = $this->Unescape($row['merchantidscanreference']);
            $lends_user->verificationStatus = $this->Unescape($row['verificationstatus']);
            $lends_user->customerId = $this->Unescape($row['customerid']);
            $lends_user->idFirstName = $this->Unescape($row['idfirstname']);
            $lends_user->idLastName = $this->Unescape($row['idlastname']);
            $lends_user->idDob = $this->Unescape($row['iddob']);
            $lends_user->idExpiry = $this->Unescape($row['idexpiry']);
            $lends_user->idNumber = $this->Unescape($row['idnumber']);
            $lends_user->idScanImage = $this->Unescape($row['idscanimage']);
            $lends_user->idScanImageBackside = $this->Unescape($row['idscanimagebackside']);
            $lends_user->stripe_token = $this->Unescape($row['stripe_token']);
            $lends_userList[] = $lends_user;
        }
        return $lends_userList;
    }


    /**
     * Saves the object to the database
     * @return integer $lends_userId
     */
    function Save()
    {
        $connection = Database::Connect();
        $rows = 0;
        if ($this->lends_userId!=''){
            $this->pog_query = "select `lends_userid` from `lends_user` where `lends_userid`='".$this->lends_userId."' LIMIT 1";
            $rows = Database::Query($this->pog_query, $connection);
        }
        if ($rows > 0)
        {
            $this->pog_query = "update `lends_user` set
			`wp_user`='".$this->Escape($this->wp_user)."',
			`idclientip`='".$this->Escape($this->idclientIp)."',
			`idcountry`='".$this->Escape($this->idCountry)."',
			`idscanstatus`='".$this->Escape($this->idScanStatus)."',
			`idtype`='".$this->Escape($this->idType)."',
			`jumioidscanreference`='".$this->Escape($this->jumioIdScanReference)."',
			`merchantidscanreference`='".$this->Escape($this->merchantIdScanReference)."',
			`verificationstatus`='".$this->Escape($this->verificationStatus)."',
			`customerid`='".$this->Escape($this->customerId)."',
			`idfirstname`='".$this->Escape($this->idFirstName)."',
			`idlastname`='".$this->Escape($this->idLastName)."',
			`iddob`='".$this->Escape($this->idDob)."',
			`idexpiry`='".$this->Escape($this->idExpiry)."',
			`idnumber`='".$this->Escape($this->idNumber)."',
			`idscanimage`='".$this->Escape($this->idScanImage)."',
			`idscanimagebackside`='".$this->Escape($this->idScanImageBackside)."',
			`stripe_token`='".$this->Escape($this->stripe_token)."' where `lends_userid`='".$this->lends_userId."'";
        }
        else
        {
            $this->pog_query = "insert into `lends_user` (`wp_user`, `idclientip`, `idcountry`, `idscanstatus`, `idtype`, `jumioidscanreference`, `merchantidscanreference`, `verificationstatus`, `customerid`, `idfirstname`, `idlastname`, `iddob`, `idexpiry`, `idnumber`, `idscanimage`, `idscanimagebackside`, `stripe_token` ) values (
			'".$this->Escape($this->wp_user)."',
			'".$this->Escape($this->idclientIp)."',
			'".$this->Escape($this->idCountry)."',
			'".$this->Escape($this->idScanStatus)."',
			'".$this->Escape($this->idType)."',
			'".$this->Escape($this->jumioIdScanReference)."',
			'".$this->Escape($this->merchantIdScanReference)."',
			'".$this->Escape($this->verificationStatus)."',
			'".$this->Escape($this->customerId)."',
			'".$this->Escape($this->idFirstName)."',
			'".$this->Escape($this->idLastName)."',
			'".$this->Escape($this->idDob)."',
			'".$this->Escape($this->idExpiry)."',
			'".$this->Escape($this->idNumber)."',
			'".$this->Escape($this->idScanImage)."',
			'".$this->Escape($this->idScanImageBackside)."',
			'".$this->Escape($this->stripe_token)."' )";
        }
        $insertId = Database::InsertOrUpdate($this->pog_query, $connection);
        if ($this->lends_userId == "")
        {
            $this->lends_userId = $insertId;
        }
        return $this->lends_userId;
    }


    /**
     * Clones the object and saves it to the database
     * @return integer $lends_userId
     */
    function SaveNew()
    {
        $this->lends_userId = '';
        return $this->Save();
    }


    /**
     * Deletes the object from the database
     * @return boolean
     */
    function Delete()
    {
        $connection = Database::Connect();
        $this->pog_query = "delete from `lends_user` where `lends_userid`='".$this->lends_userId."'";
        return Database::NonQuery($this->pog_query, $connection);
    }


    /**
     * Deletes a list of objects that match given conditions
     * @param multidimensional array {("field", "comparator", "value"), ("field", "comparator", "value"), ...}
     * @param bool $deep
     * @return
     */
    function DeleteList($fcv_array)
    {
        if (sizeof($fcv_array) > 0)
        {
            $connection = Database::Connect();
            $pog_query = "delete from `lends_user` where ";
            for ($i=0, $c=sizeof($fcv_array); $i<$c; $i++)
            {
                if (sizeof($fcv_array[$i]) == 1)
                {
                    $pog_query .= " ".$fcv_array[$i][0]." ";
                    continue;
                }
                else
                {
                    if ($i > 0 && sizeof($fcv_array[$i-1]) !== 1)
                    {
                        $pog_query .= " AND ";
                    }
                    if (isset($this->pog_attribute_type[$fcv_array[$i][0]]['db_attributes']) && $this->pog_attribute_type[$fcv_array[$i][0]]['db_attributes'][0] != 'NUMERIC' && $this->pog_attribute_type[$fcv_array[$i][0]]['db_attributes'][0] != 'SET')
                    {
                        $pog_query .= "`".$fcv_array[$i][0]."` ".$fcv_array[$i][1]." '".$this->Escape($fcv_array[$i][2])."'";
                    }
                    else
                    {
                        $pog_query .= "`".$fcv_array[$i][0]."` ".$fcv_array[$i][1]." '".$fcv_array[$i][2]."'";
                    }
                }
            }
            return Database::NonQuery($pog_query, $connection);
        }
    }
}
?>
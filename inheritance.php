<?php
class User
{
	public $username;
	private $email;
	public function __construct($username,$email)
	{
		$this->username=$username;
		$this->email=$email;
	}	
	public function getemail()
	{
		return $this->email;
	}
	public function setemail($email)
	{
       if(strpos($email,'@')>-1)
       {
       	$this->email=$email;
       }
	}
}

class admin extends User
{
	public $level;
   public function __construct($username,$email,$level)
   {
   	$this->level=level;
   	parent::__construct($username,$email);
   }
}
$userone= new admin("utkarshji","utkji@gmail.com","labor");
echo $userone->getemail();


?>
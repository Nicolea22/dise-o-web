<?php
	
class User
{

	private $id;
	private $name;
	private $email;
	private $password;
	private $reg_date;


	public function __construct($id, $nombre, $email , $password, $reg_date)
	{
		$this->id = $id;
		$this->name = $name;
		$this->email = $email;
		$this->password = $password;
		$this->reg_date = $reg_date;
	}


	//getters
	public function get_id()
	{
		return $this->id;
	}

	public function get_name()
	{
		return $this->name;
	}

	public function get_email()
	{
		return $this->email;
	}

	public function get_password()
	{
		return $this->password;
	}

	public function get_reg_date()
	{
		return $this->reg_date;
	}
	//getters


	//setters
	public function set_name($name)
	{
		return $this->name = $name;
	}

	public function set_email($email)
	{
		return $this->email = $email;
	}

	public function set_password($password)
	{
		return $this->password = $password;
	}

	public function get_reg_date($reg_date)
	{
		return $this->reg_date = $reg_date;
	}
	//setters

}
>

